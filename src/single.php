<?php get_header(); ?>


        <div class="row">

            <div class="col-md-12">
                <span class="date">
                    <time datetime="<?php the_time( 'Y-m-d' ); ?> <?php the_time( 'H:i' ); ?>">
                        <?php the_date("d M Y"); ?> <?php the_time(); ?>
                    </time>
                </span>
                <span class="author"><?php esc_html_e( 'by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span> -
                <span class="comments"><?php if ( comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' ) ); ?></span>
            </div>

            <div class="col-md-12">

                <h1>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </h1>

            </div>
        </div>

        <div class="row">
            <div class="col-md-8">

                <main role="main" aria-label="Content">
                    <!-- section -->
                    <section>

                        <?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

                            <!-- article -->
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                <!-- post thumbnail -->
                                <?php if ( has_post_thumbnail() ) : // Check if Thumbnail exists. ?>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                        <img src="<?php echo the_post_thumbnail_url( 'medium_large' );?>" class="post-thumb" />
                                    </a>
                                <?php endif; ?>
                                <!-- /post thumbnail -->


                                <?php the_content(); // Dynamic Content. ?>

                                <?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>' ); // Separated by commas with a line break at the end. ?>

                                <p><?php esc_html_e( 'Categorised in: ', 'html5blank' ); the_category( ', ' ); // Separated by commas. ?></p>

                                <p><?php esc_html_e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

                                <?php edit_post_link(); // Always handy to have Edit Post Links available. ?>

                                <?php comments_template(); ?>

                            </article>


                        <?php endwhile; ?>

                        <?php else : ?>


                            <article>

                                <h1><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

                            </article>


                        <?php endif; ?>

                    </section>

                </main>

            </div>
            <div class="col-md-4">

                <?php get_sidebar(); ?>

            </div>
        </div>

    <?php get_footer(); ?>
