<?php get_header(); ?>

<div class="row">
  <div class="span8">

    <div id="featured" class="well">
      <?php query_posts('posts_per_page=1&cat=23'); ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <p><?php the_excerpt(); ?></p>
        <p><a href="<?php the_permalink(); ?>">read more &raquo;</a></p>
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>
    </div><!-- /.featured -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

    <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

  </div>

  <div class="span4">
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
