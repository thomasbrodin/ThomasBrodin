<!DOCTYPE html>
<head>
	<!-- meta -->
    <html <?php language_attributes();?>> 
	<meta charset="<?php bloginfo('charset'); ?>" />

  <title>
      <?php if ( is_home() || is_front_page() ) { bloginfo('name'); }
         else { bloginfo('name'); print ' | '; wp_title("",true); } ?>
  </title>

	<meta name="description" content="<?php bloginfo('description'); ?>"/>
    
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
    <!-- styles -->	
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css"/> 
    
    <!-- Mobile Specific Metas -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="<?php echo get_template_directory_uri(); ?>/css/mobile.css" />
 	
  <!-- wp head -->
	<?php wp_head(); ?>
    

	
</head>

<body <?php body_class();?>>

<div id="wrapper">  

	<div id="header">
        
    	<div id="logo">
        	<a href="<?php echo home_url( '/' ); ?>"  title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"> 
                 	 <?php bloginfo('sitename'); ?>
            </a>
            
       </div>
        
                
       <?php if ( has_nav_menu( 'main_nav' ) ) { ?>
  		 <div id="nav"><?php wp_nav_menu( array( 'theme_location' => 'main_nav' ) ); ?></div>
       <?php } else { ?>
 	 	 <div id="nav"><ul><?php wp_list_pages("depth=1&title_li=");  ?></ul></div>
	   <?php } ?>
	
   </div><!-- // header -->           