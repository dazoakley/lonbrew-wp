<hr class="hidden-desktop" />

<form action="<?php echo home_url( '/' ); ?>" method="get" class="form-stacked">
  <fieldset>
    <div class="clearfix">
      <div class="input-append input-prepend">
        <span class="add-on"><i class="icon-search"></i></span><input type="text" name="s" id="search" placeholder="Search" class="input-medium" value="<?php the_search_query(); ?>" /><button type="submit" class="btn">Search</button>
      </div>
    </div>
  </fieldset>
</form>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
<?php endif; ?>
