<div class="card-columns">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <div class="card shadow-sm">
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="card-header">
            <small class="date">
                <time datetime="<?php the_time( 'Y-m-d' ); ?> <?php the_time( 'd-m-Y H:i' ); ?>">
                    <i class="fas fa-calendar-alt"></i>&nbsp;<?php the_date(); ?> <?php the_time(); ?>
                </time>
            </small>
            <h2 class="title">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            </h2>

        </div>

        <div class="card-body">
            <!-- post thumbnail -->
            <?php if ( has_post_thumbnail() ) : // Check if thumbnail exists. ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail( array( 60, 120 ), array("class" => "card-img-top") ); // Declare pixel size you need inside the array. ?>
                </a>
            <?php endif; ?>

            <?php the_excerpt(); // html5wp_excerpt( 'html5wp_index' ); // Build your custom callback length in functions.php. ?>



        </div>

       <div class="card-footer">
           <small class="author"><?php esc_html_e( 'by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></small><br />
           <span class="comments"><?php if ( comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' ) ); ?></span>
           <?php edit_post_link(); ?>
       </div>

	</article>
	<!-- /article -->
    </div>

<?php endwhile; ?>

<?php else : ?>

	<!-- article -->
	<article>
		<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
</div>