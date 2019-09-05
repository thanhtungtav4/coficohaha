<?php  get_header()?>
    <section class="container">
		         <!-- Nav pills -->
        <?php if(ICL_LANGUAGE_CODE=='en'): ?>
            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item">
                    <a class="nav-link " href="https://www.cofico.com.vn/du-an/du-an-tieu-bieu/">View all</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.cofico.com.vn/du-an/khu-dan-cu-can-ho/">Residential & Condominium</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://www.cofico.com.vn/en/du-an/khu-phuc-hop/">Office & Complex Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.cofico.com.vn/en/du-an/khach-san/">Hotels & Resorts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.cofico.com.vn/en/du-an/du-an-nha-may">Factories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.cofico.com.vn/en/du-an/benh-vien/">Hospitals & Schools</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.cofico.com.vn/en/du-an/san-bay/">Airports & Bridges</a>
                </li>
            </ul>
        <?php elseif(ICL_LANGUAGE_CODE=='vi'): ?>
            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.cofico.com.vn/du-an/du-an-tieu-bieu/">Tiêu Biểu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.cofico.com.vn/du-an/khu-dan-cu-can-ho/">Khu dân cư & Căn hộ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://www.cofico.com.vn/du-an/khu-phuc-hop/">Văn phòng & Khu phức hợp</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.cofico.com.vn/du-an/khach-san/">Khách sạn & Resort</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.cofico.com.vn/du-an/du-an-nha-may">Nhà máy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.cofico.com.vn/du-an/benh-vien/">Bệnh viện & Trường học</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.cofico.com.vn/du-an/san-bay/">Sân bay & Cầu cảng</a>
                </li>
            </ul>

        <?php endif; ?>


        <!-- Tab panes -->
        <div>
<!-- Tab panes -->
            <div class="tab-content">
                <div id="home" class="tab-pane active">
                    <br>
                    <div>
                        <div class="row">
                            <?php
                            global $sitepress;
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                                'post_type' => 'dt_portfolio',
								 'paged' => $paged,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'dt_portfolio_category',
                                        'field'    => 'slug',
                                        'terms'    => ['van-phong-va-khu-phuc-hop','office-complex-projects-en']
                                    ),
                                )
                            );
                            $wp_query = new WP_Query( $args );
                            //                        var_dump($wp_query);
                            while( $wp_query->have_posts() ): $wp_query->the_post();
                                ?>
                                <div class="col-md-3">
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

                                            <p> <?php $attachment = &get_post( $id );
                                                echo $attachment->post_excerpt;
                                                ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                            ?>
                        </div>
                        <?php get_template_part('pagination'); ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
<?php get_footer(); ?>