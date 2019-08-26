<?php get_header() ?>
    <div class="container">
        <main role="main">
            <div class="row">
                <?php get_sidebar(); ?>
                <div class="col-md-9">
                    <section>

                        <?php get_template_part('loop'); ?>

                        <?php get_template_part('pagination'); ?>

                    </section>
                </div>
            </div>
        </main>
    </div>
<?php get_footer() ?>