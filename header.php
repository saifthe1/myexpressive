<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/library/images/favicon.ico" />
<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/library/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/library/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/library/images/apple-touch-icon-114x114.png">
<!--[if lt IE 9]>
<script src="scripts/ie9.js">IE7_PNG_SUFFIX=".png";</script>
<script src="scripts/css3-mediaqueries.js"></script>
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700,200' rel='stylesheet' type='text/css'>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Cardo" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Ubuntu:bold" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet" type="text/css">
<?php wp_head();?>   
</head>
<body>
<div class="social_wrap">
 <div class="social_list">
  <!-- social icons -->
  <ul class="social_icons">
   <li><a href="https://twitter.com/saifthe1" target="_blank">tweeter</a></li>
   <li class="facebook"><a href="https://www.facebook.com/saif.mulla.37" target="_blank">facebook</a></li>
  </ul>
  <!-- /social icons -->
  <!-- top left menu -->
  <ul class="top_menu">
   <?php wp_page_menu(array( 'show_home' => 'Home', 'sort_column' => 'menu_order',
   'exclude' => '2','menu_class'=>'' )); ?>
  </ul>
  <!-- /top left menu -->
 </div>
</div>

<div class="wraper">
<!--   <nav> -->
  <!-- top menu -->

 <header class="header">
  <p class="mylogo">#<?php bloginfo('name');?></p>
  <p class="caption2"><?php bloginfo('description'); ?></p>
  <!-- /top menu -->
<!--   </nav> -->
 </header>