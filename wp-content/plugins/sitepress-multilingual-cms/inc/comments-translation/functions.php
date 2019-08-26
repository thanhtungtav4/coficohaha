<?php
// disabled
//define('MACHINE_TRANSLATE_API_URL',"http://ajax.googleapis.com/ajax/services/language/translate?v=1.0&q=%s&langpair=%s|%s"); 

require_once ICL_PLUGIN_PATH . '/inc/comments-translation/google_languages_map.php';

class IclCommentsTranslation{

    public  $enable_comments_translation;
    public  $enable_replies_translation;
    public  $user_language;
    public  $is_visitor = false;
    private $icl_comment_count_cache;

    
    function __construct(){
        add_action('init', array($this, 'init'));
    }
    
    function init(){
        global $current_user, $sitepress_settings, $sitepress, $pagenow, $wpdb;
        if(!empty($current_user->ID)){
            $this->enable_comments_translation = get_user_meta($current_user->data->ID,'icl_enable_comments_translation',true);
            $this->enable_replies_translation = get_user_meta($current_user->data->ID,'icl_enable_replies_translation',true);
            
            $this->user_language = $sitepress->get_user_admin_language($current_user->data->ID);
            if(!$this->user_language){
                $this->user_language = $sitepress_settings['admin_default_language'];
                if($this->user_language == '_default_') $this->user_language = $sitepress->get_default_language();
            }            
        }else{
            $this->is_visitor = true;
            $this->user_language = $sitepress->get_current_language();            
        }

        $this->icl_comment_count_cache = new icl_cache( "comment_count_cache" );

        if(defined('WP_ADMIN') && $this->enable_comments_translation){
            add_action('admin_print_scripts', array($this,'js_scripts_setup'));            
        }
        
        add_action('manage_comments_nav', array($this,'use_comments_array_filter'));
                                                                              
        add_filter('comments_array', array($this,'comments_array_filter'));
        
        add_filter('comment_feed_join', array($this, 'comment_feed_join'));
        add_filter('query', array($this, 'filter_queries'));
        //add_filter('comment_feed_where', array($this, 'comment_feed_where'));
        
        add_action('delete_comment', array($this, 'delete_comment_actions'));
        add_action('wp_set_comment_status', array($this, 'wp_set_comment_status_actions'), 1, 2);

	    $filtered_action = filter_input( INPUT_POST, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
        if( 0 === strcmp( $filtered_action, 'editedcomment' ) ){
            add_action('transition_comment_status', array($this, 'transition_comment_status_actions'), 1, 3);
        }

	    if ( 'comment.php' == $pagenow ) {

		    $c = false;

		    if ( isset( $_GET[ 'c' ] ) ) {
			    $c = intval( $_GET[ 'c' ] );
		    } elseif ( isset( $_POST[ 'c' ] ) ) {
			    $c = intval( $_POST[ 'c' ] );
		    }

		    if ( $c !== false ) {
                $row = $wpdb->get_row(
                    $wpdb->prepare(
                        "
                        SELECT c.user_id, t.language_code
                        FROM {$wpdb->comments} c JOIN {$wpdb->prefix}icl_translations t ON c.comment_ID = t.element_id AND element_type='comment'
                        WHERE c.comment_ID= %d",
                        $c
                    )
                );
		    }
		    if ( isset($row) && isset( $row->user_id ) && isset( $row->language_code ) ) {
			    $comment_author = $row->user_id;
			    $comment_lang   = $row->language_code;
			    if ( $current_user->data->ID == $comment_author && $comment_lang == $this->user_language ) {
				    add_action( 'admin_head', array( $this, 'admin_head_actions' ) );
			    }
		    }
	    }
        add_action('edit_comment', array($this, 'edit_comment_actions'));
        
        add_action('comment_form', array($this, 'comment_form_options'));        
        
        //add_action('comment_post', array($this, 'comment_post'));
        add_action('wp_insert_comment', array($this, 'wp_insert_comment'), 10, 2);
        
        if(defined('WP_ADMIN') && $this->enable_comments_translation){
            add_filter('comment_row_actions', array($this,'comment_row_actions'),1, 2);
        }
        
        if(defined('WP_ADMIN')){
            add_filter('comment_text', array($this, 'comment_text_filter_admin'));
        }else{
            add_filter('comment_text', array($this, 'comment_text_filter'));
        }
            
        add_filter('xmlrpc_methods',array($this, 'add_custom_xmlrpc_methods'));
        
        add_filter('get_comments_number', array($this, 'get_comments_number_filter'));        
        
        global $wpml_add_message_translation_callbacks;
        $wpml_add_message_translation_callbacks['comment'][] = array($this, 'add_comment_translation');
        
        $filtered_retry_mtr = filter_input( INPUT_GET, 'retry_mtr', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
	    $filtered_nonce = filter_input( INPUT_GET, 'nonce', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
        if ( is_null( $filtered_retry_mtr ) ){
            global $wpdb;
            $nonce = wp_create_nonce('machine-translation-failed'.$filtered_retry_mtr);
            if ( 0 === strcmp( $filtered_nonce, $nonce ) ) {
								$delete_query = "DELETE FROM {$wpdb->comments} WHERE comment_ID=%d";
								$delete_query_prepared = $wpdb->prepare($delete_query, $filtered_retry_mtr);
                $wpdb->query($delete_query_prepared);
								$delete_query = "DELETE FROM {$wpdb->prefix}icl_translations WHERE element_type='comment' AND element_id=%d";
								$delete_query_prepared = $wpdb->prepare($delete_query, $filtered_retry_mtr);
                $wpdb->query($delete_query_prepared);
                if(defined('WP_ADMIN')){
                    wp_redirect(rtrim(preg_replace('@retry_mtr=([0-9]+)&nonce=([0-9a-z]+)@','',$_SERVER['REQUEST_URI']),'?'));            
                }else{
                    add_action('template_redirect', array($this, '__reload_page'));
                }
            }                      
        }
                
        require_once ICL_PLUGIN_PATH . '/inc/cache.php';        
        $this->icl_comment_count_cache = new icl_cache();
        
        add_filter('views_edit-comments', array($this, 'pending_by_language'));
                
    }

	function pending_by_language( $views ) {
		global $wpdb, $sitepress;

		$current_language = $sitepress->get_current_language();

		if ( isset( $views[ 'moderated' ] ) ) {

			preg_match( '#<span class="pending-count">([0-9,]+)</span>#', $views[ 'moderated' ], $matches );
			if ( $matches[ 1 ] > 0 ) {
				$results_sql      = "
					 SELECT tr.language_code, COUNT(tr.element_id) AS c
					 FROM {$wpdb->comments} c
					 JOIN {$wpdb->prefix}icl_translations tr ON tr.element_id = c.comment_ID
					 WHERE c.comment_approved = '0'  AND tr.element_type = 'comment'
					 GROUP BY tr.language_code
					 HAVING c > 0
				 ";
				$results_prepared =  $results_sql;

				$results = $wpdb->get_results( $results_prepared );
				if ( !empty( $results ) ) {
					$language_break = array();
					foreach ( $results as $r ) {
						$language_details  = $sitepress->get_language_details( $r->language_code );
						$language_break[ ] = sprintf( '<a %s href="%s">%s</a>(%d)', $current_language == $r->language_code ? ' class="current"' : '', admin_url( 'edit-comments.php?comment_status=moderated&lang=' .
																																								 $r->language_code ), $language_details[ 'display_name' ], $r->c );
					}
					$views[ 'moderated' ] .= ' - ' . join( ', ', $language_break );
				}
			}
		}

		return $views;
	}
    
    function __reload_page(){
        wp_redirect(get_permalink());
    }
    
    function admin_head_actions(){
        add_meta_box('comment', __('Translate', 'sitepress'), array($this, 'comment_form_options'), 'comment', 'normal', 'high', array(1));
    }
        
    function js_scripts_setup(){        
        global $pagenow, $sitepress;                
        if($pagenow == 'index.php' || $pagenow == 'edit-comments.php' || $pagenow == 'post.php'): 
            $user_lang_info = $sitepress->get_language_details($this->user_language);
            ?>
            <script type="text/javascript">        
            var icl_comment_original_language = [];
            <?php if($this->enable_replies_translation): ?>
            function icl_comment_reply_options(){
				var oc;
				icl_comment_original_language.forEach(function (item) {
					oc = item;
					jQuery('#replycontainer').prepend('<input type="hidden" name="icl_comment_language_' + oc.c + '" value="' + oc.lang + '" />');
				});
                var content_ro = '<label id="icl_translate_from_lang" style="cursor:pointer">';       
                content_ro += '<input type="hidden" name="icl_user_language" value="<?php echo $this->user_language ?>" />';
                content_ro += '<input style="width:15px;" type="checkbox" name="icl_translate_reply" <?php if($this->enable_replies_translation):?>checked="checked"<?php endif;?> />';         
                content_ro += '<?php echo sprintf(__('Translate from %s', 'sitepress'),$user_lang_info['display_name']); ?>';
                content_ro += '</label><br clear="all" /><br />';
                jQuery('#replysubmit').prepend(content_ro);
                jQuery('input[name="icl_translate_reply"]').click(function(){  
                    jQuery(this).val(jQuery(this).attr('checked')?1:0);
                });
                
                jQuery('.vim-r').click(function(){                    
                    var oc = jQuery(this).parent().parent().parent().parent().attr('id').split('-');
                    if(jQuery('input[name="icl_comment_language_'+oc[1]+'"]').length){
                        jQuery('input[name="icl_translate_reply"]').attr('checked','checked');
                        jQuery('#icl_translate_from_lang').show();                                                
                    }else{
                        jQuery('input[name="icl_translate_reply"]').removeAttr('checked');
                        jQuery('#icl_translate_from_lang').hide();
                    }
                });
                
                jQuery('.vim-q').click(function(){                    
                    jQuery('#icl_translate_from_lang').hide();
                })
            }
            addLoadEvent(icl_comment_reply_options);        
            <?php endif; ?>
            </script>
        <?php endif; 
    }
    
    function comment_row_actions($actions, $comment){
        global $sitepress, $wpdb;
        $ctrid = (int)$sitepress->get_element_trid($comment->comment_ID, 'comment');        
        $original_comment_language = $wpdb->get_row($wpdb->prepare("
            SELECT t.language_code, lt.name 
            FROM {$wpdb->prefix}icl_translations t
            JOIN {$wpdb->prefix}icl_languages_translations lt ON t.language_code = lt.language_code
            WHERE trid = %d AND element_type='comment' AND element_id <> %d
                AND lt.display_language_code = %s
        ", $ctrid, $comment->comment_ID, $sitepress->get_current_language() ) );
        if(empty($original_comment_language)){
            return $actions;
        }
        ?>
        <script type="text/javascript">
            icl_comment_original_language.push({c:<?php echo $comment->comment_ID ?>,lang:'<?php echo $original_comment_language->language_code ?>',lang_name:'<?php echo $original_comment_language->name ?>'});            
        </script>
        <div style="float:right;margin-top:4px;">
            <?php if($this->user_language == $original_comment_language->language_code): ?>            
				<small><a href="#c<?php echo $comment->comment_ID ?>" class="icl_original_comment_link"><?php _e('Back to translated version', 'sitepress') ?></a></small>
            <?php else: ?>
				<small> <a href="#c<?php echo $comment->comment_ID ?>" class="icl_original_comment_link"><?php printf(__('Original language: %s', 'sitepress'),$original_comment_language->name) ?></a></small>
            <?php endif; ?>
        </div>
        <?php
        return $actions;
    }

    
    
    public function machine_translate($from_language, $to_language, $text){
        
        //not using Google's Translate API (shutting down) 
        return $text;
    }

	function delete_comment_actions( $comment_id ) {
		global $sitepress;
		$lang_details = $sitepress->get_element_language_details( $comment_id, 'comment' );
		if ( $lang_details && isset( $lang_details->trid ) && isset( $lang_details->source_language_code ) ) {
			$trid = $lang_details->trid;
			if ( $lang_details->source_language_code ) {
				$sitepress->delete_element_translation( $trid, 'comment', $lang_details->language_code );
			} else {
				$translations = $sitepress->get_element_translations( $lang_details->trid, 'comment' );
				$sitepress->delete_element_translation( $trid, 'comment' );
				foreach ( $translations as $t ) {
					if ( isset( $t->element_id ) && $t->element_id != $comment_id ) {
						remove_action( 'delete_comment', array( $this, 'delete_comment_actions' ) );
						wp_delete_comment( $t->element_id );
						add_action( 'delete_comment', array( $this, 'delete_comment_actions' ) );
					}
				}
			}
		}
	}

    function wp_set_comment_status_actions($comment_id, $status){
        global $sitepress;        
        static $ids_processed = array(); // using this for avoiding the infinite loop
        $trid = $sitepress->get_element_trid($comment_id, 'comment');
        if($trid){            
            $translations = $sitepress->get_element_translations($trid, 'comment');
            foreach($translations as $t){
                if(isset($t->element_id) && $t->element_id != $comment_id && !in_array($t->element_id,$ids_processed)){
                    wp_set_comment_status($t->element_id, $status);
                    $ids_processed[] = $t->element_id;
                }
            }
        }        
    }
    
    function edit_comment_actions($comment_id){
        // we'll use this hook ONLY for updating comments - not for new comments
        if(isset($_POST['icl_translate_reply'])){
            global $wpdb;
            $res = $wpdb->get_row( $wpdb->prepare("
                SELECT MD5(c.comment_content)<> ms.md5 AND ms.md5 IS NOT NULL AS updated, ms.to_language
                FROM {$wpdb->comments} c 
                    JOIN {$wpdb->prefix}icl_message_status ms ON c.comment_ID
                    WHERE c.comment_ID = %d AND ms.object_type='comment'
                ", $comment_id) );
            if(isset($res->updated) && $res->updated){
                $this->send_comment_to_translation($comment_id, $res->to_language);
            }        
        }
    }
    
    function transition_comment_status_actions($new_status, $old_status, $comment){
        global $sitepress, $wpdb;
        $comment_id = $comment->comment_ID;    
        static $ids_processed_tr = array(); // using this for avoiding the infinite loop
        $trid = $sitepress->get_element_trid($comment_id, 'comment');
        if($trid){            
            $translations = $sitepress->get_element_translations($trid, 'comment');
            foreach($translations as $t){
                if(isset($t->element_id) && $t->element_id != $comment_id && !in_array($t->element_id,$ids_processed_tr)){
                    //wp_set_comment_status($t->element_id, $comment->comment_approved);
                    $wpdb->update($wpdb->comments, array('comment_approved'=>$comment->comment_approved), array('comment_id'=>$t->element_id));
                    $ids_processed_tr[] = $t->element_id;
                }
            }
        }                
    }
    
    function comment_form_options(){
        global $wpdb, $post, $userdata, $sitepress; 
        $user_lang_info = $sitepress->get_language_details($this->user_language);
		$current_language = $sitepress->get_current_language();

        if(empty($post)){ //edit comment
            global $comment;
            $ctrid = $sitepress->get_element_trid($comment->comment_ID, 'comment');
            // original comment language
            $comment_language = $wpdb->get_var(
                $wpdb->prepare("SELECT language_code
                                FROM {$wpdb->prefix}icl_translations
                                WHERE trid=%d
                                  AND element_type='comment'
                                  AND source_language_code IS NULL",
                                $ctrid ) );
            $post_type = $wpdb->get_var( $wpdb->prepare("SELECT post_type
                                                         FROM {$wpdb->posts} WHERE ID = %d", $comment->comment_post_ID ) );
            $cur_lang = $wpdb->get_var(
                $wpdb->prepare("SELECT language_code
                                FROM {$wpdb->prefix}icl_translations
                                WHERE  element_id = %d
                                  AND element_type = %s",
                               $comment->comment_post_ID, 'post_' . $post_type ) );
        }else{ // add new comment on front end
			$cur_lang = $current_language;
            $comment_language = $current_language;
        }               
        
        $page_lang_info = $wpdb->get_var(
            $wpdb->prepare("
            SELECT name 
            FROM {$wpdb->prefix}icl_languages_translations 
            WHERE language_code = %s AND display_language_code = %s
        ", $cur_lang, $this->user_language ) );
        
        if($sitepress->have_icl_translator($this->user_language, $cur_lang)){
            $disabled = '';
        }else{            
            $disabled = ' disabled="disabled"';
        }        
        ?>
        
        <input type="hidden" name="icl_comment_language" value="<?php echo $comment_language ?>" />
        
        <?php if($this->enable_replies_translation && $userdata->user_level > 7 && $user_lang_info['code'] != $cur_lang): ?>
        <label style="cursor:pointer">       
        <input type="hidden" name="icl_user_language" value="<?php echo $this->user_language ?>" />
        <input style="width:15px;" type="checkbox" name="icl_translate_reply" checked="checked"<?php echo $disabled ?> />         
        <span><?php echo sprintf(__('Translate from %s into %s', 'sitepress'),$user_lang_info['display_name'], $page_lang_info); ?>
        <?php if($disabled): ?>
        <br /><small><?php printf(__('There is no translator for this language pair. <a href="%s">Details</a>.', 'sitepress'), get_option('siteurl') . '/wp-admin/admin.php?page=' . basename(ICL_PLUGIN_PATH) . '/menu/content-translation.php'); ?></small>
        <?php endif; ?>
        </span>
        </label>
        <?php endif; ?>  
        <?php 
    }    
        
    function comments_array_filter($comments){
        if(defined('__comments_array_filter_runonce')){
            return $comments;                
        }
        global $wpdb, $sitepress;
            
        define('__comments_array_filter_runonce', true);
                    
        if(empty($comments)){
            return $comments;
        }                
        
        foreach($comments as $c){
            $cids[] = $c->comment_ID;
        }  
        
        if($this->is_visitor){
            // get comments in visitor's language
            if(!empty($cids)){
                $comment_ids = $wpdb->get_col(
                    $wpdb->prepare(
                        "
                    SELECT element_id
                    FROM {$wpdb->prefix}icl_translations
                    WHERE element_type='comment' AND element_id IN (" . wpml_prepare_in( $cids, '%d' ) . ")
                    AND language_code = %s",
                        $this->user_language
                    )
                );
                foreach($comments as $k=>$c){
                    if(!in_array($c->comment_ID , (array)$comment_ids)){
                        unset($comments[$k]);
                    }
                } 
            }
        }elseif(!$this->enable_comments_translation){            
            // show only original comments regardless of the user language
			$comment_ids = array();
            if(!empty($cids)){
                $comment_ids = $wpdb->get_col("
                    SELECT element_id
                    FROM {$wpdb->prefix}icl_translations
                    WHERE element_type='comment' AND element_id IN(" . wpml_prepare_in( $cids, '%d' ) . ")
                    AND source_language_code IS NULL
                ");                
            }
            foreach($comments as $k=>$c){
                if(!in_array($c->comment_ID , $comment_ids)){
                    unset($comments[$k]);
                }
            }

        }else{
			$comment_ids = array();
			$comments_by_id = array();
            foreach($comments as $c){
                $comment_ids[] = $c->comment_ID;
                $comments_by_id[$c->comment_ID] = $c;
            }
            
            $trids = $wpdb->get_col("
                SELECT DISTINCT trid
                FROM {$wpdb->prefix}icl_translations
                WHERE element_type='comment'
                  AND element_id IN (" . wpml_prepare_in( $comment_ids, '%d' ) . ")
            ");
            
            // filter comments in the user's language
			$comments_in_the_users_language = array();
            $translated_comments_trids = array();
            if(!empty($trids)){
                $res = $wpdb->get_results( $wpdb->prepare("
                    SELECT element_id, trid 
                    FROM {$wpdb->prefix}icl_translations
                    WHERE element_type='comment'
                      AND trid IN (". wpml_prepare_in( $trids, '%d' ) .")
                      AND language_code = %s
                ", $this->user_language));   
                foreach($res as $row){
                    $comments_in_the_users_language[] = $row->element_id;
                    $translated_comments_trids[] = $row->trid;
                }
            }            
            $comments_not_translated_trids = array_diff($trids, $translated_comments_trids);
            
            if($comments_not_translated_trids){
                $comments_not_translated = $wpdb->get_col( $wpdb->prepare("
                    SELECT element_id 
                    FROM {$wpdb->prefix}icl_translations
                    WHERE element_type='comment'
                      AND trid IN (" . wpml_prepare_in( $comments_not_translated_trids, '%d' ) . ")
                      AND language_code <> %s
                ", $this->user_language ) );
            }
            if(!empty($comments_not_translated)){            
                $res = $wpdb->get_results("
                    SELECT element_id, trid, language_code
                    FROM {$wpdb->prefix}icl_translations
                    WHERE element_type='comment'
                      AND element_id IN (" . wpml_prepare_in($comments_not_translated, '%d' ) .")
                ");

                $wp_comments_cols = array_keys($wpdb->get_row("SELECT * FROM {$wpdb->comments} LIMIT 1", ARRAY_A));
                
                foreach($res as $original_comment){
                    $comment_content = $comments_by_id[$original_comment->element_id]->comment_content;                                            
                    $machine_translation = $this->machine_translate($original_comment->language_code, $this->user_language, $comment_content);                                        
                    $comment_new = clone $comments_by_id[$original_comment->element_id];                    
                    $comment_new->comment_content = $machine_translation;
                    
                    unset($comment_new->comment_ID);
                    $wpdb->insert($wpdb->comments, array_intersect_key((array)$comment_new, array_flip($wp_comments_cols)));
                    $new_comment_id = $wpdb->insert_id;
                    $sitepress->set_element_language_details($new_comment_id, 'comment', $original_comment->trid, $this->user_language);        
                    $comment_new->comment_ID = $new_comment_id;
                    if($original_comment_parent = $comments_by_id[$original_comment->element_id]->comment_parent){                        
                        // check for the comment parent in the user language
                        $cptrid = $sitepress->get_element_trid($original_comment_parent, 'comment');
                        $comment_new->comment_parent = $wpdb->get_var(
                            $wpdb->prepare( "SELECT element_id
                                             FROM {$wpdb->prefix}icl_translations
                                             WHERE trid = %d
                                              AND element_type='comment'
                                              AND language_code = %s",
                                            $cptrid, $this->user_language ) );
                        $wpdb->update($wpdb->comments, array('comment_parent'=>$comment_new->comment_parent), array('comment_ID'=>$new_comment_id));
                    }          
                        
                    if(!$machine_translation){
                        $nonce = wp_create_nonce('machine-translation-failed'.$new_comment_id);
                        $comment_new->comment_content = '<i>' . sprintf(__('Machine translation failed. <a%s>retry</a>','sitepress'), ' onclick="icl_retry_mtr(this)" id="icl_retry_mtr_'.$comment_new->comment_ID.'_'.$nonce.'" href="#"') . '</i>';
                        $wpdb->update($wpdb->comments, array('comment_content'=>$comment_new->comment_content), array('comment_ID'=>$new_comment_id));
                    } 
                                                                          
                    $comments_in_the_users_language[] = $new_comment_id;
                    $comments[] = $comment_new;
                }
                
            }
            
            //filter out comments in other languages than the user's
            foreach((array)$comments as $k=>$c){
                if(!in_array($c->comment_ID , (array)$comments_in_the_users_language)){
                    unset($comments[$k]);
                }
            }
            
        }
        return array_values($comments);
    }
    
    function use_comments_array_filter(){
        global $comments;
        $comments = $this->comments_array_filter($comments);
    }
    
    function comment_feed_join($join){                
        global $wpdb, $sitepress;
        $lang = $this->enable_comments_translation ? $this->user_language : $sitepress->get_current_language();
        $join .= $wpdb->prepare(" JOIN {$wpdb->prefix}icl_translations tc
                                    ON {$wpdb->comments}.comment_ID = tc.element_id
                                        AND tc.element_type='comment'
                                        AND tc.language_code = %s", $lang);
        return $join;
    }
    
    function filter_queries($sql){
        global $pagenow, $wpdb;

		$filtered_action = filter_input( INPUT_POST, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
		$filtered_mode = filter_input( INPUT_POST, 'mode', FILTER_SANITIZE_FULL_SPECIAL_CHARS );

        if($pagenow == 'index.php'){
            if(preg_match('#SELECT \* FROM (.+)comments ORDER BY comment_date_gmt DESC LIMIT ([0-9]+), ([0-9]+)#i',$sql,$matches)){
								$res = $wpdb->get_results($sql);
				$comments = array();
				foreach( $res as $row){
                    $comments[] = $row;
                }      
                
                if(!$this->enable_comments_translation && $comments){
                    // show only original comments regardless of the user language
                    
                    foreach($comments as $c){
                        $element_comment_ids[] = $c->comment_ID;
                    }        
                    if(!empty($element_comment_ids)){
                        $comment_ids = $wpdb->get_col("
                            SELECT element_id
                            FROM {$wpdb->prefix}icl_translations
                            WHERE element_type='comment'
                              AND element_id IN(". wpml_prepare_in($element_comment_ids, '%d' ) . ")
                            AND source_language_code IS NULL
                        ");
                        if(!empty($comment_ids)){
                            $sql = $wpdb->prepare("
                                    SELECT * FROM {$matches[1]}comments c
                                    WHERE c.comment_ID IN (" . wpml_prepare_in($comment_ids, '%d' ) . ")
                                    ORDER BY c.comment_date_gmt DESC LIMIT %d, %d", $matches[2], $matches[3] );
                        }
                    }
                }else{
                    $this->comments_array_filter($comments);
                    unset($comments);                                    
                    $sql = $wpdb->prepare("
                        SELECT * FROM {$matches[1]}comments c 
                        LEFT JOIN {$matches[1]}icl_translations t ON t.element_id=c.comment_ID 
                        WHERE 
                            (t.element_type='comment' AND t.language_code = %s)
                        ORDER BY c.comment_date_gmt DESC LIMIT %d, %d "
                        , $this->user_language, $matches[2], $matches[3] );
                }
                
            }
        }elseif( 0 === strcmp( $filtered_action, 'get-comments' ) &&  0 === strcmp( $filtered_mode, 'single' ) ) {
            global $sitepress;
            if(preg_match('#SELECT \* FROM (.+)comments USE INDEX \(comment_date_gmt\) WHERE \( comment_approved = \'0\' OR comment_approved = \'1\' \)  AND comment_post_ID = \'([0-9]+)\'  ORDER BY comment_date_gmt ASC LIMIT ([0-9]+), ([0-9]+)#i',$sql,$matches)){
                $post_id = (int) $_POST['post_ID'];
                $post_type = get_post_type($post_id);
                $post_type_prefixed = "post_" . $post_type;
                $q = "SELECT language_code FROM {$wpdb->prefix}icl_translations WHERE element_id=%s AND element_type=%s";
                $q_prepared = $wpdb->prepare($q, $post_id, $post_type_prefixed);
								$row = $wpdb->get_row($q_prepared, ARRAY_N);
                $c_language = $row[0];
                
                if($this->enable_comments_translation){
					$tr_ids_orig = array();
					$post_id = (int) $_POST['post_ID'];
					$q = "SELECT element_id, trid FROM {$wpdb->prefix}icl_translations t
                        JOIN {$wpdb->comments} c ON t.element_id = c.comment_ID AND comment_POST_ID = %d
                        WHERE t.element_type=%s AND language_code=%s";
					$q_prepared = $wpdb->prepare($q, $post_id, 'comment', $c_language);
					$res = $wpdb->get_results($q_prepared);
                    foreach($res as $r){
                        $tr_ids_orig[$r->trid] = $r->element_id;
                    }
										$post_id = (int) $_POST['post_ID'];
										$q = "SELECT element_id, trid FROM {$wpdb->prefix}icl_translations t
                        JOIN {$wpdb->comments} c ON t.element_id = c.comment_ID AND comment_POST_ID = %d
                        WHERE t.element_type=%s AND language_code=%s";
										$q_prepared = $wpdb->prepare($q, $post_id, 'comment', $this->user_language);
                    $res = $wpdb->get_results($q_prepared);                    
                    foreach($res as $r){
                        $tr_ids_tr[$r->trid] = $r->element_id;
                    }   
                    
                    $wp_comments_cols = array_keys($wpdb->get_row("SELECT * FROM {$wpdb->comments} LIMIT 1", ARRAY_A));                 
                    foreach($tr_ids_orig as $o_trid=>$o_cid){
                        if(!isset($tr_ids_tr[$o_trid])){
                            $original_comment = get_comment($tr_ids_orig[$o_trid]);
                            $machine_translation = $this->machine_translate($c_language, $this->user_language, $original_comment->comment_content);
                            $comment_new = clone $original_comment;
                            $comment_new->comment_content = $machine_translation;
                            unset($comment_new->comment_ID);
                            $wpdb->insert($wpdb->comments, array_intersect_key((array)$comment_new, array_flip($wp_comments_cols)));
                            $new_comment_id = $wpdb->insert_id;
                            $sitepress->set_element_language_details($new_comment_id, 'comment', $o_trid, $this->user_language);        
                            
                            if($original_comment->comment_parent){
                                $cptrid = $sitepress->get_element_trid($original_comment->comment_parent, 'comment');    
                                $comment_new->comment_parent = $wpdb->get_var(
                                    $wpdb->prepare( "SELECT element_id
                                                     FROM {$wpdb->prefix}icl_translations
                                                     WHERE trid = %d
                                                      AND element_type='comment'
                                                      AND language_code = %s",
                                                    $cptrid, $this->user_language ) );
                                $wpdb->update($wpdb->comments, array('comment_parent'=>$comment_new->comment_parent), array('comment_ID'=>$new_comment_id));
                            }
                            
                            if(!$machine_translation){
                                $nonce = wp_create_nonce('machine-translation-failed'.$new_comment_id);
                                $comment_new->comment_content = '<i>' . sprintf(__('Machine translation failed. <a%s>retry</a>','sitepress'), ' onclick="icl_retry_mtr(this)" id="icl_retry_mtr_'.$comment_new->comment_ID.'_'.$nonce.'" href="#"') . '</i>';
                                $wpdb->update($wpdb->comments, array('comment_content'=>$comment_new->comment_content), array('comment_ID'=>$new_comment_id));
                            } 
                            
                        }
                    }
                    
                    $c_language =  $this->user_language;                    
                } 
                                           
                $sql = $wpdb->prepare("
                                        SELECT *
                                        FROM {$matches[1]}comments c USE INDEX (comment_date_gmt)
                                            JOIN {$matches[1]}icl_translations t ON t.element_id=c.comment_ID
                                        WHERE
                                            t.element_type='comment' AND t.language_code = %s AND
                                            ( comment_approved = '0' OR comment_approved = '1' ) AND
                                            comment_post_ID = %d
                                        ORDER BY comment_date_gmt ASC
                                        LIMIT %d, %d",
                                        $c_language, $matches[2], $matches[3], $matches[4] );
            }
        }
        return $sql;
    }

    function wp_insert_comment($comment_id, $comment_data){
        global $sitepress, $wpdb;

		$filtered_comment_post_ID = filter_input( INPUT_POST, 'comment_post_ID', FILTER_SANITIZE_NUMBER_INT );

        if(isset($comment_data->comment_post_ID)){
            $comment_post_ID = $comment_data->comment_post_ID;    
        }elseif( !is_null( $filtered_comment_post_ID ) ){
            $comment_post_ID = $filtered_comment_post_ID;
        }else{
            return false;    
        }


		$filtered_icl_user_language = filter_input( INPUT_POST, 'icl_user_language', FILTER_SANITIZE_FULL_SPECIAL_CHARS );

        $post_type = $wpdb->get_var($wpdb->prepare("SELECT post_type FROM {$wpdb->posts} WHERE ID=%d", $comment_post_ID));
        if( !is_null( $filtered_icl_user_language ) ) {

			$filtered_icl_translate_reply = filter_input( INPUT_POST, 'icl_translate_reply', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
            if ( $filtered_icl_translate_reply ){
                $lang = $filtered_icl_user_language;
                // send the comment to translation                
                $this->send_comment_to_translation($comment_id, $wpdb->get_var($wpdb->prepare("
                    SELECT language_code FROM {$wpdb->prefix}icl_translations 
                    WHERE element_type = %s AND element_id=%d", 'post_' . $post_type, $comment_post_ID)));
            }else{
                $lang = $wpdb->get_var(
                    $wpdb->prepare("SELECT language_code
                                    FROM {$wpdb->prefix}icl_translations
                                    WHERE element_type = %s
                                      AND element_id = %d",
                                   'post_' . $post_type, $comment_post_ID));
                
                // sync comment parent
                // look for comment parent in original language and set for the comment that's been added
				$filtered_comment_parent = filter_input( INPUT_POST, 'comment_parent', FILTER_SANITIZE_NUMBER_INT );
				$filtered_comment_ID = filter_input( INPUT_POST, 'comment_ID', FILTER_SANITIZE_NUMBER_INT );
                if( !is_null( $filtered_comment_parent ) ){
                    $comment_parent = $filtered_comment_parent;
                }else{
                    $comment_parent = $filtered_comment_ID;
                }
                
                if($comment_parent){
                    $ctrid = (int)$sitepress->get_element_trid($comment_parent,'comment');
                    $original_comment_parent = $wpdb->get_var($wpdb->prepare("
                        SELECT element_id FROM {$wpdb->prefix}icl_translations WHERE trid = %d
                            AND element_type='comment' AND language_code = %s", $ctrid, $lang));
                    $wpdb->update($wpdb->comments, array('comment_parent'=>$original_comment_parent), array('comment_ID'=>$comment_id));
                }
            }
        }else{
            $lang = $wpdb->get_var($wpdb->prepare("SELECT language_code FROM {$wpdb->prefix}icl_translations WHERE element_type='post_{$post_type}' AND element_id=%d", $comment_post_ID));
            if(!$lang){
                $lang = $this->user_language; // just in case
            }
        }        
        if(!$lang){
            $lang = $this->user_language;
        }
        $translation_id = $sitepress->set_element_language_details($comment_id, 'comment', null, $lang);
    }
    
    function send_comment_to_translation($comment_id, $to_language){
        global $wpdb, $sitepress_settings, $sitepress;
        
        $iclq = new ICanLocalizeQuery($sitepress_settings['site_id'], $sitepress_settings['access_key']);
        
        $from_lang = $sitepress->get_language_details($this->user_language);
        $to_lang   = $sitepress->get_language_details($to_language);
        $from_lang_server = ICL_Pro_Translation::server_languages_map($from_lang['english_name']);
        $to_lang_server = ICL_Pro_Translation::server_languages_map($to_lang['english_name']);
        $body = $wpdb->get_var( $wpdb->prepare("SELECT comment_content
                                                FROM {$wpdb->comments}
                                                WHERE comment_ID = %d",
                                               $comment_id));
        $rid = $iclq->cms_create_message($body, $from_lang_server, $to_lang_server);
        if($rid > 0){
            // does this comment already exist in the messages status queue?
            $msid = $wpdb->get_var( $wpdb->prepare( "SELECT id
                                                     FROM {$wpdb->prefix}icl_message_status
                                                     WHERE object_type='comment'
                                                     AND object_id= %d ",
                                                     $comment_id ) );
            if($msid){
                $wpdb->update($wpdb->prefix.'icl_message_status', 
                    array('rid'=>$rid, 'md5' => md5($body), 'status' => MESSAGE_TRANSLATION_IN_PROGRESS),
                    array('id' => $msid)
                    );
            }else{
                $wpdb->insert($wpdb->prefix.'icl_message_status', array(
                    'rid'           => $rid,
                    'object_id'     => $comment_id,
                    'from_language' => $this->user_language,
                    'to_language'   => $to_language,
                    'md5'           => md5($body),
                    'object_type'   => 'comment',
                    'status'        => MESSAGE_TRANSLATION_IN_PROGRESS
                ));
            }
        }
    }
    
    function add_comment_translation($object_id, $to_language, $translation){
        global $wpdb, $sitepress;

		$original_comment_prepared = $wpdb->prepare( "
            SELECT *
            FROM {$wpdb->comments} WHERE comment_ID = %d
            ", array( $object_id ) );
		$original_comment = $wpdb->get_row( $original_comment_prepared, ARRAY_A);
        $new_comment = $original_comment;
        
        //sync comment parent
        if($original_comment['comment_parent']){
            $comment_trid = (int)$sitepress->get_element_trid($original_comment['comment_parent'],'comment');
			$comment_parent_prepared       = $wpdb->prepare("
                SELECT element_id FROM {$wpdb->prefix}icl_translations WHERE trid=%d
                    AND element_type='comment' AND language_code=%s", array($comment_trid, $to_language));
			$new_comment['comment_parent'] =  (int) $wpdb->get_var( $comment_parent_prepared );
        }        
        
        $original_comment_id = $original_comment['comment_ID'];
        unset($original_comment);
        $new_comment['comment_content'] = $translation;
        unset($new_comment['comment_ID']);

        //check whether a translation for this comment in this language already exists
        $trid = $sitepress->get_element_trid($original_comment_id, 'comment');

		$existing_comment_id_prepared = $wpdb->prepare( "
            SELECT element_id FROM {$wpdb->prefix}icl_translations
            WHERE trid=%d AND element_type='comment' AND language_code=%s", array( $trid, $to_language ) );
		$existing_comment_id = $wpdb->get_var( $existing_comment_id_prepared );
        
        if(!$existing_comment_id){
            remove_action('wp_insert_comment', array($this, 'wp_insert_comment'));
            $new_id = wp_insert_comment($new_comment);
            add_action('wp_insert_comment', array($this, 'wp_insert_comment'), 10, 2);
        }else{
            $new_id = $new_comment['comment_ID'] = $existing_comment_id;
            remove_action('transition_comment_status', array($this, 'transition_comment_status_actions'));
            wp_update_comment($new_comment);
        }
        
        $sitepress->set_element_language_details($new_id, 'comment', $trid, $to_language);
                                
        return 1; //success
    }
    
    function add_custom_xmlrpc_methods($methods){
        //$methods['icanlocalize.notify_comment_translation'] = array($this, 'add_comment_translation');
        return $methods;
    }
    
    function comment_text_filter($comment_text){
        global $sitepress, $comment, $wp_query, $wpdb;
        static $comment_ids, $comment_originals, $page_language, $translation_status;
                                                                                           
        //if($this->enable_comments_translation && $this->user_language != $sitepress->get_current_language() ){        
        if($this->enable_comments_translation){
            // run this block once
            if(empty($comment_ids)){

				$current_language = $sitepress->get_current_language();
				$page_language = $wpdb->get_var( $wpdb->prepare("
                    SELECT name 
                    FROM {$wpdb->prefix}icl_languages_translations 
                    WHERE language_code = %s
                      AND display_language_code = %s
                ", $current_language, $this->user_language ) );
                
                foreach($wp_query->comments as $c){
                    $comment_ids[] = (int)$c->comment_ID;
                }                
                $res_query = "
                    SELECT t.element_id, t.trid, ms.status 
                    FROM {$wpdb->prefix}icl_translations t 
                    LEFT JOIN {$wpdb->prefix}icl_message_status ms ON t.element_id=ms.object_id 
                    WHERE t.element_id IN(" . wpml_prepare_in($comment_ids, '%d' ) . ")
                        AND t.element_type='comment'
                        AND t.language_code <> %s
                        AND (ms.object_type='comment' OR ms.object_type IS NULL)";
                $res_query_prepared = $wpdb->prepare($res_query, $current_language);
                $res = $wpdb->get_results($res_query_prepared);
                foreach($res as $row){
                    $tridsmap[$row->trid] = $row->element_id;
                    if($row->status){
                        $translation_status[$row->element_id] = $row->status;
                    }
                    
                }
                if(!empty($tridsmap)){   
										$res_query = "SELECT t.trid, c.comment_content
                        FROM {$wpdb->prefix}icl_translations t 
                        JOIN  {$wpdb->comments} c ON t.element_id = c.comment_ID
                        WHERE t.trid IN(". wpml_prepare_in( array_keys ( $tridsmap ), '%d') . ")
                            AND t.element_type='comment'
                            AND t.language_code = %s";
                        $res_query_prepared = $wpdb->prepare($res_query, $current_language);
                    $res = $wpdb->get_results($res_query_prepared);
                    foreach($res as $row){
                        $comment_originals[$tridsmap[$row->trid]] = $row->comment_content;
                    }
                }
            }
            
            $str  = '';
            if(isset($comment_originals[$comment->comment_ID])){                
                $str  .= '<div style="font-weight:normal;display:none;border:1px dotted #aaa;background-color:#f0f0f0;padding:4px;margin-bottom:0;" id="icl_olc_'.$comment->comment_ID.'">' . esc_html($comment_originals[$comment->comment_ID]) . '</div>';
            }
            
            if($translation_status[$comment->comment_ID] || isset($comment_originals[$comment->comment_ID])){
                $str  .= '<p style="margin-top:1px;">';
            }
            if(isset($translation_status[$comment->comment_ID])){
                if($translation_status[$comment->comment_ID] == MESSAGE_TRANSLATION_IN_PROGRESS){
                    $str .= '<i>' . __('Translation in progress', 'sitepress' ) . '</i> ';
                }elseif($translation_status[$comment->comment_ID] == MESSAGE_TRANSLATION_COMPLETE){
                    $str .= '<i>' . __('Translation complete', 'sitepress' ) . '</i> ';
                }
            }
            if(isset($comment_originals[$comment->comment_ID])){
                $str  .= '<i><a href="#" onclick="var iclcst = document.getElementById(\'icl_olc_'.$comment->comment_ID.'\').style; iclcst.display = iclcst.display == \'block\' ? \'none\' :\'block\' ;return false;">'. sprintf(__('Comment in %s', 'sitepress'),$page_language).'</a></i>';
                
            }    
            if($translation_status[$comment->comment_ID] || isset($comment_originals[$comment->comment_ID])){
                $str  .= '</p>';
            }
            
            if($str){
                $comment_text .= $str;
            }
        }
        return $comment_text;
    }
    
    function comment_text_filter_admin($comment_text){
        global $comment, $comments, $wpdb;
        static $comment_ids, $translation_status;
        if(empty($comment_ids) && !empty($comments)){
            
            foreach($comments as $c){
                $comment_ids[] = $c->comment_ID;
            }
            
            $res = $wpdb->get_results("
                SELECT t.element_id, ms.status 
                FROM {$wpdb->prefix}icl_translations t 
                LEFT JOIN {$wpdb->prefix}icl_message_status ms ON t.element_id=ms.object_id 
                WHERE t.element_id IN (". wpml_prepare_in($comment_ids, '%d') . ")
                    AND t.element_type='comment'
                    AND (ms.object_type='comment'
                        OR ms.object_type IS NULL)");
            foreach($res as $row){
                $translation_status[$row->element_id] = $row->status ? $row->status : CMS_REQUEST_WAITING_FOR_PROJECT_CREATION;
            }                
        }
        
        if(isset($translation_status[$comment->comment_ID])){
			$str = '';
            if($translation_status[$comment->comment_ID] == MESSAGE_TRANSLATION_IN_PROGRESS){
                $str = '<p><i>' . __('Translation in progress', 'sitepress' ) . '</i></p>';
            }elseif($translation_status[$comment->comment_ID] == MESSAGE_TRANSLATION_COMPLETE){
                $str = '<p><i>' . __('Translation complete', 'sitepress' ) . '</i></p>';
            }
            $comment_text .= $str;
        }
        
        return $comment_text;
    }
    
	function get_comments_number_filter( $count ) {

		global $wpdb, $post, $sitepress;
		static $pre_load_done = false;

		$cached_comment_count = wp_cache_get( $post->ID, 'icl_get_comments_number_filter' );

		if ( $cached_comment_count ) {
			return $cached_comment_count;
		}

		$post_type_prepared = $wpdb->prepare( "SELECT post_type FROM {$wpdb->posts} WHERE ID=%d", $post->ID );
		$post_type = $wpdb->get_var( $post_type_prepared );
		$details   = $sitepress->get_element_language_details( $post->ID, 'post_' . $post_type );
		if ( empty( $details ) ) {
			$comment_count = $count;
		} else {
			$post_lang = $details->language_code;

			if ( !$pre_load_done && !ICL_DISABLE_CACHE ) {
				// search previous queries for a group of posts
				foreach ( $sitepress->queries as $query ) {
					$pos = strstr( $query, 'post_id IN (' );
					if ( $pos !== false ) {
						$group = substr( $pos, 11 );
						$group = substr( $group, 0, strpos( $group, ')' ) + 1 );
						$post_ids = explode( ',', substr( $group, 1, strlen( $group ) - 2 ) );
						$counts   = array();
						foreach ( $post_ids as $id ) {
							$counts[ $id ] = 0;
						}

						$query_prepared = $wpdb->prepare( "SELECT c.comment_post_ID FROM {$wpdb->comments} c
													JOIN {$wpdb->prefix}icl_translations t ON c.comment_ID = t.element_id AND t.element_type='comment'
													WHERE c.comment_post_ID IN {$group} AND c.comment_approved=1 AND t.language_code=%s", array( $post_lang ) );
						$ret   = $wpdb->get_results( $query_prepared );
						foreach ( $ret as $details ) {
							$counts[ $details->comment_post_ID ] = $counts[ $details->comment_post_ID ] + 1;
						}

						foreach ( $counts as $id => $comment_count ) {
							$this->icl_comment_count_cache->set( $id . $post_lang, $comment_count );
						}

						break;
					}
				}
				$pre_load_done = true;
			}

			$comment_count = $this->icl_comment_count_cache->get( $post->ID . $post_lang );

			if ( $comment_count === false ) {
				$comment_count_prepared = $wpdb->prepare( "SELECT COUNT(*) FROM {$wpdb->comments} c
                                                           JOIN {$wpdb->prefix}icl_translations t
                                                              ON c.comment_ID = t.element_id
                                                              AND t.element_type='comment'
                                                            WHERE c.comment_post_ID = %d
                                                              AND c.comment_approved=1
                                                              AND t.language_code=%s",
                                                          $post->ID, $post_lang );
				$comment_count = $wpdb->get_var( $comment_count_prepared );
				$this->icl_comment_count_cache->set( $post->ID . $post_lang, $comment_count );
			}
		}
		wp_cache_set( $post->ID, $comment_count, 'icl_get_comments_number_filter' );

		return $comment_count;
	}
    
}

$IclCommentsTranslation = new IclCommentsTranslation();
