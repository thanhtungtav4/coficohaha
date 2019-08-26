<section class="main-content container padding30">
    <h2 class="info_text"><?php _e( '', 'html5blank' ); single_cat_title(); ?></h2>
    <div class="row">
    <div class="col-md-8">
        <div class="container" id="post">
            <div class="post-wrap">
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <!-- -->
                    <div class="row news_box" id="post-<?php the_ID(); ?>">
                        <div class="col-md-4">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('img-responsive img-box img-fluid');
                                }
                                else {
                                    echo '<img src="' . get_bloginfo( 'template_directory' )
                                        . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                }
                                ?>
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="link_box">
                                <a   href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
                                <hr>
                                <p class="cut2"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>"><?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                        More...>

                                    <?php elseif(ICL_LANGUAGE_CODE=='vi'): ?>
                                        Xem thêm...>
                                    <?php endif; ?></a>
                            </div>
                        </div>
                    </div>
                    <!-- -->

                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <?php  require get_template_directory() . '/sidebar_news.php';?>
</div>
</section>
<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
