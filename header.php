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
      <div class="container">
        <h1><a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></h1>
      </div>

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
                  <?php// wp_nav_menu(array()); ?>
                </ul>
              </div><!--/.nav-collapse -->
            </div><!-- /.navbar-inner -->
          </div><!-- /.navbar -->

        </div> <!-- /.container -->
      </div>
    </header>


    <div class="container">
