<?php  get_header()?>
    <section class="container">
        <div class="">
<!-- Tab panes -->
            <div class="tab-content">
                <div id="home" class="tab-pane active">
                    <br>
                    <div class="">
                        <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                            <h2 class="info_text">Airports & Bridges</h2>
                        <?php elseif(ICL_LANGUAGE_CODE=='vi'): ?>
                            <h2 class="info_text">Sân bay & Cầu cảng</h2>
                        <?php endif; ?>

                        <div class="row">
                            <?php
                            global $sitepress;
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                                'post_type' => 'dt_portfolio',
								'paged' => $paged,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'dt_portfolio_category',
                                        'field'    => 'slug',
                                        'terms'    => ['san-bay-cau-cang','airports-bridges',]
                                    ),
                                )
                            );
                            $wp_query = new WP_Query( $args );
                            //                        var_dump($wp_query);
                            while( $wp_query->have_posts() ): $wp_query->the_post();
                                ?>
                                <div class="col-md-3">
                                    <div class="card mb-3">
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
                                            <a href="<?php the_permalink(); ?>"><i class="fa fa-plus fa-2x"></i></a>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></p>

                                            <p> <?php $attachment = &get_post( $id );
                                                echo $attachment->post_excerpt;
                                                ?></p>
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
        </div>

    </section>
<?php get_footer(); ?>