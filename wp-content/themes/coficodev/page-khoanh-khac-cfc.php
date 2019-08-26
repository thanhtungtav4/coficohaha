<?php  get_header()?>
    <section class="container">
        <div class="container">
            <br>
            <!-- Nav pills -->
            <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#home">View all</a>
                    </li>

                </ul>
            <?php elseif(ICL_LANGUAGE_CODE=='vi'): ?>
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#home">Tiêu Biểu</a>
                    </li>
                </ul>

            <?php endif; ?>
            <!-- Tab panes -->
            <div class="tab-content">
                <div id="home" class="container tab-pane active"><br>
                    <div class="container">
                        <div class="row">
                            <?php
                            global $sitepress;
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                                'post_type' => 'dt_gallery',
								 'paged' => $paged,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'dt_gallery_category',
                                        'field'    => 'slug',
                                        'terms'    => ['khoanh-khac-cofico','khoanh-khac-cofico-en']
                                    ),
                                )
                            );
                            $wp_query = new WP_Query( $args );
                            while( $wp_query->have_posts() ): $wp_query->the_post();
                                ?>
                                 <?php $post_id = get_the_ID();
                                $a = get_post_meta( $post_id, '_dt_album_media_items',true);
                                $result = [];
                                foreach($a as $v) {
                                    $result[] = wp_get_attachment_image_src($v,'full')[0];
                                }
                                //var_dump($result[1])
                                 ?>
                                <div class="col-md-3">
                                    <div class="card mb-3" id="img_cfc">
                                        <div class="profile-img-container">

                                            <?php
                                            if ( has_post_thumbnail() ) {
                                                the_post_thumbnail('card-img-top img-circle img-responsive duan_box') ;
                                            }
                                            else {
                                                echo '<img src="' . get_bloginfo( 'template_directory' )
                                                    . '/images/No_image_available.png" class="card-img-top img-circle img-responsive duan_box"/>';
                                            }
                                            ?>
                                            <a href="<?php the_post_thumbnail_url(); ?>" data-gallery="example-gallery" data-toggle="lightbox">
                                            <div class="middle">
                                                <img src="<?php echo $result[1] ?>">
                                            </div>
                                            <div class="middle2">
                                                <img src="<?php echo $result[3] ?>">
                                            </div>
                                            <div class="middle1">
                                                <img src="<?php echo $result[4] ?>">
                                            </div>
                                            </a>
                                            <?php foreach ($result as $img): ?>
                                                <a href="<?php echo $img?>" data-gallery="example-gallery" data-toggle="lightbox" style="display: none">
                                                    <img src="<?php echo $img?>" class="img-fluid">
                                                </a>

                                            <?php endforeach; ?>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">
                                                <a href="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></p>

                                        </div>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                            ?>
                        </div>
                        <?php get_template_part('pagination'); ?>
                    </div>
                </div>

            </div>
        </div>


    </section>
<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>
<?php get_footer(); ?>