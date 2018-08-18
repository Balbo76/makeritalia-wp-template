<div class="row">

    <div id="comments" class="comments">

    <?php if ( post_password_required() ) : ?>
        <p><?php esc_html_e( 'Post is password protected. Enter the password to view any comments.', 'html5blank' ); ?></p>
    </div>

    <?php return; endif; ?>

    <?php if ( have_comments() ) : ?>

        <h2><?php comments_number(); ?></h2>

        <ul>
            <?php wp_list_comments( 'type=comment&callback=html5blankcomments' ); // Custom callback in functions.php. ?>
        </ul>

    <?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

        <p><?php esc_html_e( 'Comments are closed here.', 'html5blank' ); ?></p>

    <?php endif; ?>

    <?php
        comment_form(array(
                "comment_field" => '<div class="form-group"><textarea class="form-control" placeholder="* Commento ..." id="comment" name="comment" required cols="45" rows="8" aria-required="true"></textarea></div>',
                "fields" => array(
                    "author" =>     '<div class="form-group">' . '<input class="form-control" placeholder="* Nome"     id="author" name="author" required  type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req .         ' />' . '</div>',
                    "email" =>      '<div class="form-group">' . '<input class="form-control" placeholder="* Email"    id="email"  name="email"  required  type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req .  ' />' . '</div>',
                    'url' =>        '<div class="form-group">' . '<input class="form-control" placeholder="Sito Web" id="url"    name="url"      type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" />' . '</div>'
                ),
                "class_submit" => "btn btn-primary"
        ));
    ?>

</div>


</div>
