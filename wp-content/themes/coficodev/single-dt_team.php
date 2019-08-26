<?php  require_once( get_template_directory(). '/header_team.php' ); ?>
<section class="main-content container padding30">
    <div class="row">
        <div class="col-md-8">
            <h1 class="info_text" ><?php the_title(); ?></h1>
            <article class="card mb-4">
                <div class="row">
                    <div class="col-md-6 team_box_img">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail('large', array( 'class' => 'card-img-team' )); // Fullsize image for the single post ?>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <?php the_content(); // Dynamic Content ?>
                        </div>
                    </div>
                    <hr>
                </div>
                <!--get next post -->
               <div class="row padding30">
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
               </div>
            </article>
            <hr>
        </div>
        <?php  require get_template_directory() . '/sidebar_news.php';?>

    </div>
</section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
