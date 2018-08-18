<?php
    get_header();
?>
<div class="container shadow-sm bg-white content">

    <div class="row">
        <div class="col-md-12">
            <span class="date">
                <time datetime="<?php the_time( 'Y-m-d' ); ?> <?php the_time( 'H:i' ); ?>">
                    <i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;<?php the_date("d M Y"); ?> <?php the_time(); ?>
                </time>
            </span>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12" >
            <h1 class="title">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            </h1>
            <?php
                $excerpt = '';
                if (has_excerpt()) {
                    $excerpt = "<h3>".wp_strip_all_tags(get_the_excerpt())."</h3>";
                }
                echo $excerpt;
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <?php if ( has_post_thumbnail() ) { ?>
                <div class="row single-thumbs shadow-sm">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <img src="<?php echo the_post_thumbnail_url( 'medium' ); ?>" class="single-thumbs" />
                    </div>
                    <div class="col-md-2"></div>
                </div>
            <?php } ?>
            <main role="main" aria-label="Content">
                <section>
                    <?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
                        <span class="author"><?=get_avatar( get_the_author_meta("ID") , 128 ); ?><?php esc_html_e( 'by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span> -
                        <span class="comments"><?php if ( comments_open( get_the_ID() ) ) comments_popup_link( __( 'Commenta', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' ) ); ?></span>
                        <br />
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <?php echo get_the_content();  ?>
                            <hr />
                            <?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>' ); ?>
                            <p><?php esc_html_e( 'Categorised in: ', 'html5blank' ); the_category( ', ' ); ?></p>
                            <p><?php esc_html_e( 'by ', 'html5blank' ); the_author(); ?></p>
                            <?php edit_post_link(); ?>
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
        <div class="col-lg-4">
            <?php get_sidebar(); ?>
        </div>
    </div>

    <?php get_footer(); ?>
