<?php
if ( post_password_required() )
  return;
?>

<div id="comments" class="comments-area">

  <?php // You can start editing here -- including this comment! ?>

  <?php if ( have_comments() ) : ?>
    <h3 class="comments-title">
      <?php
        printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'lonbrew-wp' ),
          number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
      ?>
    </h3>

    <ol class="commentlist">
      <?php wp_list_comments( array( 'callback' => 'twentytwelve_comment', 'style' => 'ol' ) ); ?>
    </ol>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
      <hr />
      <nav class="pagination pagination-centered">
        <ul>
          <li><?php previous_comments_link( __( '&larr; Older Comments', 'lonbrew-wp' ) ); ?></li>
          <li><?php next_comments_link( __( 'Newer Comments &rarr;', 'lonbrew-wp' ) ); ?></li>
        </ul>
      </nav>
      <hr />
    <?php endif; ?>

    <?php if ( ! comments_open() && get_comments_number() ) : ?>
      <p class="nocomments"><?php _e( 'Comments are closed.' , 'lonbrew-wp' ); ?></p>
    <?php endif; ?>

  <?php endif; // have_comments() ?>

  <?php comment_form(); ?>

</div><!-- #comments .comments-area -->
