<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title('&raquo;','true','right'); bloginfo('name'); if( is_home() ) { echo " &raquo; " . get_bloginfo( 'description', 'display' ); } ?></title>

   <?php wp_head(); ?>
   
<!-- SEO 
	
   <!-- Begin Opengraph
   <meta property="og:url" content="#">
   <!-- End Opengraph

   <!-- Begin Twitter
   <meta property="twitter:card" content="summary_large_image">
   <!-- End Twitter
-->

</head>

<body <?php body_class(); ?>>