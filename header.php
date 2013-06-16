<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php bootstrap_js(); ?>
    <?php wp_head(); ?>
  </head>
  <body>

    <header>
      <div id="mobile-header" class="container hidden-desktop hidden-tablet visible-mobile">
        <h3><a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></h3>
      </div>
      <div id="desktop-header" class="container visible-desktop visible-tablet hidden-mobile">
        <h1><a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <p class="strapline">
          The homebrew club for brewers of all levels based in and around London.
          We meet monthly, come and join us.
        </p>
      </div>
    </header>

    <nav>
      <div class="navbar-wrapper">
        <div class="container">
          <div class="navbar">
            <div class="navbar-inner">
              <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <div class="nav-collapse collapse">
                <ul class="nav">
                  <?php wp_list_pages(array('title_li' => '')); ?>
                  <li class="page_item">
                    <a href="/forum">Forum</a>
                  </li>
                </ul>
              </div><!--/.nav-collapse -->
            </div><!-- /.navbar-inner -->
          </div><!-- /.navbar -->

        </div> <!-- /.container -->
      </div>
    </nav>

    <div class="container">
