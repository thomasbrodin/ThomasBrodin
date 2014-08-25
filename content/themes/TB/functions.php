<?php
	add_theme_support('post-formats');
	add_theme_support('post-thumbnails');
	add_theme_support('menus');

	add_filter('get_twig', 'add_to_twig');
	add_filter('timber_context', 'add_to_context');

	add_action('wp_enqueue_scripts', 'load_scripts');
	add_action('wp_enqueue_scripts', 'load_styles');

	add_action('init', 'removeHeadLinks');
	remove_action('wp_head', 'wp_generator');

	define('THEME_URL', get_template_directory_uri());

	function add_to_context($data){
		$data['menu'] = new TimberMenu();
		return $data;
	}

	function add_to_twig($twig){
		$twig->addExtension(new Twig_Extension_StringLoader());
		$twig->addFilter('myfoo', new Twig_Filter_Function('myfoo'));
		return $twig;
	}

	function myfoo($text){
    	$text .= ' bar!';
    	return $text;
	}

	function load_scripts(){
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'modernizr', THEME_URL . '/js/modernizr-2.5.3.min.js', '', '');
		wp_enqueue_script( 'mootools', '//ajax.googleapis.com/ajax/libs/mootools/1.4/mootools-yui-compressed.js', '', '', true);
		wp_enqueue_script( 'wall', THEME_URL . '/js/masonry.js','', '',true);	
		wp_enqueue_script( 'snap', THEME_URL . '/js/snap.svg-min.js', '', '', true);
		wp_enqueue_script( 'svg-config', THEME_URL . '/js/svgicons-config.js', '', '', true);
		//templateUrl var
		$translation_array = array( 'templateUrl' => get_template_directory_uri() );
		wp_localize_script( 'svg-config', 'object_name', $translation_array );

		wp_enqueue_script( 'svg-icons', THEME_URL . '/js/svgicons.js', '', '', true);
		wp_enqueue_script( 'classie', THEME_URL . '/js/classie.js', '', '', true);
		wp_enqueue_script( 'overlay-menu', THEME_URL . '/js/overlay.js', '', '', true);
		wp_enqueue_script( 'search-expand', THEME_URL . '/js/uisearch.js', '', '', true);
		wp_enqueue_script( 'flexslider', THEME_URL . '/js/jquery.flexslider-min.js', array('jquery'), '',true);
		wp_enqueue_script( 'init', THEME_URL . '/js/index-script.js', array('jquery'), '', true);
	}
	function load_styles() {
		wp_enqueue_style( 'slider', THEME_URL . '/css/slider.css'); 
		wp_enqueue_style( 'custom', THEME_URL . '/style.css'); 
		wp_enqueue_style( 'mobile', THEME_URL . '/css/responsive.css'); 
	}

	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }

