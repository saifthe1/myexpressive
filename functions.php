<?php
wp_register_style( 'myexpressive-stylesheet', get_template_directory_uri() . '/library/css/style.css', array(), '20130127', 'all' );
wp_register_style( 'myexpressive-stylesheet2', get_template_directory_uri() . '/library/css/responsive.css', array(), '20130130', 'all' );
wp_deregister_script('jquery');
wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array(), null, false );
wp_register_script( 'myexpressive-script', get_template_directory_uri() . '/library/js/js_func.js');
wp_register_script( 'myexpressive-script2', get_template_directory_uri() . '/library/js/jquery.bxSlider.min.js', array( 'jquery' ) );
wp_enqueue_style('myexpressive-stylesheet');
wp_enqueue_style('myexpressive-stylesheet2');
wp_enqueue_script('jquery');
wp_enqueue_script('myexpressive-script');
wp_enqueue_script('myexpressive-script2')
?>
