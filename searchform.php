<form action="/" method="get" id="search" class="form-search">
  <div class="input-append">
    <input type="text" name="s" id="search" title="Search" placeholder="Search..." class="span2 search-query" value="<?php the_search_query(); ?>" />
    <button class="btn" type="submit">
      <i class="icon-search"></i> Search
    </button>
  </div>
</form>
