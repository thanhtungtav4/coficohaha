<?php

/*
 * Add a meta box
 */
add_action( 'add_meta_boxes', 'mytheme_meta_box_add', 10, 2 );

function mytheme_meta_box_add( $post_type, $post ) {
    add_meta_box('mytheme_feat_img_slider', // meta box ID
        'Featured Image Gallery', // meta box title
        'mytheme_print_box', // callback function that prints the meta box HTML
        'dt_portfolio', // post type where to add it
        'side', // priority
        'default' ); // position
}

function mytheme_image_uploader_field( $name, $value = '' ) {

    $image = 'Upload Image';
    $button = 'button';
    $image_size = 'full'; // it would be better to use thumbnail size here (150x150 or so)
    $display = 'none'; // display state of the "Remove image" button

    ?>

    <p><?php
        _e( '<i>Set Images for Featured Image Gallery</i>', 'mytheme' );
        ?></p>

    <label>
        <div class="gallery-screenshot clearfix">
            <?php
            {
                $ids = explode(',', $value);
                foreach ($ids as $attachment_id) {
                    $img = wp_get_attachment_image_src($attachment_id, 'thumbnail');
                    echo '<div class="screen-thumb"><img src="' . esc_url($img[0]) . '" /></div>';
                }
            }
            ?>
        </div>

        <input id="edit-gallery" class="button upload_gallery_button" type="button"
               value="<?php esc_html_e('Add/Edit Gallery', 'mytheme') ?>"/>
        <input id="clear-gallery" class="button upload_gallery_button" type="button"
               value="<?php esc_html_e('Clear', 'mytheme') ?>"/>
        <input type="hidden" name="<?php echo esc_attr($name); ?>" id="<?php echo esc_attr($name); ?>" class="gallery_values" value="<?php echo esc_attr($value); ?>">
    </label>
    <?php
}

/*
 * Meta Box HTML
 */
function mytheme_print_box( $post ) {

    wp_nonce_field( 'save_feat_gallery', 'mytheme_feat_gallery_nonce' );

    $meta_key = 'second_featured_img';
    echo mytheme_image_uploader_field( $meta_key, get_post_meta($post->ID, $meta_key, true) );
}

/*
 * Save Meta Box data
 */
add_action('save_post', 'mytheme_img_gallery_save');

function mytheme_img_gallery_save( $post_id ) {

    if ( !isset( $_POST['mytheme_feat_gallery_nonce'] ) ) {
        return $post_id;
    }

    if ( !wp_verify_nonce( $_POST['mytheme_feat_gallery_nonce'], 'save_feat_gallery') ) {
        return $post_id;
    }

    if ( isset( $_POST[ 'second_featured_img' ] ) ) {
        update_post_meta( $post_id, 'second_featured_img', esc_attr($_POST['second_featured_img']) );
    } else {
        update_post_meta( $post_id, 'second_featured_img', '' );
    }

}
function mytheme_admin_scripts() {

    wp_enqueue_script( 'mytheme-gallery-js', get_template_directory_uri() . '/js/custom-gallery.js', array('jquery'), null, true );

}
add_action( 'admin_enqueue_scripts','mytheme_admin_scripts' );
