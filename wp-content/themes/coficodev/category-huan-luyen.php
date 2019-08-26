<?php get_header(); ?>
<section class="main-content container padding30">

    <div class="row">
        <div class="col-md-8">
            <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                <h2 class="info_text">TRAINING</h2>
                <div class="wpb_wrapper">
                    Aiming at building COFICO as a Learning organization, Training is considered one of COFICO’s top priorities.<p></p>
                    <div class="gap" style="line-height: 10px; height: 10px;"></div>
                    <p>Besides investing in a large-scaled Professional Training Center in Vietnam, COFICO has its human resources engage in practical training programs in developed countries, available via the tight cooperation between COFICO and large international construction corporations such as Gammon Hong Kong, Maeda Japan. Over such programs, COFICO has accessed to and continuously update the most modern implementation and project managment technologies.</p>
                    <div class="gap" style="line-height: 10px; height: 10px;"></div>
                    <p>Zero-harm training programs, applications of technologies and new materials are designed for not only for COFICO’s internal training but also human resources of the frequent sub-contractors system. The programs areinstructed by high-level experts of COFICO and international corporations such as Japan Pile, Hirose, Holcim, Maeda, Gammon, etc. They practically reduce risks&amp; work accidents, improve work efficiency, ensures quality of the construction works, and deliverscustomers’ satisfactions, etc.</p>
                    <div class="gap" style="line-height: 10px; height: 10px;"></div>

                </div>

            <?php elseif(ICL_LANGUAGE_CODE=='vi'): ?>
                <h2 class="info_text">Huấn Luyện</h2>
                <div class="wpb_wrapper">
                    Nhằm xây dựng COFICO trở thành doanh nghiệp không ngừng học hỏi, Huấn luyện là một trong những hoạt động được quan tâm hàng đầu tại COFICO.<p></p>
                    <div class="gap" style="line-height: 10px; height: 10px;"></div>
                    <p>Ngoài việc đầu tư một Trung tâm huấn luyện quy mô lớn và chuyên nghiệp tại Việt Nam, COFICO còn cho phép đội ngũ nhân sự đến tham gia các chương trình huấn luyện thực tế tại các dự án của các nước phát triển nhờ sự hợp tác chặt chẽ với các tập đoàn xây dựng lớn trên thế giới như Gammon Hong Kong, Maeda Nhật Bản. Qua đó COFICO đã tiếp cận và liên tục cập nhật được các công nghệ thi công, công nghệ quản lý dự án tiên tiến nhất.</p>
                    <div class="gap" style="line-height: 10px; height: 10px;"></div>
                    <p>– Các chương trình huấn luyện zero harm, đào tạo, ứng dụng các công nghệ, vật liệu mới không chỉ cho nội bộ COFICO mà còn cho cả nhân lực của hệ thống thầu phụ được thường xuyên thực hiện bởi các chuyên gia cấp cao của COFICO và các chuyên gia đên từ các tập đòan quốc tế như Japan Pile, Hirose, Holcim, Maeda, Gammon,…. đã mang lại hiệu quả thiết thực giảm thiểu các rủi ro, tai nạn lao động, nâng cao hiệu suất làm việc, đảm bảo chất lượng công trình, mang lại sự hài lòng cho khách hàng,…</p>
                    <div class="gap" style="line-height: 10px; height: 10px;"></div>

                </div>
            <?php endif; ?>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="media-container-row">
                            <div class="mbr-figure" style="width: 40%;">
                                <img src="<?php echo get_option('siteurl') ?>/wp-content/uploads/2019/01/backdrop-sna-khau-011.jpg" alt="Mobirise" media-simple="true" height="160" width="auto">
                            </div>
                            <div class="media-content">
                                <div class="mbr-section-text">
                                    <p class="mbr-text mb-0 mbr-fonts-style display-7">
                                        <strong>Make your own website in a few clicks!</strong> Mobirise helps you cut down development time by providing you with a flexible website editor with a drag and drop interface. Mobirise Website Builder creates responsive, retina and <em>mobile friendly websites</em> in a few clicks. Mobirise is one of the easiest website development tools available today.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php  require get_template_directory() . '/sidebar_news.php';?>
    </div>
</section>

</main>
<?php get_footer(); ?>
