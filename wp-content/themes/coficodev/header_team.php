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
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/lightbox.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="<?php bloginfo('template_directory') ?>/js/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>
<body>
<header class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
       <a class="navbar-brand" href="  <?php if(ICL_LANGUAGE_CODE=='vi'): ?>
            <?php echo get_option('siteurl') ?>/
             <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
             <?php echo get_option('siteurl') ?>/en
                     <?php endif; ?>"><img src="<?php bloginfo('template_directory') ?>/images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNavDropdown" class="navbar-collapse collapse">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav">
                <li>
                    <div class="input-group md-form form-sm form-2 pl-0">
                        <?php get_search_form(); ?>
                    </div>
                </li>
                <li class="nav-item dropdown langdes">
                    <?php do_action('icl_language_selector'); ?>
                </li>

            </ul>
            <?php  require get_template_directory() . '/menu-phone.php';?>


        </div>

    </nav>
</header>
<section>
    <div class="row title_team_box">
        <div class="col"><h1 class="info_text" style="text-align: center" ><?php the_title(); ?></h1></div>
    </div>
</section>
<section class="menu_top_2">
    <header>
        <nav id="navigation" class="wf-td">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'my-custom-menu',
            'container_class' => 'custom-menu-class' ) );
        ?>
        </nav>
    </header>
</section>

