<?php get_header(); ?>
<section class="main-content container padding30">
    <div class="row">
        <div class="col-md-8">
            <h1 class="info_text" ><?php the_title(); ?></h1>
            <article class="card mb-4">

               
                <div class="card-body">
                    <?php the_content(); // Dynamic Content ?>
                </div>

                 <?php
                    $next_post = get_next_post();
                    if (!empty( $next_post )): ?>
                       <?php if(ICL_LANGUAGE_CODE=='vi'): ?>
                            <h3 class="text_sub_news padding30">Tin mới hơn</h3>
                       <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                            <h3 class="text_sub_news padding30">Newer post</h3>
                       <?php endif; ?>

                    <ul>
                        <li class="sub_news">
                            <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"><?php echo esc_attr( $next_post->post_title ); ?></a>

                        </li>
                           </ul>
                      <?php endif; ?>
                <!--get next post -->
                <?php if(ICL_LANGUAGE_CODE=='vi'): ?>
                    <h3 class="text_sub_news padding30">Tin trước đây</h3>
                <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                    <h3 class="text_sub_news padding30">Older post</h3>
                <?php endif; ?>
                <div>
                    <ul>
                        <?php
                        $recent_posts = wp_get_recent_posts(5);
                        foreach( $recent_posts as $recent ){
                            echo '<li class="sub_news"><a  href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
                        }
                        wp_reset_query();
                        ?>
                    </ul>
                </div>
            </article>
            <hr>
        </div>
        <?php  require get_template_directory() . '/sidebar_news.php';?>

    </div>
</section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
