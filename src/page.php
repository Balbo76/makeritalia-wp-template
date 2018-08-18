<?php
get_header();
?>
<div class="container shadow-sm bg-white content">

    <div class="row">
        <div class="col-md-12">
            <h1 class="title">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10">

            <main role="main" aria-label="Content">
                <!-- section -->
                <section>



                <?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

                    <!-- article -->
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <?php the_content(); ?>

                        <?php comments_template( '', true ); // Remove if you don't want comments. ?>

                        <br class="clear">

                        <?php edit_post_link(); ?>

                    </article>
                    <!-- /article -->

                <?php endwhile; ?>

                <?php else : ?>

                    <!-- article -->
                    <article>

                        <h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                    </article>
                    <!-- /article -->

                <?php endif; ?>

                </section>
                <!-- /section -->
            </main>

        </div>
        <div class="col-md-2">

            <?php get_sidebar(); ?>

        </div>
    </div>

<?php get_footer(); ?>
