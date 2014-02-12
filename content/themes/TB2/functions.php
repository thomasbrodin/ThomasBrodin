<?php	
	// Load jQuery
	if ( !function_exists('core_mods') ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script('jquery');
				wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"));
				wp_register_script('jquery.isotope', (get_template_directory_uri()."/js/jquery.isotope.min.js"),'jquery',false,true);
				wp_register_script('jquery.masonry', (get_template_directory_uri()."/js/jquery.masonry.min.js"),'jquery',false,true);
				wp_register_script('jquery.mousewheel', (get_template_directory_uri()."/js/jquery.mousewheel.js"),'jquery',false,true);
				wp_register_script('jquery.imagesloaded', (get_template_directory_uri()."/js/jquery.imagesloaded.js"),'jquery',false,true);
				wp_register_script('hex.functions', (get_template_directory_uri()."/js/functions.js"),'jquery',false,true);
				
				
				wp_enqueue_script('jquery');
				wp_enqueue_script('jquery.isotope');
				wp_enqueue_script('jquery.masonry');
				wp_enqueue_script('jquery.mousewheel');
				wp_enqueue_script('jquery.imagesloaded');
				wp_enqueue_script('hex.functions');
			
			}
		}
		core_mods();
	}
	
	// content width
	if ( !isset( $content_width ))  {
		$content_width = 710; 
	}


	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    	
	// HEX post thumbnails
	add_theme_support( 'post-thumbnails' );
		
    // menu 
	add_action( 'init', 'register_hex_menu' );

	function register_hex_menu() {
		register_nav_menu( 'main_nav', __( 'Main Menu' ) );
	} 

     //setup footer widget area
	if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Footer',
    		'id'   => 'hex_footer',
    		'description'   => 'Footer Widget Area',
    		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-copy">',
    		'after_widget'  => '</div></div>',
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3>'
    	));
	}
?>