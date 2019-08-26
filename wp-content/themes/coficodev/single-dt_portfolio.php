<?php get_header(); ?>
<?php
global $post;
$media_layout = get_post_meta( $post->ID, '_dt_project_media_items', true );
$case_study_cat_slug = get_queried_object()->slug;
$case_study_cat_name = get_queried_object()->name;
$post_id = get_queried_object_id();
//var_dump(get_term_by('slug'));
$a = get_post_meta( $post_id, '_dt_project_media_items',true);
$result = [];
foreach($a as $v) {
    $result[] = wp_get_attachment_image_src($v,'full')[0];
}
//var_dump($result[2]);die;
?>
<section class="container padding30">
    <div class="row">
        <div class="col-sm-4">
            <div>
                <h1 class="info_text"><?php the_title(); ?></h1>
                <p><?php the_content(); // Dynamic Content ?></p>
                <div class="link_next row">
                    <?php if(ICL_LANGUAGE_CODE=='vi'): ?>
                        <?php
                        $prev_post = get_previous_post();
                        if($prev_post) {
                            $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
                            echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class="col nav_link">< Tin trước<br /></a>' . "\n";
                        }

                        $next_post = get_next_post();
                        if($next_post) {
                            $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
                            echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class="col nav_link">Tin kế tiếp ><br /></a>' . "\n";
                        }
                        ?>
                         <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                        <?php
                        $prev_post = get_previous_post();
                        if($prev_post) {
                            $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
                            echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class="col nav_link">< Prev<br /></a>' . "\n";
                        }

                        $next_post = get_next_post();
                        if($next_post) {
                            $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
                            echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class="col nav_link">Next ><br /></a>' . "\n";
                        }
                        ?>  <?php endif; ?>

                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="row img_grid_single" id="box_img_hover">
                <div class="col-md-6 grid_box box_img_dt" >
                    <a href="<?php the_post_thumbnail_url(); ?>" data-gallery="example-gallery" data-toggle="lightbox">
                        <div class="box_img_dt_img">
                            <?php the_post_thumbnail('large', array('class'=>'card-img grid_1 example-image image')) ?>
                        </div>
                        <div class="middle">
                            <i class="fa fa-plus fa-2x"></i>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                   <div class="row"  id="post_img_min">
                       <?php if( $result[2] != null) { ?>
                           <div class="col-6 box_img_dt">
                               <a  href="<?php echo $result[2] ?>" data-gallery="example-gallery" data-toggle="lightbox">
                                   <div class="box_img_dt_img">
                                   <img class="grid_2 image" src="<?php echo $result[2] ?>">
                                   </div>
                                   <div class="middle">
                                       <i class="fa fa-plus fa-2x"></i>
                                   </div>
                               </a>
                           </div>
                       <?php  }
                       ?>

                       <?php if( $result[3] != null) { ?>
                           <div class="col-6 box_img_dt">
                               <a  href="<?php echo $result[3] ?>" data-gallery="example-gallery" data-toggle="lightbox">
                                   <div class="box_img_dt_img">
                                       <img class="grid_2 image" src="<?php echo $result[3] ?>">
                                   </div>
                                   <div class="middle">
                                       <i class="fa fa-plus fa-2x"></i>
                                   </div>
                               </a>
                           </div>
                       <?php  }
                       ?>
                   </div>
                    <div class="row"  id="post_img_min">
                        <?php if( $result[4] != null) { ?>
                            <div class="col-6 box_img_dt">
                                <a  href="<?php echo $result[4] ?>" data-gallery="example-gallery" data-toggle="lightbox">
                                    <div class="box_img_dt_img">
                                        <img class="grid_2 image" src="<?php echo $result[4] ?>">
                                    </div>
                                    <div class="middle">
                                        <i class="fa fa-plus fa-2x"></i>
                                    </div>
                                </a>
                            </div>
                        <?php  }
                        ?>

                        <?php if( $result[5] != null) { ?>
                            <div class="col-6 box_img_dt">
                                <a  href="<?php echo $result[5] ?>" data-gallery="example-gallery" data-toggle="lightbox">
                                    <div class="box_img_dt_img">
                                        <img class="grid_2 image" src="<?php echo $result[5] ?>">
                                    </div>
                                    <div class="middle">
                                        <i class="fa fa-plus fa-2x"></i>
                                    </div>
                                </a>
                            </div>
                        <?php  }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row"  id="post_img_min">
                <?php if( $result[6] != null) { ?>
                    <div class="col-6 box_img_dt">
                        <a  href="<?php echo $result[6] ?>" data-gallery="example-gallery" data-toggle="lightbox">
                            <div class="box_img_dt_img">
                                <img class="grid_2 image" src="<?php echo $result[6] ?>">
                            </div>
                            <div class="middle">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </a>
                    </div>
                <?php  }
                ?>

                <?php if( $result[7] != null) { ?>
                    <div class="col-6 box_img_dt">
                        <a  href="<?php echo $result[7] ?>" data-gallery="example-gallery" data-toggle="lightbox">
                            <div class="box_img_dt_img">
                                <img class="grid_2 image" src="<?php echo $result[7] ?>">
                            </div>
                            <div class="middle">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </a>
                    </div>
                <?php  }
                ?>
                <?php if( $result[8] != null) { ?>
                    <div class="col-6 box_img_dt">
                        <a  href="<?php echo $result[8] ?>" data-gallery="example-gallery" data-toggle="lightbox">
                            <div class="box_img_dt_img">
                                <img class="grid_2 image" src="<?php echo $result[8] ?>">
                            </div>
                            <div class="middle">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </a>
                    </div>
                <?php  }
                ?>
                <?php if( $result[9] != null) { ?>
                    <div class="col-6 box_img_dt">
                        <a  href="<?php echo $result[9] ?>" data-gallery="example-gallery" data-toggle="lightbox">
                            <div class="box_img_dt_img">
                                <img class="grid_2 image" src="<?php echo $result[9] ?>">
                            </div>
                            <div class="middle">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </a>
                    </div>
                <?php  }
                ?>
                <?php if( $result[10] != null) { ?>
                    <div class="col-6 box_img_dt">
                        <a  href="<?php echo $result[10] ?>" data-gallery="example-gallery" data-toggle="lightbox">
                            <div class="box_img_dt_img">
                                <img class="grid_2 image" src="<?php echo $result[10] ?>">
                            </div>
                            <div class="middle">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </a>
                    </div>
                <?php  }
                ?>
                <?php if( $result[11] != null) { ?>
                    <div class="col-6 box_img_dt">
                        <a  href="<?php echo $result[11] ?>" data-gallery="example-gallery" data-toggle="lightbox">
                            <div class="box_img_dt_img">
                                <img class="grid_2 image" src="<?php echo $result[11] ?>">
                            </div>
                            <div class="middle">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </a>
                    </div>
                <?php  }
                ?>
                <?php if( $result[12] != null) { ?>
                    <div class="col-6 box_img_dt">
                        <a  href="<?php echo $result[12] ?>" data-gallery="example-gallery" data-toggle="lightbox">
                            <div class="box_img_dt_img">
                                <img class="grid_2 image" src="<?php echo $result[12] ?>">
                            </div>
                            <div class="middle">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </a>
                    </div>
                <?php  }
                ?>
                <?php if( $result[13] != null) { ?>
                    <div class="col-6 box_img_dt">
                        <a  href="<?php echo $result[13] ?>" data-gallery="example-gallery" data-toggle="lightbox">
                            <div class="box_img_dt_img">
                                <img class="grid_2 image" src="<?php echo $result[13] ?>">
                            </div>
                            <div class="middle">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </a>
                    </div>
                <?php  }
                ?>
            </div>
        </div>
    </div>
