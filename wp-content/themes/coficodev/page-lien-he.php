<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="icon" href="<?php bloginfo('url') ?>/wp-content/uploads/2014/10/favicon.png" type="image/png" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/main.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/ekko-lightbox.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/all.css">
    <script src="<?php bloginfo('template_directory') ?>/js/jquery.min.js"></script>
    <!--is style-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/js/hiraku/hiraku.css" >
    <!--is style-->
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="container-fuild width-99">
        <div class="row">
            <div class="search-bar col-12 col-lg-12 col-md-12 col-sm-12">
                    <?php get_search_form(); ?>
            </div>
        </div>
    </div>
    <div class="container-fuild width-99 padd-lr">
        <div class="row">
            <div class="col-lg-11 col-md-10 col-sm-9 col-8 hide_600">
                <a class="navbar-brand float-left" href="<?php if(ICL_LANGUAGE_CODE=='vi'): ?><?php echo get_option('siteurl') ?>/<?php elseif(ICL_LANGUAGE_CODE=='en'): ?><?php echo get_option('siteurl') ?>/en
             <?php endif; ?>"><img src="https://cofico.com.vn/wp-content/uploads/cofico-logo-1975.png" width="204" alt="COFICO"></a>
                <span class="build-txt">Building A Better Future</span>
            </div>
            <div class="col-lg-11 col-md-10 col-sm-9 col-8 show_600 left-logo">
                <a class="navbar-brand float-left" href="<?php if(ICL_LANGUAGE_CODE=='vi'): ?><?php echo get_option('siteurl') ?>/<?php elseif(ICL_LANGUAGE_CODE=='en'): ?><?php echo get_option('siteurl') ?>/en
             <?php endif; ?>"><img src="https://cofico.com.vn/wp-content/uploads/cofico-logo-add.png" width="173"  alt="COFICO"></a>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-4 user-lang-mt">
                <div class="row">
                    <div class="col-4 hide_mobile">
                        <?php do_action('icl_language_selector'); ?>
                    </div>
                    <div class="col-4 hide_mobile">

                        <img class="icon-search" src="<?php bloginfo('template_directory') ?>/images/search.png">
                    </div>
                    <div class="col show_mobile nav-bar">
                        <button class="navbar-toggler button-offcavas" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu-toggle-grippy"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light mt-menu-1 ">
        <div class="navbar-collapse offcanvas-collapse mt-menu" >
            <?php
            wp_nav_menu( array(
                'theme_location' => 'my-custom-menu',
                'container_class' => 'custom-menu-class' ) );
            ?>
            <div class="show_mobile mt-lang">
                    <?php do_action('icl_language_selector'); ?>
            </div>
            <div class="show_mobile searchform-mt">
                <?php get_search_form() ?>
            </div>

        </div>
    </nav>
</header>
<section>
    <div class="row">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.511182989742!2d106.67807621411639!3d10.772105462220672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f422148b433%3A0x6cfa75d049afa95!2zQ8O0bmcgVHkgQ-G7lSBQaOG6p24gWMOieSBE4buxbmcgU-G7kSAx!5e0!3m2!1sen!2s!4v1561721281754!5m2!1sen!2s" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</section>
 <main role="main">
        <!-- section -->
        <section>

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php the_content(); ?>

                    <?php comments_template( '', true ); // Remove if you don't want comments ?>

                    <br class="clear">

                </article>
                <!-- /article -->

            <?php endwhile; ?>

            <?php else: ?>

                <!-- article -->
                <article>

                    <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                </article>
                <!-- /article -->

            <?php endif; ?>

        </section>
        <!-- /section -->
    </main>


<?php get_footer(); ?>
