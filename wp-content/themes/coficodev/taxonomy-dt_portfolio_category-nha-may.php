
<?php get_header(); ?>
<section class="main-content container padding30">
    <?php
    $case_study_cat_slug = get_queried_object()->slug;
    $case_study_cat_name = get_queried_object()->name;
    ?>
    <div class="container">
        <h2 class="info_text"><?php echo $case_study_cat_name; ?></h2>
        <div class="row">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="profile-img-container">
<!--                        <img class="card-img-top img-circle img-responsive duan_box"  src="images/duan.jpg" data-holder-rendered="true">-->
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
            <?php endwhile; ?>
        </div>
    <?php get_template_part('pagination'); ?>
    </div>

    </section>
<?php else: ?>
    <article>
        <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
    </article>

<?php endif; ?>
</section>
</main>
<?php get_footer(); ?>