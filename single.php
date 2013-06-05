<?php get_header(); ?>

<div class="row">
  <div class="span8">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><?php the_title(); ?></h2>

    <?php the_content(); ?>

    <hr />
    <p>Posted: <?php the_time('l, F jS, Y'); ?></p>
    <p>Categories: <?php the_category(", "); ?></p>
    <p><?php the_tags(); ?></p>
    <hr />

    <nav class="pagination pagination-centered">
      <ul>
        <li><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link' ) . '</span> %title' ); ?></li>
        <li><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link' ) . '</span>' ); ?></li>
      </ul>
    </nav>

    <hr />

    <?php comments_template(); ?>

  <?php endwhile; else: ?>
    <p><?php _e('Sorry, this page does not exist.'); ?></p>
  <?php endif; ?>

  </div>
  <div class="span4">
  <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
