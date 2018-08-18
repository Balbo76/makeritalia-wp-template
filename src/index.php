<?php get_header(); ?>

    <div class="container shadow-sm bg-white content">

        <div class="row">
            <div class="col-lg-10">

                <main role="main" aria-label="Content">
                    <!-- section -->
                    <section>

                        <!--<h1><?php esc_html_e( 'Latest Posts', 'html5blank' ); ?></h1>-->

                        <?php get_template_part( 'loop' ); ?>

                        <?php get_template_part( 'pagination' ); ?>

                    </section>
                    <!-- /section -->
                </main>

            </div>
            <div class="col-lg-2">

                <?php get_sidebar(); ?>

            </div>
        </div>

    <?php get_footer(); ?>