</section>
<section class="padding30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme owl-loaded owl-drag" id="first-slider">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                        <?php
                        global $sitepress;
                        $args = array(
                            'post_type' => 'dt_portfolio',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'dt_portfolio_category',
                                    'field'    => 'slug',
                                    'terms'    => ['van-phong-va-khu-phuc-hop','office-complex-projects-en',
                                        'khach-san-va-resort','hotels-resorts-en',
                                        'nha-may','factories-en',
                                        'benh-vien-truong-hoc','hospitals-schools',
                                        'san-bay-cau-cang','airports-bridges','residential-condominium-en','khu-dan-cu-va-can-ho',]
                                ),
                            )
                        );
                        $wp_query = new WP_Query( $args );
                        while( $wp_query->have_posts() ): $wp_query->the_post();
                        ?>

                            <div class="owl-item">
                                <div class="item">
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
                                        </div>
                                    </div>
                                </div>

                            </div>

                        <?php
                        endwhile;
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<script>
    $(document).ready(function() {
        var owl = $('#first-slider');
        owl.owlCarousel({
            items: 5,
            loop: true,
            margin: 10,
            autoplay:true,
            autoplayTimeout: 1300,
            autoplayHoverPause: true,
            responsiveClass:true,
            nav: true,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            responsive:{
                0:{
                    items:2,

                },
                600:{
                    items:4,

                },
                1000:{
                    items:5,
                }
            }
        });
    })

</script>
<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>
<?php get_footer(); ?>
