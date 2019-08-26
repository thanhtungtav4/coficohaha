<?php  get_header()?>
    <section class="main-content container padding30">
        <?php if(ICL_LANGUAGE_CODE=='en'): ?>
            <h2 class="info_text">
                NEWS</h2>

        <?php elseif(ICL_LANGUAGE_CODE=='vi'): ?>
        <h2 class="info_text">TIN TỨC</h2>
        <?php endif; ?></a>
    <div class="row">
    <div class="col-md-8">
    <div class="container" id="post">
    <div class="post-wrap">
        <?php
        global $sitepress;
		 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'post',
			'paged' => $paged,
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => ['tin-du-an','tin-du-an-en-en','hinh-anh-thi-cong-tai-cong-trinh', 'hinh-anh-thi-cong-tai-cong-trinh-en',
                       'huan-luyen-1', 'huan-luyen-1-en','huan-luyen','huan-luyen-en','huan-luyen-ben-ngoai-en','huan-luyen-noi-bo-en',
                        'trung-tam-huan-luyen-en','thong-tin-co-dong','thong-tin-co-dong-en','thong-tin-co-dong-en-en','thu-doi-tac',
                        'thu-doi-tac-en','tin-tuc', 'tin-tuc-en','tin-an-toan','tin-an-toan-vi-en','tin-co-dong-en-en','tin-cong-dong-en',
                        'tin-cong-ty-en-en','tin-du-an-en-en','tin-tu-thien-en-en','trade-union-news','zero-harm-en-en','Not available	trang-chu-block-1',
                        'trang-chu-block-1-en','trang-chu-block-2','trang-chu-block-2-en','trang-chu-block-3','trang-chu-block-3-en',
                        ]
                ),
            )
        );
        $wp_query = new WP_Query( $args );
        //                        var_dump($wp_query);
        while( $wp_query->have_posts() ): $wp_query->the_post();
            ?>
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
        <?php
        endwhile;
        ?>
    </div>
    </div>
    </div>
    <?php  require get_template_directory() . '/sidebar_news.php';?>
        <?php get_template_part('pagination'); ?>
    </div>
    </section>

<?php get_footer(); ?>