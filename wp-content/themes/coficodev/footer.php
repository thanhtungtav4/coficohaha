<!-- Back to top button -->
<a id="button"></a>
<div class="hide_is_home">
<?php // require get_template_directory() . '/list-du-an-mobile.php';?>
</div>
<!-- footer is show all page -->
<section class="win">
    <div class="container-fluid">
        <h2 class="title_home_mt mt-list-active-sider">  <?php if(ICL_LANGUAGE_CODE=='en'): ?> CLIENTS & PARTNERS  <?php elseif(ICL_LANGUAGE_CODE=='vi'): ?>  ĐỐI TÁC & KHÁCH HÀNG <?php endif; ?> </h2>
        <div class="border_title"></div>
        <div class="row">
            <div class="owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-2695px, 0px, 0px); transition: all 0.25s ease 0s; width: 5880px;">
                        <?php
                        global $sitepress;
                        $args = array(
                            'post_type' => 'lshowcase',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'lshowcase-categories',
                                    'field'    => 'slug',
                                    'terms'    => ['khach-hang']
                                ),
                            )
                        );
                        $wp_query = new WP_Query( $args );
                        while( $wp_query->have_posts() ): $wp_query->the_post();
                            ?>
                            <div class="owl-item">
                                <div class="item">
                                    <?php the_post_thumbnail('img-responsive'); ?>
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
   <!-- is home-->
    <section class="win">
        <div class="container-fluid">
            <h2 class="title_home_mt mt-list-active-sider">  <?php if(ICL_LANGUAGE_CODE=='en'): ?> AWARDS & RECOGNITION <?php elseif(ICL_LANGUAGE_CODE=='vi'): ?> GIẢI THƯỞNG & CHỨNG NHẬN <?php endif; ?> </h2>
            <div class="border_title"></div>
            <div class="row">
                <div class="owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-2695px, 0px, 0px); transition: all 0.25s ease 0s; width: 5880px;">
                            <?php
                            global $sitepress;
                            $args = array(
                                'post_type' => 'lshowcase',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'lshowcase-categories',
                                        'field'    => 'slug',
                                        'terms'    => ['thanh-tuu','thanh-tuu-eng',]
                                    ),
                                )
                            );
                            $wp_query = new WP_Query( $args );
                            //         var_dump($wp_query);
                            while( $wp_query->have_posts() ): $wp_query->the_post();
                                ?>
                                <div class="owl-item">
                                    <div class="item">
                                        <?php the_post_thumbnail('img-responsive'); ?>
                                        <p><?php the_title(); ?></p>
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
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                loop: true,
                items:4,
                margin: 10,
                autoplay: true,
                slideTransition: 'linear',
                autoplayTimeout: 6000,
                autoplaySpeed: 6000,
                autoplayHoverPause: false,
                responsiveClass:true,
                responsive:{
                    320:{
                        items:2,
                        nav:false
                    },
                    475:{
                        items:2,
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
<!-- end footer-->
<section class="footer_mobile hide_mobile">
    <div class="container footer_bg_copy">
        <div class="">
            <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="info_footer">
                           
                            <div class="list_item_footer padding_f1"><a href="https://www.cofico.com.vn/en/tuyen-dung/">RECRUITMENT</a>  <a href="https://www.cofico.com.vn/en/van-ban-phap-luat/">DOCUMENTS</a><a href="https://www.cofico.com.vn/en/sitemap/">SITE MAP</a>  <a href="https://outlook.office365.com/">WEB MAIL</a> <a href="https://www.cofico.com.vn/en/lien-he/">CONTACT</a>
                                <a style="margin: 10px" class="none_mobile"><i class="far fa-chart-bar fa-2x"></i> <?php echo do_shortcode('[srs_total_visitors]'); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 none_mobile">
                        <div class="info_footer none_mobile">
                             <div class="list_item_footer none_mobile">
                                <div class="view_footer">
                                    <div class="row">
                                        <div class="col-md-8 footer_dang-ky"> <?php echo '<div class="subscribe-form">'.do_shortcode('[contact-form-7 id="7760" title="Subscribe"]').'</div>'; ?></div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            <?php elseif(ICL_LANGUAGE_CODE=='vi'): ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="info_footer">
                          
                            <div class="list_item_footer padding_f1"><a href="https://www.cofico.com.vn/tuyen-dung/">TUYỂN DỤNG</a>  <a href="https://www.cofico.com.vn/van-ban-phap-luat/">VĂN BẢN</a><a href="https://www.cofico.com.vn/sitemap/">SITE MAP</a>  <a href="https://outlook.office365.com/">WEB MAIL</a> <a href="https://www.cofico.com.vn/lien-he/">LIÊN HỆ</a>
                                <a style="margin: 10px" class="none_mobile"><i class="far fa-chart-bar fa-2x"></i> <?php echo do_shortcode('[srs_total_visitors]'); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 none_mobile">
                        <div class="info_footer">
                           
                            <div class="list_item_footer">
                                <div class="view_footer">
                                   <div class="row">
                                       <div class="col-md-8 footer_dang-ky"> <?php echo '<div class="subscribe-form">'.do_shortcode('[contact-form-7 id="7760" title="Subscribe"]').'</div>'; ?></div>
                                   </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
     </div>
    <?php if(ICL_LANGUAGE_CODE=='vi'): ?>
    <div class="footer_copyright">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="copy_box" style="text-align: center">© 2015 Công ty COFICO. Nhãn hiệu và thương hiệu là tài sản riêng của chủ sở hữu. </p>
                </div>
            </div>
        </div>
 </div>
    <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
        <div class="footer_copyright">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="copy_box" style="text-align: center">© 2015 COFICO Company. Trademarks and brands are the property of their respective owners.</p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>
<?php if(ICL_LANGUAGE_CODE=='en'): ?>
    <section class="show_mobile">
        <section class="footer-mt-mobile">
            <div class="container-fluid">
                <div class="footer_link">
                    <div class="hr-border">
                        <ul class="">
                            <li><a href="https://www.cofico.com.vn/en/tuyen-dung/">RECRUITMENT</a></li>
                            <li><a href="https://www.cofico.com.vn/en/van-ban-phap-luat/">DOCUMENTS</a></li>
                            <li><a href="https://www.cofico.com.vn/en/sitemap/">SITE MAP</a></li>
                            <li><a href="https://outlook.office365.com">WEB MAIL</a></li>
                            <li><a href="https://www.cofico.com.vn/en/lien-he/">CONTACT</a></li>
                        </ul>
                        <ul class="right_footer">
                            <li><a href="#"> VIEW: <?php echo do_shortcode('[srs_total_visitors]'); ?></a></li>
                        </ul>
                    </div>
                    <div class="footer_copyright-mt">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <p class="copy_box" style="text-align: center">© 2015 COFICO Company.<br> Trademarks and brands are the property of their respective owners.. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </section>
<?php elseif(ICL_LANGUAGE_CODE=='vi'): ?>
<section class="show_mobile">
    <section class="footer-mt-mobile">
        <div class="container-fluid">
            <div class="footer_link">
                <div class="hr-border">
                    <ul class="">
                        <li><a href="https://www.cofico.com.vn/tuyen-dung/">TUYỂN DỤNG</a></li>
                        <li><a href="https://www.cofico.com.vn/van-ban-phap-luat/">VĂN BẢN</a></li>
                        <li><a href="https://www.cofico.com.vn/sitemap/">SITE MAP</a></li>
                        <li><a href="https://outlook.office365.com">WEB MAIL</a></li>
                        <li><a href="https://www.cofico.com.vn/lien-he">LIÊN HỆ</a></li>
                    </ul>
                    <ul class="right_footer">
                        <li><a href="#"> Lượt Xem: <?php echo do_shortcode('[srs_total_visitors]'); ?></a></li>
                    </ul>
                </div>
                <div class="footer_copyright-mt">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <p class="copy_box" style="text-align: center">© 2015 Công ty COFICO.<br> Nhãn hiệu và thương hiệu là tài sản riêng của chủ sở hữu. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</section>
<?php endif; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/owl.carousel.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/ekko-lightbox.js"></script>
<script>
	$(window).on('resize', function () {
    $('.fixed-top1').toggleClass('fixed-top', $(window).width() < 900);
});
</script>
<script>
    $(".btn-group, .dropdown").hover(
        function () {
            $('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
            $(this).addClass('open');
        },
        function () {
            $('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
            $(this).removeClass('open');
        });
    var btn = $('#button');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });
</script>
<!--mr phu-->
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/hiraku/hiraku.js"></script>
<script>
    $(document).ready(function() {
        $('.search-bar').hide();
        $('.icon-search').click(function(){
            $('.search-bar').toggle(500);
        });
        // $( ".button-offcavas" ).click(function() {
        //   $( ".offcanvas-collapse" ).toggleClass( "openNav" );
        //   $( "body" ).toggleClass( "closeNav" );
        // });
    })

    $(".offcanvas-collapse").hiraku({
        btn: ".button-offcavas",
        fixedHeader: "header",
        direction: "right",
        breakpoint: 767
    });
    $(document).ready(function() {
        $('.navbar a.dropdown-toggle').on('click', function(e) {
            var $el = $(this);
            var $parent = $(this).offsetParent(".dropdown-menu");
            $(this).parent("li").toggleClass('open');
            if(!$parent.parent().hasClass('nav')) {
                $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
            }
            $('.nav li.open').not($(this).parents("li")).removeClass("open");
            return false;
        });
    });
</script>
<?php if( is_front_page() && is_home() ) { ?>
<?php } else { ?>
    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 1300,
                autoplayHoverPause: true
            });
        })
    </script>
    <script>
        $('.owl-one').owlCarousel({
            loop:true,
            margin:10,
            video:false,
            nav:true,
            lazyLoad:true,
            autoplay:false,
            autoplayTimeout:false,
            autoplayHoverPause:false,
            items:1,
            navText: ["<i class=\"fas fa-chevron-left\"></i>","<i class=\"fas fa-chevron-right\"></i>"],
			 responsiveClass:true,
                responsive:{
                    420:{
                        items:1,
                    
                    },
                    700:{
                        items:2,
                       
                    },
                    900:{
                        items:2,
                       
                    },
                }
        })
    </script>

<?php } ?>
<?php wp_footer()?>

</body>
</html>
<!--       _
       .__(.)< (MEOW)
        \___)
 ~~~~~~~~~~~~~~~~~~-->