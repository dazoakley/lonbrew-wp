<?php get_header(); ?>

<div class="row">
  <div class="span8">
    <hr />
    <h4>Category Archive: <?php wp_title("",true); ?></h4>
    <hr />

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p>
        Posted <em><?php the_time('l, F jS, Y'); ?></em>, in <?php the_category(", "); ?>.
      </p>
      <hr />

    <?php endwhile; ?>

      <?php bootstrap_pagination(); ?>

    <?php else: ?>
      <p><?php _e('Sorry, there are no posts.'); ?></p>
    <?php endif; ?>

  </div>
  <div class="span4">
    <?php get_sidebar(); ?>
  </div>
</div>


<?php get_footer(); ?>
