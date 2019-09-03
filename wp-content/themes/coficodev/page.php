<?php if(is_front_page()): ?>
    <style>
        .hide_is_home{
            display: none;
        }
    </style>
    <?php if(ICL_LANGUAGE_CODE=='en'): ?>
        <?php get_header(); ?>
        <div class="hide_mobile">
            <section class="container">
                <div class="row">
                    <?php
                    global $sitepress;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'posts_per_page'         => 1,
                        'order'      => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => ['trang-chu-block-1-en',]
                            ),
                        )
                    );
                    $wp_query = new WP_Query( $args );
                    //                        var_dump($wp_query);
                    while( $wp_query->have_posts() ): $wp_query->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="mb-4 box-shadow">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                    }
                                    else {
                                        echo '<img src="' . get_bloginfo( 'template_directory' )
                                            . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                    }
                                    ?>
                                </a>
                                <div class="card-body">
                                    <div class="blog-content wf-td">
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a>
                                        </h2>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                    <?php
                    global $sitepress;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'posts_per_page'         => 1,
                        'order'      => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => ['trang-chu-block-2-en',]
                            ),
                        )
                    );
                    $wp_query = new WP_Query( $args );
                    //                        var_dump($wp_query);
                    while( $wp_query->have_posts() ): $wp_query->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="mb-4 box-shadow">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                    }
                                    else {
                                        echo '<img src="' . get_bloginfo( 'template_directory' )
                                            . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                    }
                                    ?>
                                </a>
                                <div class="card-body">
                                    <div class="blog-content wf-td">
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a>
                                        </h2>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                    <?php
                    global $sitepress;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'posts_per_page'         => 1,
                        'order'      => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => ['trang-chu-block-3-en',]
                            ),
                        )
                    );
                    $wp_query = new WP_Query( $args );
                    //                        var_dump($wp_query);
                    while( $wp_query->have_posts() ): $wp_query->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="mb-4 box-shadow">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                    }
                                    else {
                                        echo '<img src="' . get_bloginfo( 'template_directory' )
                                            . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                    }
                                    ?>
                                </a>
                                <div class="card-body">
                                    <div class="blog-content wf-td">
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a>
                                        </h2>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                </div>
                <div class="row">
                    <?php
                    global $sitepress;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'posts_per_page'         => 1,
                        'order'      => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => ['trang-chu-block-4-en',]
                            ),
                        )
                    );
                    $wp_query = new WP_Query( $args );
                    //                        var_dump($wp_query);
                    while( $wp_query->have_posts() ): $wp_query->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="mb-4 box-shadow">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                    }
                                    else {
                                        echo '<img src="' . get_bloginfo( 'template_directory' )
                                            . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                    }
                                    ?>
                                </a>
                                <div class="card-body">
                                    <div class="blog-content wf-td">
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a>
                                        </h2>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                    <?php
                    global $sitepress;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'posts_per_page'         => 1,
                        'order'      => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => ['trang-chu-block-5-en',]
                            ),
                        )
                    );
                    $wp_query = new WP_Query( $args );
                    //                        var_dump($wp_query);
                    while( $wp_query->have_posts() ): $wp_query->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="mb-4 box-shadow">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                    }
                                    else {
                                        echo '<img src="' . get_bloginfo( 'template_directory' )
                                            . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                    }
                                    ?>
                                </a>
                                <div class="card-body">
                                    <div class="blog-content wf-td">
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a>
                                        </h2>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                    <?php
                    global $sitepress;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'posts_per_page'         => 1,
                        'order'      => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => ['trang-chu-block-6-en',]
                            ),
                        )
                    );
                    $wp_query = new WP_Query( $args );
                    //                        var_dump($wp_query);
                    while( $wp_query->have_posts() ): $wp_query->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="mb-4 box-shadow">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                    }
                                    else {
                                        echo '<img src="' . get_bloginfo( 'template_directory' )
                                            . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                    }
                                    ?>
                                </a>
                                <div class="card-body">
                                    <div class="blog-content wf-td">
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a>
                                        </h2>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                </div>
                <div class="row">
                    <?php
                    global $sitepress;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'posts_per_page'         => 1,
                        'order'      => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => ['trang-chu-block-7-en',]
                            ),
                        )
                    );
                    $wp_query = new WP_Query( $args );
                    //                        var_dump($wp_query);
                    while( $wp_query->have_posts() ): $wp_query->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="mb-4 box-shadow">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                    }
                                    else {
                                        echo '<img src="' . get_bloginfo( 'template_directory' )
                                            . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                    }
                                    ?>
                                </a>
                                <div class="card-body">
                                    <div class="blog-content wf-td">
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a>
                                        </h2>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                    <?php
                    global $sitepress;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'posts_per_page'         => 1,
                        'order'      => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => ['trang-chu-block-8-en',]
                            ),
                        )
                    );
                    $wp_query = new WP_Query( $args );
                    //                        var_dump($wp_query);
                    while( $wp_query->have_posts() ): $wp_query->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="mb-4 box-shadow">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                    }
                                    else {
                                        echo '<img src="' . get_bloginfo( 'template_directory' )
                                            . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                    }
                                    ?>
                                </a>
                                <div class="card-body">
                                    <div class="blog-content wf-td">
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a>
                                        </h2>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                    <?php
                    global $sitepress;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'posts_per_page'         => 1,
                        'order'      => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => ['trang-chu-block-9-en',]
                            ),
                        )
                    );
                    $wp_query = new WP_Query( $args );
                    //                        var_dump($wp_query);
                    while( $wp_query->have_posts() ): $wp_query->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="mb-4 box-shadow">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                    }
                                    else {
                                        echo '<img src="' . get_bloginfo( 'template_directory' )
                                            . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                    }
                                    ?>
                                </a>
                                <div class="card-body">
                                    <div class="blog-content wf-td">
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a>
                                        </h2>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                </div>
            </section>
            <section class="du_an">
                <div class="container">
                    <h2 class="text_h2_center">CURRENT HIGHLIGHT PROJECTS</h2>
                    <div class="row duan_col">
                        <div class="col-sm-6 duan_dis">
                            <div class="col img_duan">
                                <img class="img-responsive" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2017/11/Casino-2.jpg" width="245" height="248">
                            </div>
                            <div class="col text_duan">
                                <h4><a href="<?php echo get_option('siteurl') ?>/en/project/du-an-condotel-khu-phuc-hop-nam-hoi-an/" >Condotel – South Hoi An complex</a></h4>
                                <p><span>Project:</span> Condotel – South Hoi An complex</p>
                                <p><span>Location:</span> Hoi An, Quang Nam Province</p>
                                <div class="gap" style="line-height: 50px; height: 50px;"></div>
                                <a href="<?php echo get_option('siteurl') ?>/en/project/du-an-condotel-khu-phuc-hop-nam-hoi-an/" class="more_duan">+ Read more...</a>
                            </div>
                        </div>
                        <div class="col-sm-6 duan_dis">
                            <div class="col img_duan">
                                <img class="img-responsive" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2019/08/Hoya_1-1-700x406.jpg" width="245" height="248">
                            </div>
                            <div class="col text_duan">
                                <h4><a href="<?php echo get_option('siteurl') ?>/en/project/nha-may-hoya-lens/" >Hoya Lens</a></h4>
                                <p><span>Project:</span> Hoya Lens Vietnam 2 Factory</p>
                                <p><span>Location:</span> Quang Ngai province</p>
                                <div class="gap" style="line-height: 50px; height: 50px;"></div>
                                <a href="<?php echo get_option('siteurl') ?>/en/project/nha-may-hoya-lens/" class="more_duan">+ Read more...</a>
                            </div>
                        </div>
                        <div class="col-sm-6 duan_dis">
                            <div class="col text_duan">
                                <h4><a href="<?php echo get_option('siteurl') ?>/en/project/sieu-thi-go/">GO! Supermarket</a></h4>
                                <p><span>Project:</span>GO! Supermarket</p>
                                <p><span>Location:</span>Quang Ngai Viet Nam</p>
                                <div class="gap" style="line-height: 50px; height: 50px;"></div>
                                <a href="<?php echo get_option('siteurl') ?>/en/project/sieu-thi-go/" class="more_duan">+ Read more...</a>
                            </div>
                            <div class="col img_duan2">
                                <img src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2019/08/56157726_1174695192689777_8907272635826569216_o.jpg" width="245" height="248">
                            </div>
                        </div>
                        <div class="col-sm-6 duan_dis">
                            <div class="col text_duan">
                                <h4><a href="<?php echo get_option('siteurl') ?>/en/project/tirol-choco-vietnam-factory/">Tirol Choco Vietnam Factory</a></h4>
                                <p><span>Project:</span> Tirol Choco Vietnam Factory </p>
                                <p><span>Location:</span> Dong Nai, Viet Nam</p>
                                <div class="gap" style="line-height: 50px; height: 50px;"></div>
                                <a href="<?php echo get_option('siteurl') ?>/en/project/tirol-choco-vietnam-factory/" class="more_duan">+ Read more...</a>
                            </div>
                            <div class="col img_duan2">
                                <img src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2019/08/TIR-Hinh-anh-du-an-1.jpg" width="245" height="248">
                            </div>
                        </div>


                        <div class="col-sm-6 duan_dis">
                            <div class="col img_duan ">
                                <img class="img-responsive" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/hausneo_031.jpg" width="245" height="248">
                            </div>
                            <div class="col text_duan">
                                <h4><a href="<?php echo get_option('siteurl') ?>/en/project/du-an-can-ho-hausneo/">Hausneo Apartment</a></h4>
                                <p><span>Project:</span>Hausneo Apartment</p>
                                <p><span>Location:</span>District 9, Hochiminh City</p>
                                <div class="gap" style="line-height: 50px; height: 50px;"></div>
                                <a href="<?php echo get_option('siteurl') ?>/en/project/du-an-can-ho-hausneo/" class="more_duan">+ Read more...</a>
                            </div>
                        </div>
                        <div class="col-sm-6 duan_dis">
                            <div class="col img_duan">
                                <img class="img-responsive" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/banner-home-21.png" width="245" height="248">
                            </div>
                            <div class="col text_duan">
                                <h4><a href="<?php echo get_option('siteurl') ?>/en/project/du-an-estella-heights-2/" >ESTELLA HEIGHTS 2</a></h4>
                                <p><span>Project:</span> Estella Heights 2</p>
                                <p><span>Location:</span> District 2, Hochiminh City</p>
                                <div class="gap" style="line-height: 50px; height: 50px;"></div>
                                <a href="<?php echo get_option('siteurl') ?>/en/project/du-an-estella-heights-2/" class="more_duan">+ Read more...</a>
                            </div>
                        </div>
                        <div class="col-sm-6 duan_dis">
                            <div class="col text_duan">
                                <h4><a href="<?php echo get_option('siteurl') ?>/en/project/sadora-condominium/">Sadora Condominium</a></h4>
                                <p><span>Project:</span>Sadora Condominium</p>
                                <p><span>Location:</span>District 2, Hochiminh City</p>
                                <div class="gap" style="line-height: 50px; height: 50px;"></div>
                                <a href="<?php echo get_option('siteurl') ?>/en/project/sadora-condominium/" class="more_duan">+ Read more...</a>
                            </div>
                            <div class="col img_duan2">
                                <img src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2015/12/Sadora03-700x394.jpg" width="245" height="248">
                            </div>
                        </div>
                        <div class="col-sm-6 duan_dis">
                            <div class="col text_duan">
                                <h4><a href="<?php echo get_option('siteurl') ?>/en/project/vista-verde-residental/">Vista Verde Residental</a></h4>
                                <p><span>Project:</span>Vista Verde Residental</p>
                                <p><span>Location:</span>District 2, Ho Chi Minh </p>
                                <div class="gap" style="line-height: 50px; height: 50px;"></div>
                                <a href="<?php echo get_option('siteurl') ?>/en/project/vista-verde-residental/" class="more_duan">+ Read more...</a>
                            </div>
                            <div class="col img_duan2">
                                <img src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/vistaverde.jpg" width="245" height="248">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="du_an_mobile" id="one">
                <div class="container">
                    <h2 class="text_h2_center">CURRENT HIGHLIGHT PROJECTS</h2>
                    <div class="owl-one owl-carousel css owl-theme">
                        <div class="item1">
                            <div class="col-md-4 list-project-item">
                                <div class="card mb-4">
                                    <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2017/11/Casino-2.jpg">
                                    <div class="card-body content-box-card">
                                        <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/en/project/du-an-condotel-khu-phuc-hop-nam-hoi-an/">Condotel – South Hoi An complex</a></p>
                                        <p class="project-home-content">
                                            <strong>Project:</strong>Condotel – South Hoi An complex
                                        </p>
                                        <p class="project-home-content">
                                            <strong>Address:</strong> Hoi An, Quang Nam Province
                                        </p>
                                        <p class="project-home-content">
                                            <a href="<?php echo get_option('siteurl') ?>/en/project/du-an-condotel-khu-phuc-hop-nam-hoi-an/" class="more_duan">+ Read more...</a>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item1">
                            <div class="col-md-4 list-project-item">
                                <div class="card mb-4">
                                    <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2019/08/Hoya_1-1-700x406.jpg">
                                    <div class="card-body content-box-card">
                                        <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/en/project/nha-may-hoya-lens/">Hoya Lens</a></p>
                                        <p class="project-home-content">
                                            <strong>Project:</strong>  Hoya Lens Vietnam 2 Factory
                                        </p>
                                        <p class="project-home-content">
                                            <strong>Address:</strong> Quang Ngai province
                                        </p>
                                        <p class="project-home-content">
                                            <a href="<?php echo get_option('siteurl') ?>/en/project/nha-may-hoya-lens/" class="more_duan">+ Read more...</a>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- -->
                        <div class="item1">
                            <div class="col-md-4 list-project-item">
                                <div class="card mb-4">
                                    <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2019/08/56157726_1174695192689777_8907272635826569216_o.jpg">
                                    <div class="card-body content-box-card">
                                        <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/en/project/sieu-thi-go/">GO! Supermarket</a></p>
                                        <p class="project-home-content">
                                            <strong>Project:</strong>  GO! Supermarket
                                        </p>
                                        <p class="project-home-content">
                                            <strong>Address:</strong> Quang Ngai Viet Nam
                                        </p>
                                        <p class="project-home-content">
                                            <a href="<?php echo get_option('siteurl') ?>/en/project/sieu-thi-go/" class="more_duan">+ Read more...</a>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item1">
                            <div class="col-md-4 list-project-item">
                                <div class="card mb-4">
                                    <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2019/08/TIR-Hinh-anh-du-an-1.jpg">
                                    <div class="card-body content-box-card">
                                        <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/en/project/tirol-choco-vietnam-factory/">Tirol Choco Vietnam Factory</a></p>
                                        <p class="project-home-content">
                                            <strong>Project:</strong>  Tirol Choco Vietnam Factory
                                        </p>
                                        <p class="project-home-content">
                                            <strong>Address:</strong>  Dong Nai, Viet Nam
                                        </p>
                                        <p class="project-home-content">
                                            <a href="<?php echo get_option('siteurl') ?>/en/project/tirol-choco-vietnam-factory/" class="more_duan">+ Read more...</a>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Hausneo Apartment ESTELLA HEIGHTS 2 -->
                        <div class="item1">
                            <div class="col-md-4 list-project-item">
                                <div class="card mb-4">
                                    <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/hausneo_031.jpg">
                                    <div class="card-body content-box-card">
                                        <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/en/project/du-an-can-ho-hausneo/">HAUSNEO APARTMENT</a></p>
                                        <p class="project-home-content">
                                            <strong>Project:</strong>  HAUSNEO APARTMENT
                                        </p>
                                        <p class="project-home-content">
                                            <strong>Address:</strong> Dist.9, HCMC
                                        </p>
                                        <p class="project-home-content">
                                            <a href="<?php echo get_option('siteurl') ?>/en/project/du-an-can-ho-hausneo/" class="more_duan">+ Read more...</a>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item1">
                            <div class="col-md-4 list-project-item">
                                <div class="card mb-4">
                                    <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/banner-home-21.png">
                                    <div class="card-body content-box-card">
                                        <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/en/project/du-an-estella-heights-2/">ESTELLA HEIGHTS 2</a></p>
                                        <p class="project-home-content">
                                            <strong>Project:</strong>  Estella Heights 2
                                        </p>
                                        <p class="project-home-content">
                                            <strong>Address:</strong> District 2, Hochiminh City
                                        </p>
                                        <p class="project-home-content">
                                            <a href="<?php echo get_option('siteurl') ?>/en/project/du-an-estella-heights-2/" class="more_duan">+ Read more...</a>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hoya Lens-->
                        <div class="item1">
                            <div class="col-md-4 list-project-item">
                                <div class="card mb-4">
                                    <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2015/12/Sadora03-700x394.jpg">
                                    <div class="card-body content-box-card">
                                        <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/en/project/sadora-condominium/">Sadora Condominium</a></p>
                                        <p class="project-home-content">
                                            <strong>Project:</strong>  Sadora Condominium
                                        </p>
                                        <p class="project-home-content">
                                            <strong>Address:</strong> Dist.2, HCMC
                                        </p>
                                        <p class="project-home-content">
                                            <a href="<?php echo get_option('siteurl') ?>/en/project/sadora-condominium/" class="more_duan">+ Read more...</a>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item1">
                            <div class="col-md-4 list-project-item">
                                <div class="card mb-4">
                                    <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/vistaverde.jpg">
                                    <div class="card-body content-box-card">
                                        <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/en/project/vista-verde-residental/">
                                                Vista Verde Residental</a></p>
                                        <p class="project-home-content">
                                            <strong>Project:</strong> Vista Verde Residental
                                        </p>
                                        <p class="project-home-content">
                                            <strong>Address:</strong> District 2, Hochiminh City
                                        </p>
                                        <p class="project-home-content">
                                            <a href="<?php echo get_option('siteurl') ?>/en/project/vista-verde-residental/" class="more_duan">+ Read more...</a>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="main-content container">
                <h2 class="info_text">OVERVIEW</h2>
                <div class="row">
                    <div class="col-md-8">
                        <div class="collapse-content-group">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <a role="button" data-toggle="collapse" href="#collapse11" aria-expanded="false" aria-controls="collapseOne" class="trigger collapsed">
                                        <h4 class="panel-title textuper">Chairman’s Message</h4>
                                    </a>
                                </div>
                                <div id="collapse11" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne" style="">
                                    <div class="panel-body">
                                        <div class="m-collapse-content">
                                            <div class="m-body-collapse">
                                                <div class="wpb_wrapper">

                                                    <div class="gap" style="line-height: 15px; height: 15px;"></div>
                                                    <p><img class="card-img" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/Mr.Xu-Thungo.jpg" alt="Mr.Xu Thungo" ></p>
                                                    <div class="gap" style="line-height: 5px; height: 5px;"></div>
                                                    <p><strong>Welcome to COFICO!</strong></p>
                                                    <p>As the business environments are increasingly uncertain yet highly competitive, COFICO continues optimizing our intellectual capital to innovate, to change and to move on; for the advancements not only of ourselves’ but also our stakeholders’.</p>
                                                    <p>COFICO’s established history has seen moments of both great achievements as well as tough challenges. Either way, we keep calm, diligent and resolute to continue our journey reaching newer heights. Today, as one of Vietnam’s leading construction companies, it has long been COFICO’s overriding philosophy that ‘We are not just building buildings. We are building strong relationships with clients and partners’, which applies universally to all aspects of our business, both internally and externally.</p>
                                                    <p>This is primarily enabled by our highly committed staffs at all levels who so very enjoy their work, see their bright future with the company and thus dedicate wholeheartedly to COFICO. Secondly, COFICO is proud to be accompanied by our partners both local and foreign, especially our strategic shareholders who are large international contractors namely Gammon Construction (Owned by Jardine Matheson Group and Balfour Beatty) and Maeda Corporation; with all of whose critical partnerships and supports, COFICO continues to reinforce and enhance our competitive advantages.</p>
                                                    <p>And so we profoundly believe that, powered by such specially energetic values, COFICO is properly equipped to attain ever-demanding international standards while leveraging our deeply-rooted local understandings. We shall therefore continue to optimize profitability, to be an employer of choice, a partner of choice, a contractor of choice and a responsible corporate citizen; for all of which we shall naturally be Vietnam’s most respected construction company.</p>
                                                    <p>It is the COFICO’s identity to Preserve Our Core Values — being Respect, Trust, Teamwork and Safety — while Stimulating Progress.</p>
                                                    <p>Let’s do and achieve, together!</p>
                                                    <p>&nbsp;</p>
                                                    <p><strong>Le Dang Xu<br>
                                                        </strong>Executive Chairman </p>
                                                    <div class="gap" style="line-height: 10px; height: 10px;"></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <a role="button" data-toggle="collapse" href="#collapse12" aria-expanded="false" aria-controls="collapseOne" class="trigger collapsed">
                                        <h4 class="panel-title textuper">Visions, Mission, Core values</h4>
                                    </a>
                                </div>
                                <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                    <div class="panel-body">
                                        <div class="m-collapse-content">
                                            <div class="m-body-collapse">
                                                <div class="wpb_wrapper">

                                                    <div class="gap" style="line-height: 15px; height: 15px;"></div>
                                                    <p><strong>Vision</strong></p>
                                                    <p>COFICO has, step by step, moved towards its vision of becoming one of the leading construction companies domestically and internationally.</p>
                                                    <p>To be accredited by customers’ and business partners is an important factor making COFICO’s success.</p>
                                                    <p>Not only delivering goodness to customers, COFICO also creates many opportunities for its staffs. Every staff can be proud working at COFICO.</p>
                                                    <p><strong>Mission</strong></p>
                                                    <p>COFICO’s mission is to deliver the best construction solutions and services to satisfy customers’ expectations and help customers achieve their long-term business objectives.</p>
                                                    <p>We evaluate our success based on the success of our customers and other stakeholders. Eventually, such success depends on factors regarding high quality (international standard services), safety of the construction site, reasonable price and solutions with appropriate work progresses.</p>
                                                    <p><strong>Core values</strong></p>
                                                    <p><strong>Respect<br>
                                                        </strong>Respect the community diversity, treasure the values of business, work and social relationships.</p>
                                                    <p><strong>Trust<br>
                                                        </strong>Trust&nbsp;is the source of creditability in every relationship/ transaction among colleagues, customers’, partners. That makes COFICO’s power.</p>
                                                    <p><strong>Teamwork<br>
                                                        </strong>Understanding the value of teamwork’ spirit will always deliver success. Thus, colleagues should encourage, work together and share targets to produce optimal results.</p>
                                                    <p><strong>Safety<br>
                                                        </strong>Human is the Company’s precious social capital. Thus ensuring safety in every construction site is one of the Company’s priorities in the course for sustainable development (At COFICO, every staff works and returns home safely)</p>

                                                    <div class="gap" style="line-height: 10px; height: 10px;"></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--- vhcty-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <a role="button" data-toggle="collapse" href="#collapse123" aria-expanded="false" aria-controls="collapseOne" class="trigger collapsed">
                                        <h4 class="panel-title textuper">Philosophy- Culture</h4>
                                    </a>
                                </div>
                                <div id="collapse123" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                    <div class="panel-body">
                                        <div class="m-collapse-content">
                                            <div class="m-body-collapse">
                                                <div class="wpb_wrapper">

                                                    <div class="gap" style="line-height: 15px; height: 15px;"></div>
                                                    <p><strong>Philosophy</strong></p>
                                                    <p>COFICO believes success of every construction begins from a quality working environment and opportunities, in which, each every staff can express and maximize their capabilities.</p>
                                                    <p><strong>Culture</strong></p>
                                                    <p>COFICO’s decisions originate from devotion and integrity. We encourage open discussions between the Company and customers/ partners as well as the communication from within the Company in the course of obtaining business goals</p>
                                                    <div class="gap" style="line-height: 10px; height: 10px;"></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--- cl-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <a role="button" data-toggle="collapse" href="#collapse124" aria-expanded="false" aria-controls="collapseOne" class="trigger collapsed">
                                        <h4 class="panel-title textuper">Strategy</h4>
                                    </a>
                                </div>
                                <div id="collapse124" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                    <div class="panel-body">
                                        <div class="m-collapse-content">
                                            <div class="m-body-collapse">
                                                <div class="wpb_wrapper">

                                                    <div class="gap" style="line-height: 15px; height: 15px;"></div>
                                                    <p><strong>Strategy</strong></p>
                                                    <p>In order to achieve the strategic long-term goals, COFICO bases on 03 founding principals:</p>
                                                    <ul>
                                                        <li>High quality product</li>
                                                        <li>Solid financial foundation</li>
                                                        <li>Continuous change and improvements</li>
                                                    </ul>
                                                    <div class="gap" style="line-height: 10px; height: 10px;"></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="video_ifm">
                            <div class="text_sub_video"><span>CORPORATE VIDEO</span></div>
                            <div class="video-responsive">
                                <iframe width="350" height="220" src="https://www.youtube.com/embed/6NOw18qZFkQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="hr-thin">
                            <hr>
                        </div>
                        <div class="user_pro">
                            <div class="text_sub_video"><span>INTERNATIONAL STRATEGIC SHAREHOLDERS</span></div>
                            <br>
                            <div class="row padding30">
                                <div class="col">
                                    <a href="#">
                                        <img src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/Maedalogo2.jpg">
                                    <br>  <strong>Maeda Corporation</strong>
                                        <a style="color: #0072bc;" href="https://www.maeda.co.jp/english.html">Website</a>
                                    </a>
                                </div>
                                <div class="col">
                                    <img src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2015/02/mr-obara-koichi.png" class="card-img">
                                </div>
                                <p class="sub_user">One of reasons why Maeda decided investing in COFICO is that COFICO is a reliable partner with whom Maeda can grow.</p>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <a href="#">
                                        <img src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/Gammonlogo2.jpg">
                                    </a>
                                    <br>
                                   <a style="color: #0072bc;" href="https://www.gammonconstruction.com/en/html/front/index.html"><strong>Gammon Construction
                                           </strong></a>
                                    <br>
                                    <a style="color: #0072bc;" href="https://www.gammonconstruction.com/en/html/front/index.html">Website</a>

                                </div>
                                <div class="col">
                                    <img src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/Mr-Thomas-Ho1.jpg" class="card-img">
                                </div><br>
                                <p class="sub_user"><a style="color: #0072bc;" href="https://www.gammonconstruction.com/en/html/front/index.html"><strong>
                                            (Gammon Contruction is owned by Jardine Matheson Group and Balfour Beatty)</strong></a><br>COFICO is a leading Vietnamese contractor with an extensive track record of delivering high quality projects.</p>
                            </div>
                            <div class="hr-thin">
                                <hr>
                            </div>
                            <div>
                                <div class="text_sub_video"><span>COFICO'S CORE VALUES</span></div>
                            </div>
                            <div class="img_cofico">
                                <a href="<?php echo get_option('siteurl') ?>/tam-nhin-su-menh-gia-tri/" target="_self">
                                    <img width="237" height="237" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/CORE-VALUES_FINISHED11.png" class="card-img" alt="CORE-VALUES_FINISHED1"></a>
                            </div>
                            <div>
                                <div class="text_sub_video"><span>REPUTATION FOR HEALTH, SAFETY & ENVIRONMENT</span></div>
                            </div>
                            <div class="img_cofico">
                                <a href="https://www.cofico.com.vn/tam-nhin-su-menh-gia-tri/" target="_self">
                                    <img width="237" height="237" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/ZeroHarm.jpg" class="card-img" alt="ZeroHarm"></a>
                            </div>
                            <div>
                                <div class="text_sub_video"><span>MODERN TECHNOLOGY</span></div>
                            </div>
                            <div class="img_cofico">
                                <img width="350" height="250" src="https://www.cofico.com.vn/wp-content/uploads/tech.jpg" class="card-img" alt="CORE-VALUES_FINISHED1">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <?php elseif(ICL_LANGUAGE_CODE=='vi'): ?>
        <?php get_header(); ?>
        <div class="hide_mobile">
            <section class="container">
                <div class="row">
                    <?php
                    global $sitepress;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'posts_per_page'         => 1,
                        'order'      => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => ['trang-chu-block-1',]
                            ),
                        )
                    );
                    $wp_query = new WP_Query( $args );
                    //                        var_dump($wp_query);
                    while( $wp_query->have_posts() ): $wp_query->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="mb-4 box-shadow">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                    }
                                    else {
                                        echo '<img src="' . get_bloginfo( 'template_directory' )
                                            . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                    }
                                    ?>
                                </a>
                                <div class="card-body">
                                    <div class="blog-content wf-td">
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a>
                                        </h2>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                    <?php
                    global $sitepress;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'posts_per_page'         => 1,
                        'order'      => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => ['trang-chu-block-2',]
                            ),
                        )
                    );
                    $wp_query = new WP_Query( $args );
                    //                        var_dump($wp_query);
                    while( $wp_query->have_posts() ): $wp_query->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="mb-4 box-shadow">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                    }
                                    else {
                                        echo '<img src="' . get_bloginfo( 'template_directory' )
                                            . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                    }
                                    ?>
                                </a>
                                <div class="card-body">
                                    <div class="blog-content wf-td">
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a>
                                        </h2>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                    <?php
                    global $sitepress;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'posts_per_page'         => 1,
                        'order'      => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => ['trang-chu-block-3',]
                            ),
                        )
                    );
                    $wp_query = new WP_Query( $args );
                    //                        var_dump($wp_query);
                    while( $wp_query->have_posts() ): $wp_query->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="mb-4 box-shadow">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                    }
                                    else {
                                        echo '<img src="' . get_bloginfo( 'template_directory' )
                                            . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                    }
                                    ?>
                                </a>
                                <div class="card-body">
                                    <div class="blog-content wf-td">
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a>
                                        </h2>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                </div>
                <div class="row">
                    <?php
                    global $sitepress;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'posts_per_page'         => 1,
                        'order'      => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => ['trang-chu-block-4',]
                            ),
                        )
                    );
                    $wp_query = new WP_Query( $args );
                    //                        var_dump($wp_query);
                    while( $wp_query->have_posts() ): $wp_query->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="mb-4 box-shadow">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                    }
                                    else {
                                        echo '<img src="' . get_bloginfo( 'template_directory' )
                                            . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                    }
                                    ?>
                                </a>
                                <div class="card-body">
                                    <div class="blog-content wf-td">
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a>
                                        </h2>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                    <?php
                    global $sitepress;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'posts_per_page'         => 1,
                        'order'      => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => ['trang-chu-block-5',]
                            ),
                        )
                    );
                    $wp_query = new WP_Query( $args );
                    //                        var_dump($wp_query);
                    while( $wp_query->have_posts() ): $wp_query->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="mb-4 box-shadow">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                    }
                                    else {
                                        echo '<img src="' . get_bloginfo( 'template_directory' )
                                            . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                    }
                                    ?>
                                </a>
                                <div class="card-body">
                                    <div class="blog-content wf-td">
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a>
                                        </h2>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                    <?php
                    global $sitepress;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'posts_per_page'         => 1,
                        'order'      => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => ['trang-chu-block-6',]
                            ),
                        )
                    );
                    $wp_query = new WP_Query( $args );
                    //                        var_dump($wp_query);
                    while( $wp_query->have_posts() ): $wp_query->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="mb-4 box-shadow">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                    }
                                    else {
                                        echo '<img src="' . get_bloginfo( 'template_directory' )
                                            . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                    }
                                    ?>
                                </a>
                                <div class="card-body">
                                    <div class="blog-content wf-td">
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a>
                                        </h2>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                </div>
                <div class="row">
                    <?php
                    global $sitepress;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'posts_per_page'         => 1,
                        'order'      => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => ['trang-chu-block-7',]
                            ),
                        )
                    );
                    $wp_query = new WP_Query( $args );
                    //                        var_dump($wp_query);
                    while( $wp_query->have_posts() ): $wp_query->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="mb-4 box-shadow">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                    }
                                    else {
                                        echo '<img src="' . get_bloginfo( 'template_directory' )
                                            . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                    }
                                    ?>
                                </a>
                                <div class="card-body">
                                    <div class="blog-content wf-td">
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a>
                                        </h2>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                    <?php
                    global $sitepress;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'posts_per_page'         => 1,
                        'order'      => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => ['trang-chu-block-8',]
                            ),
                        )
                    );
                    $wp_query = new WP_Query( $args );
                    //                        var_dump($wp_query);
                    while( $wp_query->have_posts() ): $wp_query->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="mb-4 box-shadow">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                    }
                                    else {
                                        echo '<img src="' . get_bloginfo( 'template_directory' )
                                            . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                    }
                                    ?>
                                </a>
                                <div class="card-body">
                                    <div class="blog-content wf-td">
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a>
                                        </h2>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                    <?php
                    global $sitepress;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'posts_per_page'         => 1,
                        'order'      => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => ['trang-chu-block-9',]
                            ),
                        )
                    );
                    $wp_query = new WP_Query( $args );
                    //                        var_dump($wp_query);
                    while( $wp_query->have_posts() ): $wp_query->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="mb-4 box-shadow">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                    }
                                    else {
                                        echo '<img src="' . get_bloginfo( 'template_directory' )
                                            . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                    }
                                    ?>
                                </a>
                                <div class="card-body">
                                    <div class="blog-content wf-td">
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a>
                                        </h2>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                </div>
            </section>
            <section class="du_an">
                <div class="container">
                    <h2 class="text_h2_center">CÁC DỰ ÁN TIÊU BIỂU GẦN ĐÂY</h2>
                    <div class="row duan_col">
                        <div class="col-sm-6 duan_dis">
                            <div class="col img_duan">
                                <img class="img-responsive" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2017/11/Casino-2.jpg" width="245" height="248">
                            </div>
                            <div class="col text_duan">
                                <h4><a href="<?php echo get_option('siteurl') ?>/project/du-an-condotel-khu-phuc-hop-nam-hoi-an/" >Khu phức hợp Nam Hội An</a></h4>
                                <p><span>Dự Án:</span> Condotel – Khu phức hợp Nam Hội An</p>
                                <p><span>Địa điểm:</span> Hội An, Quảng Nam</p>
                                <div class="gap" style="line-height: 50px; height: 50px;"></div>
                                <a href="<?php echo get_option('siteurl') ?>/project/du-an-condotel-khu-phuc-hop-nam-hoi-an/" class="more_duan">+ Xem Thêm...</a>
                            </div>
                        </div>
                        <div class="col-sm-6 duan_dis">
                            <div class="col img_duan">
                                <img class="img-responsive" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2019/08/Hoya_1-1-700x406.jpg" width="245" height="248">
                            </div>
                            <div class="col text_duan">
                                <h4><a href="<?php echo get_option('siteurl') ?>/project/nha-may-hoya-lens/" >Hoya Lens</a></h4>
                                <p><span>Dự Án:</span> Nhà Máy Hoya Lens</p>
                                <p><span>Địa điểm:</span> Quảng Ngãi</p>
                                <div class="gap" style="line-height: 50px; height: 50px;"></div>
                                <a href="<?php echo get_option('siteurl') ?>/project/nha-may-hoya-lens/" class="more_duan">+ Xem Thêm...</a>
                            </div>
                        </div>
                        <div class="col-sm-6 duan_dis">
                            <div class="col text_duan">
                                <h4><a href="<?php echo get_option('siteurl') ?>/project/sieu-thi-go/">SIÊU THỊ GO!</a></h4>
                                <p><span>Dự Án:</span> SIÊU THỊ GO! QUẢNG NGÃI</p>
                                <p><span>Địa điểm:</span>Quảng Ngãi</p>
                                <div class="gap" style="line-height: 50px; height: 50px;"></div>
                                <a href="<?php echo get_option('siteurl') ?>/project/sieu-thi-go/" class="more_duan">+ Xem Thêm...</a>
                            </div>
                            <div class="col img_duan2">
                                <img src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2019/08/56157726_1174695192689777_8907272635826569216_o.jpg" width="245" height="248">
                            </div>
                        </div>
                        <div class="col-sm-6 duan_dis">
                            <div class="col text_duan">
                                <h4><a href="<?php echo get_option('siteurl') ?>/project/nha-may-tirol-choco-viet-nam-2/">Tirol Choco Việt Nam</a></h4>
                                <p><span>Dự Án:</span> Nhà máy Tirol Choco Việt Nam</p>
                                <p><span>Địa điểm:</span> Đồng Nai, Việt Nam</p>
                                <div class="gap" style="line-height: 50px; height: 50px;"></div>
                                <a href="<?php echo get_option('siteurl') ?>/project/nha-may-tirol-choco-viet-nam-2/" class="more_duan">+ Xem Thêm...</a>
                            </div>
                            <div class="col img_duan2">
                                <img src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2019/08/TIR-Hinh-anh-du-an-1.jpg" width="245" height="248">
                            </div>
                        </div>
                            <div class="col-sm-6 duan_dis">
                                <div class="col img_duan ">
                                    <img class="img-responsive" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/hausneo_031.jpg" width="245" height="248">
                                </div>
                                <div class="col text_duan">
                                    <h4><a href="<?php echo get_option('siteurl') ?>/project/du-an-can-ho-hausneo/">CĂN HỘ HAUSNEO</a></h4>
                                    <p><span>Dự Án:</span>Căn Hộ Hausneo</p>
                                    <p><span>Địa điểm:</span> Q.9, TP.HCM</p>
                                    <div class="gap" style="line-height: 50px; height: 50px;"></div>
                                    <a href="<?php echo get_option('siteurl') ?>/project/du-an-can-ho-hausneo/" class="more_duan">+ Xem Thêm...</a>
                                </div>
                            </div>
                            <div class="col-sm-6 duan_dis">
                                <div class="col img_duan">
                                    <img class="img-responsive" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/banner-home-21.png" width="245" height="248">
                                </div>
                                <div class="col text_duan">
                                    <h4><a href="<?php echo get_option('siteurl') ?>/project/du-an-estella-heights-2/" >ESTELLA HEIGHTS 2</a></h4>
                                    <p><span>Dự Án:</span> ESTELLA HEIGHTS 2</p>
                                    <p><span>Địa điểm:</span> Q.2, TP.HCM</p>
                                    <div class="gap" style="line-height: 50px; height: 50px;"></div>
                                    <a href="<?php echo get_option('siteurl') ?>/project/du-an-estella-heights-2/" class="more_duan">+ Xem Thêm...</a>
                                </div>
                            </div>
                            <div class="col-sm-6 duan_dis">
                                <div class="col text_duan">
                                    <h4><a href="<?php echo get_option('siteurl') ?>/project/sadora-condominium/">Căn Hộ Sadora</a></h4>
                                    <p><span>Dự Án:</span>Căn Hộ Sadora</p>
                                    <p><span>Địa điểm:</span>Thủ Thiêm, Quận 2, TP. Hồ Chí Minh</p>
                                    <div class="gap" style="line-height: 50px; height: 50px;"></div>
                                    <a href="<?php echo get_option('siteurl') ?>/project/sadora-condominium/" class="more_duan">+ Xem Thêm...</a>
                                </div>
                                <div class="col img_duan2">
                                    <img src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2015/12/Sadora03-700x394.jpg" width="245" height="248">
                                </div>
                            </div>
                            <div class="col-sm-6 duan_dis">
                                <div class="col text_duan">
                                    <h4><a href="<?php echo get_option('siteurl') ?>/project/vista-verde-residental/">VISTA VERDE</a></h4>
                                    <p><span>Dự Án:</span>Căn hộ Vista Verde</p>
                                    <p><span>Địa điểm:</span>Quận 2, TP. Hồ Chí Minh</p>
                                    <div class="gap" style="line-height: 50px; height: 50px;"></div>
                                    <a href="<?php echo get_option('siteurl') ?>/project/vista-verde-residental/" class="more_duan">+ Xem Thêm...</a>
                                </div>
                                <div class="col img_duan2">
                                    <img src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/vistaverde.jpg" width="245" height="248">
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <section class="du_an_mobile" id="one">
                <div class="container">
                    <h2 class="text_h2_center">CÁC DỰ ÁN TIÊU BIỂU GẦN ĐÂY</h2>
                    <div class="owl-one owl-carousel css owl-theme">
                        <div class="item1">
                            <div class="col duan_dis">
                                <div class="col">
                                    <h5><a href="<?php echo get_option('siteurl') ?>/project/vista-verde-residental/">VISTA VERDE</a></h5>
                                    <p><strong>Dự Án:</strong> Vista Verde</p>
                                    <p><strong>Địa điểm:</strong> Q.2, TP.HCM</p>
                                    <a href="<?php echo get_option('siteurl') ?>/project/vista-verde-residental/" class="more_duan">+ Xem Thêm...</a>
                                </div>
                                <div class="col card-img" style="background-image: url(<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/vistaverde-thumbnail1.jpg);background-position: center;background-size: 100%;background-repeat: no-repeat;">

                                </div>
                            </div>
                        </div>
                        <div class="item1">
                            <div class="col duan_dis">
                                <div class="col">
                                    <h5><a href="<?php echo get_option('siteurl') ?>/project/du-an-estella-heights-2/">ESTELLA HEIGHTS 2</a></h5>
                                    <p><strong>Dự Án:</strong> Estella Heights 2</p>
                                    <p><strong>Địa điểm:</strong> Q.2, TP.HCM</p>
                                    <a href="<?php echo get_option('siteurl') ?>/project/du-an-estella-heights-2/" class="more_duan">+ Xem Thêm...</a>
                                </div>
                                <div class="col card-img" style="background-image: url(<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/vistaverde-thumbnail1.jpg);background-position: center;background-size: 100%;background-repeat: no-repeat;">

                                </div>
                            </div>
                        </div>
                        <div class="item1">
                            <div class="col duan_dis">
                                <div class="col">
                                    <h5><a href="<?php echo get_option('siteurl') ?>/project/du-an-can-ho-hausneo/">CĂN HỘ HAUSNEO</a></h5>
                                    <p><strong>Dự Án:</strong> Căn Hộ Hausneo</p>
                                    <p><strong>Địa điểm:</strong> Q.9, TP.HCM</p>
                                    <a href="<?php echo get_option('siteurl') ?>/project/du-an-can-ho-hausneo/" class="more_duan">+ Xem Thêm...</a>
                                </div>
                                <div class="col card-img" style="background-image: url(<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/hausneo_031.jpg);background-position: center;background-size: 100%;background-repeat: no-repeat;">

                                </div>
                            </div>
                        </div>
                        <div class="item1">
                            <div class="col duan_dis">
                                <div class="col">
                                    <h5><a href="<?php echo get_option('siteurl') ?>/project/can-ho-gateway-thao-dien/">GATEWAY THẢO ĐIỀN</a></h5>
                                    <p><strong>Dự Án:</strong> GATEWAY THẢO ĐIỀN</p>
                                    <p><strong>Địa điểm:</strong>Quận 2, TP. Hồ Chí Minh</p>
                                    <a href="<?php echo get_option('siteurl') ?>/project/can-ho-gateway-thao-dien/" class="more_duan">+ Xem Thêm...</a>
                                </div>
                                <div class="col card-img" style="background-image: url(<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/gateway-thao-dien.jpg);background-position: center;background-size: 100%;background-repeat: no-repeat;">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <section class="main-content container">
                <h2 class="info_text">Thông Tin Chung</h2>
                <div class="row">
                    <div class="col-md-8">
                        <div class="collapse-content-group">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <a role="button" data-toggle="collapse" href="#collapse11" aria-expanded="false" aria-controls="collapseOne" class="trigger collapsed">
                                        <h4 class="panel-title textuper">Thư Chủ tịch</h4>
                                    </a>
                                </div>
                                <div id="collapse11" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne" style="">
                                    <div class="panel-body">
                                        <div class="m-collapse-content">
                                            <div class="m-body-collapse">
                                                <div class="wpb_wrapper">
                                                    <div class="gap" style="line-height: 15px; height: 15px;"></div>
                                                    <p><img class="card-img" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/Mr.Xu-Thungo.jpg" alt="Mr.Xu Thungo" ></p>
                                                    <div class="gap" style="line-height: 5px; height: 5px;"></div>
                                                    <p><strong>COFICO hân hạnh chào đón các bạn!</strong></p>
                                                    <p>Hoạt động trong môi trường kinh doanh đầy cạnh tranh và biến động, COFICO vẫn không ngừng tối ưu hóa vốn tri thức, liên tục đổi mới vì sự tiến bộ không chỉ của chúng tôi, mà cao hơn nữa, là vì lợi ích của nhà đầu tư, khách hàng và cộng đồng.</p>
                                                    <p>Lịch sử thành lập và phát triển của COFICO đã ghi nhận được những thành tựu to lớn, nhưng cũng từng đối mặt với rất nhiều khó khăn thử thách. Dù trong hoàn cảnh nào, chúng tôi cũng giữ vững tinh thần, nhẫn nại và kiên quyết tiếp tục hành trình để chinh phục những tầm cao mới. Ngày nay, triết lý “chúng tôi không chỉ xây dựng các công trình mà còn xây dựng mối quan hệ tốt đẹp và bền vững” vẫn hiện hữu trong mọi hoạt động đối nội lẫn đối ngọai của COFICO.</p>
                                                    <p>Những thành tựu to lớn đó đã được xây dựng bởi toàn thể nhân viên COFICO – một tập thể đam mê với công việc, tin tưởng vào sự thăng tiến cá nhân, và luôn toàn tâm toàn ý vì sự lớn mạnh không ngừng của công ty. Tiếp đó, COFICO luôn tự hào được hợp tác với những đối tác uy tín trong và ngoài nước. Đặc biệt cổ đông chiến lược là hai tập đoàn xây dựng lớn trên thế giới là Gammon Construction (sở hữu bởi tập đòan Jardine Matheson and Balfour Beatty) và Maeda Nhật Bản. Với sự hợp tác và hỗ trợ quan trọng của họ, COFICO sẽ tiếp tục củng cố và nâng cao vị thế cạnh tranh trên thương trường.</p>
                                                    <p>Vì vậy, chúng tôi tin tưởng sâu sắc rằng, được xây dựng trên những giá trị quý báu đó, COFICO chắc chắn dần dần sẽ đạt được các chuẩn mực của một nhà thầu quốc tế, đồng thời sở hữu lợi thế thấu hiểu các yêu cầu đặc thù của thị trường địa phương. Từ đó chúng tôi sẽ tối ưu hóa các giá trị mang lại để trở thành một đối tác tin cậy, một nhà thầu chất lượng, uy tín, một nơi làm việc mong ước, và là một tổ chức có trách nhiệm cao với cộng đồng. Tổng hòa các yếu tố đó, COFICO chắc chắn sẽ trở thành một công ty xây dựng được tôn trọng nhất tại Việt Nam.</p>
                                                    <p>Đây chính là nét riêng của COFICO – Bảo tồn các giá trị cốt lõi: “Sự tôn trọng – sự tin cậy – làm việc nhóm – An toàn lao động” trong khi không ngừng đổi mới.</p>
                                                    <p>Cùng nhau hành động, chúng ta sẽ thành công!</p>
                                                    <p><strong><br>
                                                            Lê Đăng Xu<br>
                                                        </strong> Chủ tịch Hội Đồng Quản Trị – Chủ tịch Điều hành
                                                    </p>
                                                    <div class="gap" style="line-height: 10px; height: 10px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <a role="button" data-toggle="collapse" href="#collapse12" aria-expanded="false" aria-controls="collapseOne" class="trigger collapsed">
                                        <h4 class="panel-title textuper">Tầm nhìn, Sứ mệnh, Giá trị cốt lõi</h4>
                                    </a>
                                </div>
                                <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                    <div class="panel-body">
                                        <div class="m-collapse-content">
                                            <div class="m-body-collapse">
                                                <div class="wpb_wrapper">
                                                    <div class="gap" style="line-height: 15px; height: 15px;"></div>
                                                    <p class="text-theme-color" style="padding-top: 0 !important;"><strong>Tầm nhìn</strong></p>
                                                    <p>COFICO đang từng bước thực hiện mục tiêu trở thành một trong những công ty xây dựng Việt Nam được tôn trọng hàng đầu trong nước.</p>
                                                    <p>Đạt được sự tín nhiệm của khách hàng và các đối tác kinh doanh chính là nhân tố quan trọng góp phần vào sự thành công của COFICO.</p>
                                                    <p>Không chỉ đem những điều tốt đẹp đến cho khách hàng, COFICO còn tạo ra nhiều cơ hội thành công cho đội ngũ nhân viên của mình. Mỗi nhân viên đều có thể tự hào khi làm việc tại COFICO.</p>
                                                    <p class="text-theme-color"><strong>Sứ mệnh</strong></p>
                                                    <p>Sứ mệnh của COFICO là đem lại những giải pháp và dịch vụ xây dựng tốt nhất nằm đáp những sự kỳ vọng của khách hàng, giúp khách hàng đạt được mục tiêu trong chiến lược kinh doanh lâu dài của họ.</p>
                                                    <p>Chúng tôi đánh giá sự thành công dựa trên cơ sở thành công của khách hàng và các đối tác liên quan. Sự thành công đó tất yếu phải dựa trên các yếu tố về chất lượng cao (dịch vụ với chuẩn mực quốc tế), tính an toàn tại công trường, giá thành hợp lý và các giải pháp với tiến độ thích hợp.</p>
                                                    <p class="text-theme-color"><strong>Giá trị cốt lõi</strong></p>
                                                    <p><strong>Sự Tôn Trọng</strong><br>
                                                        Tôn trọng chính quyền và cộng đồng, tôn trọng khách hàng và cổ đông tôn trọng đối tác và người lao động.
                                                    </p>
                                                    <p><strong>Sự Tin Cậy</strong><br>
                                                        Tính trung thực mang lại sự tin cậy trong mọi mối quan hệ, giao dịch, với đồng nghiệp, khách hàng, đối tác. Đây là một trong những tiêu chí hàng đầu của COFICO.
                                                    </p>
                                                    <p><strong>Làm Việc Nhóm</strong><br>
                                                        Thấu hiểu giá trị của tinh thần làm việc nhóm luôn mang lại thành công. Động viên, khuyến khích, cùng nhau hướng đến mục tiêu chung.
                                                    </p>
                                                    <p><strong>An Toàn Lao Động</strong><br>
                                                        Cung cấp một nơi làm việc đảm bảo an toàn cho tất cả các bên liên quan, khu vực lân cận và có trách nhiệm với cộng đồng, thân thiện với môi trường. Mọi rủi ro tiềm ẩn đều có thể ngăn chặn được tại mỗi dự án.
                                                    </p>
                                                    <div class="gap" style="line-height: 10px; height: 10px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--- vhcty-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <a role="button" data-toggle="collapse" href="#collapse123" aria-expanded="false" aria-controls="collapseOne" class="trigger collapsed">
                                        <h4 class="panel-title textuper">Triết lý - Văn hóa Công ty</h4>
                                    </a>
                                </div>
                                <div id="collapse123" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                    <div class="panel-body">
                                        <div class="m-collapse-content">
                                            <div class="m-body-collapse">
                                                <div class="wpb_wrapper">
                                                    <div class="gap" style="line-height: 15px; height: 15px;"></div>
                                                    <p><strong>Triết lý</strong></p>
                                                    <p>COFICO tin rằng, thành công của mọi công trình đều bắt nguồn từ một môi trường làm việc chất lượng và những cơ hội để mỗi nhân viên có thể phát huy tối đa năng lực của bản thân.</p>
                                                    <p><strong>Văn hóa</strong></p>
                                                    <p>Mọi quyết định của COFICO đều bắt đầu dựa trên sự chân thành và liêm chính. Chúng tôi khuyến khích sự giao tiếp cởi mở giữa công ty với khách hàng, các đối tác và trong nội bộ doanh nghiệp nhằm nỗ lực hướng đến các mục tiêu trong kinh doanh.</p>
                                                    <div class="gap" style="line-height: 10px; height: 10px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--- cl-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <a role="button" data-toggle="collapse" href="#collapse124" aria-expanded="false" aria-controls="collapseOne" class="trigger collapsed">
                                        <h4 class="panel-title textuper">Chiến lược</h4>
                                    </a>
                                </div>
                                <div id="collapse124" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                    <div class="panel-body">
                                        <div class="m-collapse-content">
                                            <div class="m-body-collapse">
                                                <div class="wpb_wrapper">
                                                    <div class="gap" style="line-height: 15px; height: 15px;"></div>
                                                    <p><strong>Chiến lược</strong></p>
                                                    <p>Nhằm đạt được các mục tiêu trong chiến lược dài hạn, COFICO luôn dựa trên 03 yếu tố mang tính nền tảng đối với sự phát triển của công ty:</p>
                                                    <ul>
                                                        <li>Sản phẩm chất lượng</li>
                                                        <li>Tài chính vững chắc</li>
                                                        <li>Không ngừng đổi mới</li>
                                                    </ul>
                                                    <div class="gap" style="line-height: 10px; height: 10px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="video_ifm">
                            <div class="text_sub_video"><span>CORPORATE VIDEO</span></div>
                            <div class="video-responsive">
                                <iframe width="350" height="220" src="https://www.youtube.com/embed/6NOw18qZFkQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                             </div>
                        </div>
                        <div class="hr-thin">
                            <hr>
                        </div>
                        <div class="user_pro">
                            <div class="text_sub_video"><span>CỔ ĐÔNG CHIẾN LƯỢC</span></div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <a href="#">
                                        <img src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/Maedalogo2.jpg">
                                      <br> <strong>Maeda Corporation</strong>
                                        <a style="color: #0072bc;" href="https://www.maeda.co.jp/english.html">Website</a>
                                    </a>
                                </div>
                                <div class="col">
                                    <img src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2015/02/mr-obara-koichi.png" class="card-img">
                                </div>
                                <p class="sub_user">Một trong những lý do Maeda quyết định đầu tư vào COFICO vì COFICO là một đối tác tin cậy và Maeda có thể đồng hành cùng nhau phát triển.</p>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <a href="#">
                                        <img src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/Gammonlogo2.jpg">
                                        <a style="color: #0072bc;" href="https://www.gammonconstruction.com/en/html/front/index.html"><strong>Gammon Construction</strong></a><br>
                                        <a style="color: #0072bc;" href="https://www.gammonconstruction.com/en/html/front/index.html">Website</a>
                                    </a>
                                </div>
                                <div class="col">
                                    <img src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/Mr-Thomas-Ho1.jpg" class="card-img">
                                </div>
                                <p class="sub_user"><a style="color: #0072bc;" href="https://www.gammonconstruction.com/en/html/front/index.html"><strong>(Gammon Contruction được sở hữu bởi tập đoàn Jardine Matheson and Balfour Beatty)</strong></a><br>COFICO là một nhà thầu xây dựng hàng đầu tại Việt nam với năng lực chuyên môn đã được chứng minh bằng việc hoàn thành hàng loạt dự án chất lượng cao.</p>
                            </div>
                            <div class="hr-thin">
                                <hr>
                            </div>
                            <div>
                                <div class="text_sub_video"><span>GIÁ TRỊ CỐT LÕI CỦA COFICO</span></div>
                            </div>
                            <div class="img_cofico">
                                <a href="<?php echo get_option('siteurl') ?>/tam-nhin-su-menh-gia-tri/" target="_self">
                                    <img width="237" height="237" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/CORE-VALUES_FINISHED11.png" class="card-img" alt="CORE-VALUES_FINISHED1"></a>
                            </div>
                            <div>
                                <div class="text_sub_video"><span>UY TÍN VỀ AN TOÀN, SỨC KHOẺ & MÔI TRƯỜNG</span></div>
                            </div>
                            <div class="img_cofico">
                                <a href="https://www.cofico.com.vn/tam-nhin-su-menh-gia-tri/" target="_self">
                                    <img width="237" height="237" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/ZeroHarm.jpg" class="card-img" alt="ZeroHarm"></a>
                            </div>
                            <div>
                                <div class="text_sub_video"><span>CÔNG NGHỆ HIỆN ĐẠI</span></div>
                            </div>
                            <div class="img_cofico">
                                <img width="350" height="250" src="https://www.cofico.com.vn/wp-content/uploads/tech.jpg" class="card-img" alt="CORE-VALUES_FINISHED1">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- is mobile-->
    <?php endif; ?>
    <?php if(ICL_LANGUAGE_CODE=='en'): ?>
        <div class="show_mobile">
            <section class="news-home-box-mt">

                <div class="container-fluid">

                    <div class="row">
                        <?php
                        global $sitepress;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'post',
                            'paged' => $paged,
                            'post_status' => 'publish',
                            'posts_per_page'         => 1,
                            'order'      => 'DESC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms'    => ['trang-chu-block-1-en',]
                                ),
                            )
                        );
                        $wp_query = new WP_Query( $args );
                        //                        var_dump($wp_query);
                        while( $wp_query->have_posts() ): $wp_query->the_post();
                            ?>
                            <div class="col-md-4 item-news-home">
                                <div class="card mb-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                        }
                                        else {
                                            echo '<img src="' . get_bloginfo( 'template_directory' )
                                                . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                        }
                                        ?>
                                    </a>
                                    <div class="card-body content-box-card">
                                        <p ><a class="h4-titile-news-home" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                        <p class="card-text"><?php the_excerpt(); ?></p>

                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
                        <?php
                        global $sitepress;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'post',
                            'paged' => $paged,
                            'post_status' => 'publish',
                            'posts_per_page'         => 1,
                            'order'      => 'DESC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms'    => ['trang-chu-block-2-en',]
                                ),
                            )
                        );
                        $wp_query = new WP_Query( $args );
                        //                        var_dump($wp_query);
                        while( $wp_query->have_posts() ): $wp_query->the_post();
                            ?>
                            <div class="col-md-4 item-news-home">
                                <div class="card mb-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                        }
                                        else {
                                            echo '<img src="' . get_bloginfo( 'template_directory' )
                                                . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                        }
                                        ?>
                                    </a>
                                    <div class="card-body content-box-card">
                                        <p ><a class="h4-titile-news-home" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                        <p class="card-text"><?php the_excerpt(); ?></p>

                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
                        <?php
                        global $sitepress;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'post',
                            'paged' => $paged,
                            'post_status' => 'publish',
                            'posts_per_page'         => 1,
                            'order'      => 'DESC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms'    => ['trang-chu-block-3-en',]
                                ),
                            )
                        );
                        $wp_query = new WP_Query( $args );
                        //                        var_dump($wp_query);
                        while( $wp_query->have_posts() ): $wp_query->the_post();
                            ?>
                            <div class="col-md-4 item-news-home">
                                <div class="card mb-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                        }
                                        else {
                                            echo '<img src="' . get_bloginfo( 'template_directory' )
                                                . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                        }
                                        ?>
                                    </a>
                                    <div class="card-body content-box-card">
                                        <p ><a class="h4-titile-news-home" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                        <p class="card-text"><?php the_excerpt(); ?></p>

                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
                    </div>
                    <div class="row">
                        <?php
                        global $sitepress;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'post',
                            'paged' => $paged,
                            'post_status' => 'publish',
                            'posts_per_page'         => 1,
                            'order'      => 'DESC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms'    => ['trang-chu-block-4-en',]
                                ),
                            )
                        );
                        $wp_query = new WP_Query( $args );
                        //                        var_dump($wp_query);
                        while( $wp_query->have_posts() ): $wp_query->the_post();
                            ?>
                            <div class="col-md-4 item-news-home">
                                <div class="card mb-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                        }
                                        else {
                                            echo '<img src="' . get_bloginfo( 'template_directory' )
                                                . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                        }
                                        ?>
                                    </a>
                                    <div class="card-body content-box-card">
                                        <p ><a class="h4-titile-news-home" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                        <p class="card-text"><?php the_excerpt(); ?></p>

                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
                        <?php
                        global $sitepress;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'post',
                            'paged' => $paged,
                            'post_status' => 'publish',
                            'posts_per_page'         => 1,
                            'order'      => 'DESC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms'    => ['trang-chu-block-5-en',]
                                ),
                            )
                        );
                        $wp_query = new WP_Query( $args );
                        //                        var_dump($wp_query);
                        while( $wp_query->have_posts() ): $wp_query->the_post();
                            ?>
                            <div class="col-md-4 item-news-home">
                                <div class="card mb-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                        }
                                        else {
                                            echo '<img src="' . get_bloginfo( 'template_directory' )
                                                . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                        }
                                        ?>
                                    </a>
                                    <div class="card-body content-box-card">
                                        <p ><a class="h4-titile-news-home" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                        <p class="card-text"><?php the_excerpt(); ?></p>

                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
                        <?php
                        global $sitepress;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'post',
                            'paged' => $paged,
                            'post_status' => 'publish',
                            'posts_per_page'         => 1,
                            'order'      => 'DESC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms'    => ['trang-chu-block-6-en',]
                                ),
                            )
                        );
                        $wp_query = new WP_Query( $args );
                        //                        var_dump($wp_query);
                        while( $wp_query->have_posts() ): $wp_query->the_post();
                            ?>
                            <div class="col-md-4 item-news-home">
                                <div class="card mb-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                        }
                                        else {
                                            echo '<img src="' . get_bloginfo( 'template_directory' )
                                                . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                        }
                                        ?>
                                    </a>
                                    <div class="card-body content-box-card">
                                        <p ><a class="h4-titile-news-home" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                        <p class="card-text"><?php the_excerpt(); ?></p>

                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
                    </div>
                    <div class="row">
                        <?php
                        global $sitepress;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'post',
                            'paged' => $paged,
                            'post_status' => 'publish',
                            'posts_per_page'         => 1,
                            'order'      => 'DESC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms'    => ['trang-chu-block-7-en',]
                                ),
                            )
                        );
                        $wp_query = new WP_Query( $args );
                        //                        var_dump($wp_query);
                        while( $wp_query->have_posts() ): $wp_query->the_post();
                            ?>
                            <div class="col-md-4 item-news-home">
                                <div class="card mb-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                        }
                                        else {
                                            echo '<img src="' . get_bloginfo( 'template_directory' )
                                                . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                        }
                                        ?>
                                    </a>
                                    <div class="card-body content-box-card">
                                        <p ><a class="h4-titile-news-home" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                        <p class="card-text"><?php the_excerpt(); ?></p>

                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
                        <?php
                        global $sitepress;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'post',
                            'paged' => $paged,
                            'post_status' => 'publish',
                            'posts_per_page'         => 1,
                            'order'      => 'DESC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms'    => ['trang-chu-block-8-en',]
                                ),
                            )
                        );
                        $wp_query = new WP_Query( $args );
                        //                        var_dump($wp_query);
                        while( $wp_query->have_posts() ): $wp_query->the_post();
                            ?>
                            <div class="col-md-4 item-news-home">
                                <div class="card mb-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                        }
                                        else {
                                            echo '<img src="' . get_bloginfo( 'template_directory' )
                                                . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                        }
                                        ?>
                                    </a>
                                    <div class="card-body content-box-card">
                                        <p ><a class="h4-titile-news-home" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                        <p class="card-text"><?php the_excerpt(); ?></p>

                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
                        <?php
                        global $sitepress;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'post',
                            'paged' => $paged,
                            'post_status' => 'publish',
                            'posts_per_page'         => 1,
                            'order'      => 'DESC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms'    => ['trang-chu-block-9-en',]
                                ),
                            )
                        );
                        $wp_query = new WP_Query( $args );
                        //                        var_dump($wp_query);
                        while( $wp_query->have_posts() ): $wp_query->the_post();
                            ?>
                            <div class="col-md-4 item-news-home">
                                <div class="card mb-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                        }
                                        else {
                                            echo '<img src="' . get_bloginfo( 'template_directory' )
                                                . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                        }
                                        ?>
                                    </a>
                                    <div class="card-body content-box-card">
                                        <p ><a class="h4-titile-news-home" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                        <p class="card-text"><?php the_excerpt(); ?></p>

                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
                    </div>
                </div>
            </section>
           <!-- list du an-->
            <section class="project-box-home-mt">
                <div class="container-fluid">
                    <h2 class="title_home_mt"> CURRENT HIGHLIGHT PROJECTS</h2>
                    <div class="border_title"></div>
                    <div class="row ">
                        <div class="owl-one owl-carousel css owl-theme">
                            <div class="item1">
                                <div class="col-md-4 list-project-item">
                                    <div class="card mb-4">
                                        <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2017/11/Casino-2.jpg">
                                        <div class="card-body content-box-card">
                                            <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/en/project/du-an-condotel-khu-phuc-hop-nam-hoi-an/">Condotel – South Hoi An complex</a></p>
                                            <p class="project-home-content">
                                                <strong>Project:</strong>Condotel – South Hoi An complex
                                            </p>
                                            <p class="project-home-content">
                                                <strong>Address:</strong> Hoi An, Quang Nam Province
                                            </p>
                                            <p class="project-home-content">
                                                <a href="<?php echo get_option('siteurl') ?>/en/project/du-an-condotel-khu-phuc-hop-nam-hoi-an/" class="more_duan">+ Read more...</a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="col-md-4 list-project-item">
                                    <div class="card mb-4">
                                        <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2019/08/Hoya_1-1-700x406.jpg">
                                        <div class="card-body content-box-card">
                                            <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/en/project/nha-may-hoya-lens/">Hoya Lens</a></p>
                                            <p class="project-home-content">
                                                <strong>Project:</strong>  Hoya Lens Vietnam 2 Factory
                                            </p>
                                            <p class="project-home-content">
                                                <strong>Address:</strong> Quang Ngai province
                                            </p>
                                            <p class="project-home-content">
                                                <a href="<?php echo get_option('siteurl') ?>/en/project/nha-may-hoya-lens/" class="more_duan">+ Read more...</a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- -->
                            <div class="item1">
                                <div class="col-md-4 list-project-item">
                                    <div class="card mb-4">
                                        <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2019/08/56157726_1174695192689777_8907272635826569216_o.jpg">
                                        <div class="card-body content-box-card">
                                            <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/en/project/sieu-thi-go/">GO! Supermarket</a></p>
                                            <p class="project-home-content">
                                                <strong>Project:</strong>  GO! Supermarket
                                            </p>
                                            <p class="project-home-content">
                                                <strong>Address:</strong> Quang Ngai Viet Nam
                                            </p>
                                            <p class="project-home-content">
                                                <a href="<?php echo get_option('siteurl') ?>/en/project/sieu-thi-go/" class="more_duan">+ Read more...</a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="col-md-4 list-project-item">
                                    <div class="card mb-4">
                                        <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2019/08/TIR-Hinh-anh-du-an-1.jpg">
                                        <div class="card-body content-box-card">
                                            <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/en/project/tirol-choco-vietnam-factory/">Tirol Choco Vietnam Factory</a></p>
                                            <p class="project-home-content">
                                                <strong>Project:</strong>  Tirol Choco Vietnam Factory
                                            </p>
                                            <p class="project-home-content">
                                                <strong>Address:</strong>  Dong Nai, Viet Nam
                                            </p>
                                            <p class="project-home-content">
                                                <a href="<?php echo get_option('siteurl') ?>/en/project/tirol-choco-vietnam-factory/" class="more_duan">+ Read more...</a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Hausneo Apartment ESTELLA HEIGHTS 2 -->
                            <div class="item1">
                                <div class="col-md-4 list-project-item">
                                    <div class="card mb-4">
                                        <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/hausneo_031.jpg">
                                        <div class="card-body content-box-card">
                                            <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/en/project/du-an-can-ho-hausneo/">HAUSNEO APARTMENT</a></p>
                                            <p class="project-home-content">
                                                <strong>Project:</strong>  HAUSNEO APARTMENT
                                            </p>
                                            <p class="project-home-content">
                                                <strong>Address:</strong> Dist.9, HCMC
                                            </p>
                                            <p class="project-home-content">
                                                <a href="<?php echo get_option('siteurl') ?>/en/project/du-an-can-ho-hausneo/" class="more_duan">+ Read more...</a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="col-md-4 list-project-item">
                                    <div class="card mb-4">
                                        <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/banner-home-21.png">
                                        <div class="card-body content-box-card">
                                            <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/en/project/du-an-estella-heights-2/">ESTELLA HEIGHTS 2</a></p>
                                            <p class="project-home-content">
                                                <strong>Project:</strong>  Estella Heights 2
                                            </p>
                                            <p class="project-home-content">
                                                <strong>Address:</strong> District 2, Hochiminh City
                                            </p>
                                            <p class="project-home-content">
                                                <a href="<?php echo get_option('siteurl') ?>/en/project/du-an-estella-heights-2/" class="more_duan">+ Read more...</a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Hoya Lens-->
                            <div class="item1">
                                <div class="col-md-4 list-project-item">
                                    <div class="card mb-4">
                                        <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2015/12/Sadora03-700x394.jpg">
                                        <div class="card-body content-box-card">
                                            <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/en/project/sadora-condominium/">Sadora Condominium</a></p>
                                            <p class="project-home-content">
                                                <strong>Project:</strong>  Sadora Condominium
                                            </p>
                                            <p class="project-home-content">
                                                <strong>Address:</strong> Dist.2, HCMC
                                            </p>
                                            <p class="project-home-content">
                                                <a href="<?php echo get_option('siteurl') ?>/en/project/sadora-condominium/" class="more_duan">+ Read more...</a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="col-md-4 list-project-item">
                                    <div class="card mb-4">
                                        <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/vistaverde.jpg">
                                        <div class="card-body content-box-card">
                                            <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/en/project/vista-verde-residental/">
                                                    Vista Verde Residental</a></p>
                                            <p class="project-home-content">
                                                <strong>Project:</strong> Vista Verde Residental
                                            </p>
                                            <p class="project-home-content">
                                                <strong>Address:</strong> District 2, Hochiminh City
                                            </p>
                                            <p class="project-home-content">
                                                <a href="<?php echo get_option('siteurl') ?>/en/project/vista-verde-residental/" class="more_duan">+ Read more...</a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- !list du an -->
            <section class="main-content container">
                <h2 class="info_text">OVERVIEW</h2>
                <div class="row">
                    <div class="col">
                        <div class="collapse-content-group">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <a role="button" data-toggle="collapse" href="#collapse11" aria-expanded="false" aria-controls="collapseOne" class="trigger collapsed">
                                        <h4 class="panel-title textuper">Chairman’s Message</h4>
                                    </a>
                                </div>
                                <div id="collapse11" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne" style="">
                                    <div class="panel-body">
                                        <div class="m-collapse-content">
                                            <div class="m-body-collapse">
                                                <div class="wpb_wrapper">

                                                    <div class="gap" style="line-height: 15px; height: 15px;"></div>
                                                    <p><img class="card-img" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/Mr.Xu-Thungo.jpg" alt="Mr.Xu Thungo" ></p>
                                                    <div class="gap" style="line-height: 5px; height: 5px;"></div>
                                                    <p><strong>Welcome to COFICO!</strong></p>
                                                    <p>As the business environments are increasingly uncertain yet highly competitive, COFICO continues optimizing our intellectual capital to innovate, to change and to move on; for the advancements not only of ourselves’ but also our stakeholders’.</p>
                                                    <p>COFICO’s established history has seen moments of both great achievements as well as tough challenges. Either way, we keep calm, diligent and resolute to continue our journey reaching newer heights. Today, as one of Vietnam’s leading construction companies, it has long been COFICO’s overriding philosophy that ‘We are not just building buildings. We are building strong relationships with clients and partners’, which applies universally to all aspects of our business, both internally and externally.</p>
                                                    <p>This is primarily enabled by our highly committed staffs at all levels who so very enjoy their work, see their bright future with the company and thus dedicate wholeheartedly to COFICO. Secondly, COFICO is proud to be accompanied by our partners both local and foreign, especially our strategic shareholders who are large international contractors namely Gammon Construction (Owned by Jardine Matheson Group and Balfour Beatty) and Maeda Corporation; with all of whose critical partnerships and supports, COFICO continues to reinforce and enhance our competitive advantages.</p>
                                                    <p>And so we profoundly believe that, powered by such specially energetic values, COFICO is properly equipped to attain ever-demanding international standards while leveraging our deeply-rooted local understandings. We shall therefore continue to optimize profitability, to be an employer of choice, a partner of choice, a contractor of choice and a responsible corporate citizen; for all of which we shall naturally be Vietnam’s most respected construction company.</p>
                                                    <p>It is the COFICO’s identity to Preserve Our Core Values — being Respect, Trust, Teamwork and Safety — while Stimulating Progress.</p>
                                                    <p>Let’s do and achieve, together!</p>
                                                    <p>&nbsp;</p>
                                                    <p><strong>Le Dang Xu<br>
                                                        </strong>Executive Chairman </p>
                                                    <div class="gap" style="line-height: 10px; height: 10px;"></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <a role="button" data-toggle="collapse" href="#collapse12" aria-expanded="false" aria-controls="collapseOne" class="trigger collapsed">
                                        <h4 class="panel-title textuper">Visions, Mission, Core values</h4>
                                    </a>
                                </div>
                                <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                    <div class="panel-body">
                                        <div class="m-collapse-content">
                                            <div class="m-body-collapse">
                                                <div class="wpb_wrapper">

                                                    <div class="gap" style="line-height: 15px; height: 15px;"></div>
                                                    <p><strong>Vision</strong></p>
                                                    <p>COFICO has, step by step, moved towards its vision of becoming one of the leading construction companies domestically and internationally.</p>
                                                    <p>To be accredited by customers’ and business partners is an important factor making COFICO’s success.</p>
                                                    <p>Not only delivering goodness to customers, COFICO also creates many opportunities for its staffs. Every staff can be proud working at COFICO.</p>
                                                    <p><strong>Mission</strong></p>
                                                    <p>COFICO’s mission is to deliver the best construction solutions and services to satisfy customers’ expectations and help customers achieve their long-term business objectives.</p>
                                                    <p>We evaluate our success based on the success of our customers and other stakeholders. Eventually, such success depends on factors regarding high quality (international standard services), safety of the construction site, reasonable price and solutions with appropriate work progresses.</p>
                                                    <p><strong>Core values</strong></p>
                                                    <p><strong>Respect<br>
                                                        </strong>Respect the community diversity, treasure the values of business, work and social relationships.</p>
                                                    <p><strong>Trust<br>
                                                        </strong>Trust&nbsp;is the source of creditability in every relationship/ transaction among colleagues, customers’, partners. That makes COFICO’s power.</p>
                                                    <p><strong>Teamwork<br>
                                                        </strong>Understanding the value of teamwork’ spirit will always deliver success. Thus, colleagues should encourage, work together and share targets to produce optimal results.</p>
                                                    <p><strong>Safety<br>
                                                        </strong>Human is the Company’s precious social capital. Thus ensuring safety in every construction site is one of the Company’s priorities in the course for sustainable development (At COFICO, every staff works and returns home safely)</p>

                                                    <div class="gap" style="line-height: 10px; height: 10px;"></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--- vhcty-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <a role="button" data-toggle="collapse" href="#collapse123" aria-expanded="false" aria-controls="collapseOne" class="trigger collapsed">
                                        <h4 class="panel-title textuper">Philosophy- Culture</h4>
                                    </a>
                                </div>
                                <div id="collapse123" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                    <div class="panel-body">
                                        <div class="m-collapse-content">
                                            <div class="m-body-collapse">
                                                <div class="wpb_wrapper">

                                                    <div class="gap" style="line-height: 15px; height: 15px;"></div>
                                                    <p><strong>Philosophy</strong></p>
                                                    <p>COFICO believes success of every construction begins from a quality working environment and opportunities, in which, each every staff can express and maximize their capabilities.</p>
                                                    <p><strong>Culture</strong></p>
                                                    <p>COFICO’s decisions originate from devotion and integrity. We encourage open discussions between the Company and customers/ partners as well as the communication from within the Company in the course of obtaining business goals</p>
                                                    <div class="gap" style="line-height: 10px; height: 10px;"></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--- cl-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <a role="button" data-toggle="collapse" href="#collapse124" aria-expanded="false" aria-controls="collapseOne" class="trigger collapsed">
                                        <h4 class="panel-title textuper">Strategy</h4>
                                    </a>
                                </div>
                                <div id="collapse124" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                    <div class="panel-body">
                                        <div class="m-collapse-content">
                                            <div class="m-body-collapse">
                                                <div class="wpb_wrapper">

                                                    <div class="gap" style="line-height: 15px; height: 15px;"></div>
                                                    <p><strong>Strategy</strong></p>
                                                    <p>In order to achieve the strategic long-term goals, COFICO bases on 03 founding principals:</p>
                                                    <ul>
                                                        <li>High quality product</li>
                                                        <li>Solid financial foundation</li>
                                                        <li>Continuous change and improvements</li>
                                                    </ul>
                                                    <div class="gap" style="line-height: 10px; height: 10px;"></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section class="container">
                <div class="row" style="padding-top: 15px;">
                    <div class="col">
                        <div class="text_sub_video"><span>INTERNATIONAL STRATEGIC SHAREHOLDERS</span></div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col">
                                <a href="#">
                                    <img src="https://www.cofico.com.vn/wp-content/uploads/2014/10/Maedalogo2.jpg">
                              <br>   <strong>Maeda Corporation</strong>
                                </a><br><a style="color: #0072bc;" href="https://www.maeda.co.jp/english.html">Website</a>

                            </div>
                            <div class="col">
                                <img src="https://www.cofico.com.vn/wp-content/uploads/2015/02/mr-obara-koichi.png" class="card-img">
                            </div>
                            <p class="sub_user">One of reasons why Maeda decided investing in COFICO is that COFICO is a reliable partner with whom Maeda can grow.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">

                        <div class="row">

                            <div class="col">
                                <a href="#">
                                    <img src="https://www.cofico.com.vn/wp-content/uploads/2014/10/Gammonlogo2.jpg">
                                </a><br><a style="color: #0072bc;" href="https://www.gammonconstruction.com/en/html/front/index.html"><strong> Gammon Construction </strong></a><br>
                                <a style="color: #0072bc;" href="https://www.gammonconstruction.com/en/html/front/index.html">Website</a>

                            </div>
                            <div class="col">
                                <img src="https://www.cofico.com.vn/wp-content/uploads/2014/10/Mr-Thomas-Ho1.jpg" class="card-img">
                            </div>
                            <p class="sub_user"><a style="color: #0072bc;" href="https://www.gammonconstruction.com/en/html/front/index.html"><strong>(Gammon Contruction is owned by Jardine Matheson Group and Balfour Beatty)</strong></a><br>COFICO is a leading Vietnamese contractor with an extensive track record of delivering high quality projects.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="hr-thin">
                        <hr>
                    </div>
                    <div class="col">
                        <div class="text_sub_video"><span>COFICO'S CORE VALUES</span></div>
                        <div class="img_cofico">
                            <a href="https://www.cofico.com.vn/tam-nhin-su-menh-gia-tri/" target="_self">
                                <img width="237" height="237" src="https://www.cofico.com.vn/wp-content/uploads/2014/10/CORE-VALUES_FINISHED11.png" class="card-img" alt="CORE-VALUES_FINISHED1"></a>
                        </div>
                        <div class="text_sub_video"><span>REPUTATION FOR HEALTH, SAFETY & ENVIRONMENT</span></div>
                        <div class="img_cofico">
                            <a href="https://www.cofico.com.vn/tam-nhin-su-menh-gia-tri/" target="_self">
                                <img width="237" height="237" src="https://www.cofico.com.vn/wp-content/uploads/ZeroHarm.jpg" class="card-img" alt="ZeroHarm"></a>
                        </div>
                        <div class="text_sub_video"><span>MODERN TECHNOLOGY</span></div>
                        <div class="img_cofico">
                            <a href="https://www.cofico.com.vn/tam-nhin-su-menh-gia-tri/" target="_self">
                                <img width="237" height="237" src="https://www.cofico.com.vn/wp-content/uploads/tech.jpg" class="card-img" alt="ZeroHarm"></a>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <div class="video_ifm">
                            <div class="text_sub_video"><span>CORPORATE VIDEO</span></div>
                            <div class="video-responsive">
                                <iframe width="350" height="220" src="https://www.youtube.com/embed/6NOw18qZFkQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    <?php elseif(ICL_LANGUAGE_CODE=='vi'): ?>
        <div class="show_mobile">
            <section class="news-home-box-mt">
                <div class="container-fluid">
                    <div class="row">
                        <?php
                        global $sitepress;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'post',
                            'paged' => $paged,
                            'post_status' => 'publish',
                            'posts_per_page'         => 1,
                            'order'      => 'DESC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms'    => ['trang-chu-block-1',]
                                ),
                            )
                        );
                        $wp_query = new WP_Query( $args );
                        //                        var_dump($wp_query);
                        while( $wp_query->have_posts() ): $wp_query->the_post();
                            ?>
                            <div class="col-md-4 item-news-home">
                                <div class="card mb-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                        }
                                        else {
                                            echo '<img src="' . get_bloginfo( 'template_directory' )
                                                . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                        }
                                        ?>
                                    </a>
                                    <div class="card-body content-box-card">
                                        <p ><a class="h4-titile-news-home" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

                                        <p class="card-text"><?php the_excerpt(); ?></p>

                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
                        <?php
                        global $sitepress;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'post',
                            'paged' => $paged,
                            'post_status' => 'publish',
                            'posts_per_page'         => 1,
                            'order'      => 'DESC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms'    => ['trang-chu-block-2',]
                                ),
                            )
                        );
                        $wp_query = new WP_Query( $args );
                        //                        var_dump($wp_query);
                        while( $wp_query->have_posts() ): $wp_query->the_post();
                            ?>
                            <div class="col-md-4 item-news-home">
                                <div class="card mb-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                        }
                                        else {
                                            echo '<img src="' . get_bloginfo( 'template_directory' )
                                                . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                        }
                                        ?>
                                    </a>
                                    <div class="card-body content-box-card">
                                        <p ><a class="h4-titile-news-home" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

                                        <p class="card-text"><?php the_excerpt(); ?></p>

                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
                        <?php
                        global $sitepress;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'post',
                            'paged' => $paged,
                            'post_status' => 'publish',
                            'posts_per_page'         => 1,
                            'order'      => 'DESC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms'    => ['trang-chu-block-3',]
                                ),
                            )
                        );
                        $wp_query = new WP_Query( $args );
                        //                        var_dump($wp_query);
                        while( $wp_query->have_posts() ): $wp_query->the_post();
                            ?>
                            <div class="col-md-4 item-news-home">
                                <div class="card mb-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                        }
                                        else {
                                            echo '<img src="' . get_bloginfo( 'template_directory' )
                                                . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                        }
                                        ?>
                                    </a>
                                    <div class="card-body content-box-card">
                                        <p ><a class="h4-titile-news-home" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                        <p class="card-text"><?php the_excerpt(); ?></p>

                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
                    </div>
                    <div class="row">
                        <?php
                        global $sitepress;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'post',
                            'paged' => $paged,
                            'post_status' => 'publish',
                            'posts_per_page'         => 1,
                            'order'      => 'DESC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms'    => ['trang-chu-block-4',]
                                ),
                            )
                        );
                        $wp_query = new WP_Query( $args );
                        //                        var_dump($wp_query);
                        while( $wp_query->have_posts() ): $wp_query->the_post();
                            ?>
                            <div class="col-md-4 item-news-home">
                                <div class="card mb-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                        }
                                        else {
                                            echo '<img src="' . get_bloginfo( 'template_directory' )
                                                . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                        }
                                        ?>
                                    </a>
                                    <div class="card-body content-box-card">
                                        <p ><a class="h4-titile-news-home" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

                                        <p class="card-text"><?php the_excerpt(); ?></p>

                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
                        <?php
                        global $sitepress;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'post',
                            'paged' => $paged,
                            'post_status' => 'publish',
                            'posts_per_page'         => 1,
                            'order'      => 'DESC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms'    => ['trang-chu-block-5',]
                                ),
                            )
                        );
                        $wp_query = new WP_Query( $args );
                        //                        var_dump($wp_query);
                        while( $wp_query->have_posts() ): $wp_query->the_post();
                            ?>
                            <div class="col-md-4 item-news-home">
                                <div class="card mb-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                        }
                                        else {
                                            echo '<img src="' . get_bloginfo( 'template_directory' )
                                                . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                        }
                                        ?>
                                    </a>
                                    <div class="card-body content-box-card">
                                        <p ><a class="h4-titile-news-home" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

                                        <p class="card-text"><?php the_excerpt(); ?></p>

                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
                        <?php
                        global $sitepress;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'post',
                            'paged' => $paged,
                            'post_status' => 'publish',
                            'posts_per_page'         => 1,
                            'order'      => 'DESC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms'    => ['trang-chu-block-6',]
                                ),
                            )
                        );
                        $wp_query = new WP_Query( $args );
                        //                        var_dump($wp_query);
                        while( $wp_query->have_posts() ): $wp_query->the_post();
                            ?>
                            <div class="col-md-4 item-news-home">
                                <div class="card mb-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                        }
                                        else {
                                            echo '<img src="' . get_bloginfo( 'template_directory' )
                                                . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                        }
                                        ?>
                                    </a>
                                    <div class="card-body content-box-card">
                                        <p ><a class="h4-titile-news-home" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                        <p class="card-text"><?php the_excerpt(); ?></p>

                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
                    </div>
                    <div class="row">
                        <?php
                        global $sitepress;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'post',
                            'paged' => $paged,
                            'post_status' => 'publish',
                            'posts_per_page'         => 1,
                            'order'      => 'DESC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms'    => ['trang-chu-block-7',]
                                ),
                            )
                        );
                        $wp_query = new WP_Query( $args );
                        //                        var_dump($wp_query);
                        while( $wp_query->have_posts() ): $wp_query->the_post();
                            ?>
                            <div class="col-md-4 item-news-home">
                                <div class="card mb-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                        }
                                        else {
                                            echo '<img src="' . get_bloginfo( 'template_directory' )
                                                . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                        }
                                        ?>
                                    </a>
                                    <div class="card-body content-box-card">
                                        <p ><a class="h4-titile-news-home" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

                                        <p class="card-text"><?php the_excerpt(); ?></p>

                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
                        <?php
                        global $sitepress;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'post',
                            'paged' => $paged,
                            'post_status' => 'publish',
                            'posts_per_page'         => 1,
                            'order'      => 'DESC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms'    => ['trang-chu-block-8',]
                                ),
                            )
                        );
                        $wp_query = new WP_Query( $args );
                        //                        var_dump($wp_query);
                        while( $wp_query->have_posts() ): $wp_query->the_post();
                            ?>
                            <div class="col-md-4 item-news-home">
                                <div class="card mb-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                        }
                                        else {
                                            echo '<img src="' . get_bloginfo( 'template_directory' )
                                                . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                        }
                                        ?>
                                    </a>
                                    <div class="card-body content-box-card">
                                        <p ><a class="h4-titile-news-home" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

                                        <p class="card-text"><?php the_excerpt(); ?></p>

                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
                        <?php
                        global $sitepress;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'post',
                            'paged' => $paged,
                            'post_status' => 'publish',
                            'posts_per_page'         => 1,
                            'order'      => 'DESC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms'    => ['trang-chu-block-9',]
                                ),
                            )
                        );
                        $wp_query = new WP_Query( $args );
                        //                        var_dump($wp_query);
                        while( $wp_query->have_posts() ): $wp_query->the_post();
                            ?>
                            <div class="col-md-4 item-news-home">
                                <div class="card mb-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('img-responsive img-box img-fluid card-img-top');
                                        }
                                        else {
                                            echo '<img src="' . get_bloginfo( 'template_directory' )
                                                . '/images/No_image_available.png" class="img-responsive img-box img-fluid" style=" height: 169px;"/>';
                                        }
                                        ?>
                                    </a>
                                    <div class="card-body content-box-card">
                                        <p ><a class="h4-titile-news-home" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                        <p class="card-text"><?php the_excerpt(); ?></p>

                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
                    </div>
                </div>
            </section>
            <section class="project-box-home-mt">
                <div class="container-fluid">
                    <h2 class="title_home_mt"> CÁC DỰ ÁN TIÊU BIỂU GẦN ĐÂY</h2>
                    <div class="border_title"></div>
                    <div class="row ">
                        <div class="owl-one owl-carousel css owl-theme">
                            <div class="item1">
                                <div class="col-md-4 list-project-item">
                                    <div class="card mb-4">
                                        <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2017/11/Casino-2.jpg">
                                        <div class="card-body content-box-card">
                                            <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/project/du-an-condotel-khu-phuc-hop-nam-hoi-an/">Khu phức hợp Nam Hội An</a></p>
                                            <p class="project-home-content">
                                                <strong>Dự Án:</strong>Condotel – Khu phức hợp Nam Hội An
                                            </p>
                                            <p class="project-home-content">
                                                <strong>Địa điểm:</strong> Hội An, Quảng Nam
                                            </p>
                                            <p class="project-home-content">
                                                <a href="<?php echo get_option('siteurl') ?>/project/du-an-condotel-khu-phuc-hop-nam-hoi-an/" class="more_duan">+ Xem Thêm...</a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="col-md-4 list-project-item">
                                    <div class="card mb-4">
                                        <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2019/08/Hoya_1-1-700x406.jpg">
                                        <div class="card-body content-box-card">
                                            <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/project/nha-may-hoya-lens/">Hoya Lens</a></p>
                                            <p class="project-home-content">
                                                <strong>Dự Án:</strong>  Nhà Máy Hoya Lens
                                            </p>
                                            <p class="project-home-content">
                                                <strong>Địa điểm:</strong> Quảng Ngãi
                                            </p>
                                            <p class="project-home-content">
                                                <a href="<?php echo get_option('siteurl') ?>/project/nha-may-hoya-lens/" class="more_duan">+ + Xem Thêm...</a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- -->
                            <div class="item1">
                                <div class="col-md-4 list-project-item">
                                    <div class="card mb-4">
                                        <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2019/08/56157726_1174695192689777_8907272635826569216_o.jpg">
                                        <div class="card-body content-box-card">
                                            <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/project/sieu-thi-go/">SIÊU THỊ GO!</a></p>
                                            <p class="project-home-content">
                                                <strong>Dự Án:</strong>  SIÊU THỊ GO! QUẢNG NGÃI
                                            </p>
                                            <p class="project-home-content">
                                                <strong>Địa điểm:</strong> Quảng Ngãi
                                            </p>
                                            <p class="project-home-content">
                                                <a href="<?php echo get_option('siteurl') ?>/project/sieu-thi-go/" class="more_duan">+ Xem Thêm...</a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="col-md-4 list-project-item">
                                    <div class="card mb-4">
                                        <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2019/08/TIR-Hinh-anh-du-an-1.jpg">
                                        <div class="card-body content-box-card">
                                            <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/project/tirol-choco-vietnam-factory/">
                                                    Tirol Choco Việt Nam</a></p>
                                            <p class="project-home-content">
                                                <strong>Dự Án:</strong>  Nhà máy Tirol Choco Việt Nam
                                            </p>
                                            <p class="project-home-content">
                                                <strong>Địa điểm:</strong>  Đồng Nai, Việt Nam
                                            </p>
                                            <p class="project-home-content">
                                                <a href="<?php echo get_option('siteurl') ?>/project/tirol-choco-vietnam-factory/" class="more_duan">+ Xem Thêm...</a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Hausneo Apartment ESTELLA HEIGHTS 2 -->
                            <div class="item1">
                                <div class="col-md-4 list-project-item">
                                    <div class="card mb-4">
                                        <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/hausneo_031.jpg">
                                        <div class="card-body content-box-card">
                                            <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/project/du-an-can-ho-hausneo/">CĂN HỘ HAUSNEO</a></p>
                                            <p class="project-home-content">
                                                <strong>Dự Án:</strong> Căn Hộ Hausneo
                                            </p>
                                            <p class="project-home-content">
                                                <strong>Địa điểm:</strong> Q.9, TP.HCM
                                            </p>
                                            <p class="project-home-content">
                                                <a href="<?php echo get_option('siteurl') ?>/project/du-an-can-ho-hausneo/" class="more_duan">+ Xem Thêm...</a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="col-md-4 list-project-item">
                                    <div class="card mb-4">
                                        <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/banner-home-21.png">
                                        <div class="card-body content-box-card">
                                            <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/project/du-an-estella-heights-2/">ESTELLA HEIGHTS 2</a></p>
                                            <p class="project-home-content">
                                                <strong>Dự Án:</strong>  Estella Heights 2
                                            </p>
                                            <p class="project-home-content">
                                                <strong>Địa điểm:</strong> Q.2, TP.HCM
                                            </p>
                                            <p class="project-home-content">
                                                <a href="<?php echo get_option('siteurl') ?>/project/du-an-estella-heights-2/" class="more_duan">+ Xem Thêm...</a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Hoya Lens-->
                            <div class="item1">
                                <div class="col-md-4 list-project-item">
                                    <div class="card mb-4">
                                        <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2015/12/Sadora03-700x394.jpg">
                                        <div class="card-body content-box-card">
                                            <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/project/sadora-condominium/">Căn Hộ Sadora</a></p>
                                            <p class="project-home-content">
                                                <strong>Dự Án:</strong>  Căn Hộ Sadora
                                            </p>
                                            <p class="project-home-content">
                                                <strong>Địa điểm:</strong> Thủ Thiêm, Quận 2, TP. Hồ Chí Minh
                                            </p>
                                            <p class="project-home-content">
                                                <a href="<?php echo get_option('siteurl') ?>/project/sadora-condominium/" class="more_duan">+ Xem Thêm...</a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="col-md-4 list-project-item">
                                    <div class="card mb-4">
                                        <img class="card-img-top" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/vistaverde.jpg">
                                        <div class="card-body content-box-card">
                                            <p class="h4-titile-project"><a href="<?php echo get_option('siteurl') ?>/project/vista-verde-residental/">
                                                    VISTA VERDE</a></p>
                                            <p class="project-home-content">
                                                <strong>Dự Án:</strong> Căn hộ Vista Verde
                                            </p>
                                            <p class="project-home-content">
                                                <strong>Địa điểm:</strong> Quận 2, TP. Hồ Chí Minh
                                            </p>
                                            <p class="project-home-content">
                                                <a href="<?php echo get_option('siteurl') ?>/project/vista-verde-residental/" class="more_duan">+ Xem Thêm...</a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section class="info_main_cofico">
                <h2 class="title_home_mt">Thông Tin Chung</h2>
                <div class="border_title"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="collapse-content-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <a role="button" data-toggle="collapse" href="#collapse11" aria-expanded="false" aria-controls="collapseOne" class="trigger collapsed">
                                            <h4 class="panel-title textuper">Thư Chủ tịch</h4>
                                        </a>
                                    </div>
                                    <div id="collapse11" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne" style="">
                                        <div class="panel-body">
                                            <div class="m-collapse-content">
                                                <div class="m-body-collapse">
                                                    <div class="wpb_wrapper">
                                                        <div class="gap" style="line-height: 15px; height: 15px;"></div>
                                                        <p><img class="card-img" src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2014/10/Mr.Xu-Thungo.jpg" alt="Mr.Xu Thungo" ></p>
                                                        <div class="gap" style="line-height: 5px; height: 5px;"></div>
                                                        <p><strong>COFICO hân hạnh chào đón các bạn!</strong></p>
                                                        <p>Hoạt động trong môi trường kinh doanh đầy cạnh tranh và biến động, COFICO vẫn không ngừng tối ưu hóa vốn tri thức, liên tục đổi mới vì sự tiến bộ không chỉ của chúng tôi, mà cao hơn nữa, là vì lợi ích của nhà đầu tư, khách hàng và cộng đồng.</p>
                                                        <p>Lịch sử thành lập và phát triển của COFICO đã ghi nhận được những thành tựu to lớn, nhưng cũng từng đối mặt với rất nhiều khó khăn thử thách. Dù trong hoàn cảnh nào, chúng tôi cũng giữ vững tinh thần, nhẫn nại và kiên quyết tiếp tục hành trình để chinh phục những tầm cao mới. Ngày nay, triết lý “chúng tôi không chỉ xây dựng các công trình mà còn xây dựng mối quan hệ tốt đẹp và bền vững” vẫn hiện hữu trong mọi hoạt động đối nội lẫn đối ngọai của COFICO.</p>
                                                        <p>Những thành tựu to lớn đó đã được xây dựng bởi toàn thể nhân viên COFICO – một tập thể đam mê với công việc, tin tưởng vào sự thăng tiến cá nhân, và luôn toàn tâm toàn ý vì sự lớn mạnh không ngừng của công ty. Tiếp đó, COFICO luôn tự hào được hợp tác với những đối tác uy tín trong và ngoài nước. Đặc biệt cổ đông chiến lược là hai tập đoàn xây dựng lớn trên thế giới là Gammon Construction (sở hữu bởi tập đòan Jardine Matheson and Balfour Beatty) và Maeda Nhật Bản. Với sự hợp tác và hỗ trợ quan trọng của họ, COFICO sẽ tiếp tục củng cố và nâng cao vị thế cạnh tranh trên thương trường.</p>
                                                        <p>Vì vậy, chúng tôi tin tưởng sâu sắc rằng, được xây dựng trên những giá trị quý báu đó, COFICO chắc chắn dần dần sẽ đạt được các chuẩn mực của một nhà thầu quốc tế, đồng thời sở hữu lợi thế thấu hiểu các yêu cầu đặc thù của thị trường địa phương. Từ đó chúng tôi sẽ tối ưu hóa các giá trị mang lại để trở thành một đối tác tin cậy, một nhà thầu chất lượng, uy tín, một nơi làm việc mong ước, và là một tổ chức có trách nhiệm cao với cộng đồng. Tổng hòa các yếu tố đó, COFICO chắc chắn sẽ trở thành một công ty xây dựng được tôn trọng nhất tại Việt Nam.</p>
                                                        <p>Đây chính là nét riêng của COFICO – Bảo tồn các giá trị cốt lõi: “Sự tôn trọng – sự tin cậy – làm việc nhóm – An toàn lao động” trong khi không ngừng đổi mới.</p>
                                                        <p>Cùng nhau hành động, chúng ta sẽ thành công!</p>
                                                        <p><strong><br>
                                                                Lê Đăng Xu <br>
                                                            </strong>Chủ tịch Hội Đồng Quản Trị&nbsp;– Chủ tịch Điều hành
                                                        </p>
                                                        <div class="gap" style="line-height: 10px; height: 10px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <a role="button" data-toggle="collapse" href="#collapse12" aria-expanded="false" aria-controls="collapseOne" class="trigger collapsed">
                                            <h4 class="panel-title textuper">Tầm nhìn, Sứ mệnh, Giá trị cốt lõi</h4>
                                        </a>
                                    </div>
                                    <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                        <div class="panel-body">
                                            <div class="m-collapse-content">
                                                <div class="m-body-collapse">
                                                    <div class="wpb_wrapper">
                                                        <div class="gap" style="line-height: 15px; height: 15px;"></div>
                                                        <p class="text-theme-color" style="padding-top: 0 !important;"><strong>Tầm nhìn</strong></p>
                                                        <p>COFICO đang từng bước thực hiện mục tiêu trở thành một trong những công ty xây dựng Việt Nam được tôn trọng hàng đầu trong nước.</p>
                                                        <p>Đạt được sự tín nhiệm của khách hàng và các đối tác kinh doanh chính là nhân tố quan trọng góp phần vào sự thành công của COFICO.</p>
                                                        <p>Không chỉ đem những điều tốt đẹp đến cho khách hàng, COFICO còn tạo ra nhiều cơ hội thành công cho đội ngũ nhân viên của mình. Mỗi nhân viên đều có thể tự hào khi làm việc tại COFICO.</p>
                                                        <p class="text-theme-color"><strong>Sứ mệnh</strong></p>
                                                        <p>Sứ mệnh của COFICO là đem lại những giải pháp và dịch vụ xây dựng tốt nhất nằm đáp những sự kỳ vọng của khách hàng, giúp khách hàng đạt được mục tiêu trong chiến lược kinh doanh lâu dài của họ.</p>
                                                        <p>Chúng tôi đánh giá sự thành công dựa trên cơ sở thành công của khách hàng và các đối tác liên quan. Sự thành công đó tất yếu phải dựa trên các yếu tố về chất lượng cao (dịch vụ với chuẩn mực quốc tế), tính an toàn tại công trường, giá thành hợp lý và các giải pháp với tiến độ thích hợp.</p>
                                                        <p class="text-theme-color"><strong>Giá trị cốt lõi</strong></p>
                                                        <p><strong>Sự Tôn Trọng</strong><br>
                                                            Tôn trọng chính quyền và cộng đồng, tôn trọng khách hàng và cổ đông tôn trọng đối tác và người lao động.
                                                        </p>
                                                        <p><strong>Sự Tin Cậy</strong><br>
                                                            Tính trung thực mang lại sự tin cậy trong mọi mối quan hệ, giao dịch, với đồng nghiệp, khách hàng, đối tác. Đây là một trong những tiêu chí hàng đầu của COFICO.
                                                        </p>
                                                        <p><strong>Làm Việc Nhóm</strong><br>
                                                            Thấu hiểu giá trị của tinh thần làm việc nhóm luôn mang lại thành công. Động viên, khuyến khích, cùng nhau hướng đến mục tiêu chung.
                                                        </p>
                                                        <p><strong>An Toàn Lao Động</strong><br>
                                                            Cung cấp một nơi làm việc đảm bảo an toàn cho tất cả các bên liên quan, khu vực lân cận và có trách nhiệm với cộng đồng, thân thiện với môi trường. Mọi rủi ro tiềm ẩn đều có thể ngăn chặn được tại mỗi dự án.
                                                        </p>
                                                        <div class="gap" style="line-height: 10px; height: 10px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--- vhcty-->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <a role="button" data-toggle="collapse" href="#collapse123" aria-expanded="false" aria-controls="collapseOne" class="trigger collapsed">
                                            <h4 class="panel-title textuper">Triết lý - Văn hóa Công ty</h4>
                                        </a>
                                    </div>
                                    <div id="collapse123" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                        <div class="panel-body">
                                            <div class="m-collapse-content">
                                                <div class="m-body-collapse">
                                                    <div class="wpb_wrapper">
                                                        <div class="gap" style="line-height: 15px; height: 15px;"></div>
                                                        <p><strong>Triết lý</strong></p>
                                                        <p>COFICO tin rằng, thành công của mọi công trình đều bắt nguồn từ một môi trường làm việc chất lượng và những cơ hội để mỗi nhân viên có thể phát huy tối đa năng lực của bản thân.</p>
                                                        <p><strong>Văn hóa</strong></p>
                                                        <p>Mọi quyết định của COFICO đều bắt đầu dựa trên sự chân thành và liêm chính. Chúng tôi khuyến khích sự giao tiếp cởi mở giữa công ty với khách hàng, các đối tác và trong nội bộ doanh nghiệp nhằm nỗ lực hướng đến các mục tiêu trong kinh doanh.</p>
                                                        <div class="gap" style="line-height: 10px; height: 10px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--- cl-->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <a role="button" data-toggle="collapse" href="#collapse124" aria-expanded="false" aria-controls="collapseOne" class="trigger collapsed">
                                            <h4 class="panel-title textuper">Chiến lược</h4>
                                        </a>
                                    </div>
                                    <div id="collapse124" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                        <div class="panel-body">
                                            <div class="m-collapse-content">
                                                <div class="m-body-collapse">
                                                    <div class="wpb_wrapper">
                                                        <div class="gap" style="line-height: 15px; height: 15px;"></div>
                                                        <p><strong>Chiến lược</strong></p>
                                                        <p>Nhằm đạt được các mục tiêu trong chiến lược dài hạn, COFICO luôn dựa trên 03 yếu tố mang tính nền tảng đối với sự phát triển của công ty:</p>
                                                        <ul>
                                                            <li>Sản phẩm chất lượng</li>
                                                            <li>Tài chính vững chắc</li>
                                                            <li>Không ngừng đổi mới</li>
                                                        </ul>
                                                        <div class="gap" style="line-height: 10px; height: 10px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container">
                <div class="row" style="padding-top: 15px;">
                    <div class="col">
                        <div class="text_sub_video"><span>CỔ ĐÔNG CHIẾN LƯỢC</span></div>
                    </div>
                </div>
                <br>
                <div class="row" >
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col">
                                <a href="#">
                                    <img src="https://www.cofico.com.vn/wp-content/uploads/2014/10/Maedalogo2.jpg">
                                 <br>  <strong>Maeda Corporation</strong>
                                </a><br><a style="color: #0072bc;" href="https://www.maeda.co.jp/english.html">Website</a>

                            </div>
                            <div class="col">
                                <img src="https://www.cofico.com.vn/wp-content/uploads/2015/02/mr-obara-koichi.png" class="card-img">
                            </div>
                            <p class="sub_user">Một trong những lý do Maeda quyết định đầu tư vào COFICO vì COFICO là một đối tác tin cậy và Maeda có thể đồng hành cùng nhau phát triển.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col">
                                <a href="#">
                                    <img src="https://www.cofico.com.vn/wp-content/uploads/2014/10/Gammonlogo2.jpg">
                                </a><br><a style="color: #0072bc;" href="https://www.gammonconstruction.com/en/html/front/index.html"><strong>Gammon Construction</strong></a><br>
                                <a style="color: #0072bc;" href="https://www.gammonconstruction.com/en/html/front/index.html">Website</a>

                            </div>
                            <div class="col">
                                <img src="https://www.cofico.com.vn/wp-content/uploads/2014/10/Mr-Thomas-Ho1.jpg" class="card-img">
                            </div>
                            <p class="sub_user"><a style="color: #0072bc;" href="https://www.gammonconstruction.com/en/html/front/index.html"><strong>(Gammon Contruction được sở hữu bởi tập đoàn Jardine Matheson and Balfour Beatty)</strong></a><br>COFICO là một nhà thầu xây dựng hàng đầu tại Việt nam với năng lực chuyên môn đã được chứng minh bằng việc hoàn thành hàng loạt dự án chất lượng cao.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="hr-thin">
                        <hr>
                    </div>
                    <div class="col">
                        <div class="text_sub_video"><span>GIÁ TRỊ CỐT LÕI CỦA COFICO</span></div>
                        <div class="img_cofico">
                            <a href="https://www.cofico.com.vn/tam-nhin-su-menh-gia-tri/" target="_self">
                                <img width="237" height="237" src="https://www.cofico.com.vn/wp-content/uploads/2014/10/CORE-VALUES_FINISHED11.png" class="card-img" alt="CORE-VALUES_FINISHED1"></a>
                        </div>
                        <div>
                            <div class="text_sub_video"><span>UY TÍN VỀ AN TOÀN, SỨC KHOẺ & MÔI TRƯỜNG</span></div>
                        </div>
                        <div class="img_cofico">

                                <img width="237" height="237" src="https://www.cofico.com.vn/wp-content/uploads/ZeroHarm.jpg" class="card-img" alt="ZeroHarm">
                        </div>
                        <div>
                            <div class="text_sub_video"><span>CÔNG NGHỆ HIỆN ĐẠI</span></div>
                        </div>
                        <div class="img_cofico">
                            <img width="350" height="250" src="https://www.cofico.com.vn/wp-content/uploads/tech.jpg" class="card-img" alt="CORE-VALUES_FINISHED1">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <div class="video_ifm">
                            <div class="text_sub_video"><span>CORPORATE VIDEO</span></div>
                            <div class="video-responsive">
                                <iframe width="350" height="220" src="https://www.youtube.com/embed/6NOw18qZFkQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <?php endif; ?>

    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                loop: true,
                items:4,
                margin: 20,
                autoplay: true,
                slideTransition: 'linear',
                autoplayTimeout: 2000,
                autoplaySpeed: 2000,
                autoplayHoverPause: false,
                responsiveClass:true,
                responsive:{
                    320:{
                        items:2,
                        nav:false
                    },
                    475:{
                        items:3,
                        nav:false
                    },
                    700:{
                        items:4,
                        nav:false
                    },
                }
            });
        })

    </script>
    <?php get_footer(); ?>
    <!-- !is home page-->
<?php elseif(!is_home()): ?>
    <?php get_header(); ?>
    <main role="main">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php the_content(); ?>
            </article>
            <!-- /article -->
        <?php endwhile; ?>
        <?php else: ?>
            <!-- article -->
            <article>
                <div class="row">
                    <div class="center_text_home container">
                        <h2>OOPS! THAT PAGE CAN’T BE FOUND.</h2>
                        <p>It looks like nothing was found at this location. Maybe try to use a search?</p>
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </article>
            <!-- /article -->
        <?php endif; ?>
        <!-- /section -->
    </main>

    <?php get_footer(); ?>
<?php endif; ?>