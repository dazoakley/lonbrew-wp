<?php

function bootstrap_js() {
  wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );
  wp_enqueue_script( 'bootstrap' );
}

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ));

?>
