<?php
	include_once('inc/tb-acf.php');
	include_once('inc/tb-plugins.php');

if ( ! class_exists( 'Timber' ) ) {
	add_action( 'admin_notices', function() {
		echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php#timber' ) ) . '">' . esc_url( admin_url( 'plugins.php') ) . '</a></p></div>';
	});

	add_filter('template_include', function($template) {
		return get_stylesheet_directory() . '/static/no-timber.html';
	});

	return;
}
// if( function_exists('acf_add_options_page') ) {
// 	acf_add_options_page();
// }
define('THEME_URL', get_template_directory_uri());

class StarterSite extends TimberSite {

	function __construct(){

		add_theme_support('post-thumbnails');
		add_theme_support('menus');

		add_filter('timber_context', array($this, 'add_to_context'));

		add_filter('acf/options_page/settings', array($this, 'options_page_settings'));

		// add_filter('acf/settings/show_admin', array($this,'__return_false'));

		add_action('wp_enqueue_scripts', array($this, 'load_scripts'));
		add_action('wp_enqueue_scripts', array($this, 'load_styles'));

		add_action('init', array($this,  'removeHeadLinks'));

		parent::__construct();
	}

	function add_to_context($data){
		// $context['options'] = get_fields('options');
		$data['menu'] = new TimberMenu('Main Menu');
		return $data;
	}

	function load_scripts(){
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'modernizr', THEME_URL . '/app/js/modernizr-2.8.3.min.js', array('jquery'), false, false);
		wp_enqueue_script( 'main-compressed', THEME_URL . '/app/js/main-min.js', array('jquery'), '', true);
		//script var
		wp_localize_script( 'main-compressed', 'script_vars', array(
			 'themeUrl' => get_template_directory_uri()
			 )
		);
	}
	function load_styles() {
		wp_enqueue_style( 'custom', THEME_URL . '/app/css/main-min.css', false, null);
	}

	function removeHeadLinks() {
			remove_action('wp_head', 'rsd_link');
			remove_action('wp_head', 'wlwmanifest_link');
			remove_action('wp_head', 'wp_generator');
			remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
			remove_action( 'wp_print_styles', 'print_emoji_styles' );
		}
}

new StarterSite();
