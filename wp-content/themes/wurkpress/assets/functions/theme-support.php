<?php

// Remove Yoast JSON

function remove_json_ld_output( $data ) {
	$data = array();

	return $data;
}

add_filter('wpseo_json_ld_output', 'remove_json_ld_output', 10, 1);

// YOAST Breadcrumb RDF Fix

add_filter ('wpseo_breadcrumb_output','bybe_crumb_v_fix');
function bybe_crumb_v_fix ($link_output) {
	$link_output = preg_replace(array('#<span xmlns:v="http://rdf.data-vocabulary.org/\#">#','#<span typeof="v:Breadcrumb"><a href="(.*?)" .*?'.'>(.*?)</a></span>#','#<span typeof="v:Breadcrumb">(.*?)</span>#','# property=".*?"#','#</span>$#'), array('','<span><a href="$1"><span>$2</span></a></span>','<span><span>$1</span></span>','',''), $link_output);
	return $link_output;
}

// FORCE LOWERCASE URLs
if ( !defined('ABSPATH') ) exit; // Exit if accessed directly
if ( !class_exists('WPForceLowercaseURLs') ) {
	class WPForceLowercaseURLs {
		public static function init() {
			// If page is non-admin, force lowercase URLs
			if ( !is_admin() ) {
				add_action( 'init', array('WPForceLowercaseURLs', 'toLower') );
			}
		}

		/**
		 * Changes the requested URL to lowercase and redirects if modified
		 */
		public static function toLower() {
			// Grab requested URL
			$url = $_SERVER['REQUEST_URI'];
			$params = $_SERVER['QUERY_STRING'];

			// If URL contains a period, halt (likely contains a filename and filenames are case specific)
			if ( preg_match('/[\.]/', $url) ) {
				return;
			}
			// If URL contains a capital letter
			if ( preg_match('/[A-Z]/', $url) ) {
				// Convert URL to lowercase
				$lc_url = empty($params)
					? strtolower($url)
					: strtolower(substr($url, 0, strrpos($url, '?'))).'?'.$params;
				// if url was modified, re-direct
				if ($lc_url !== $url) {
					// 301 redirect to new lowercase URL
					header('Location: '.$lc_url, TRUE, 301);
					exit();
				}
			}
		}
	}
	WPForceLowercaseURLs::init();
}

	
// Adding WP Functions & Theme Support
function joints_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );
	
	// Default thumbnail size
	set_post_thumbnail_size(125, 125, true);

	add_image_size( 'spana-post-thumb', 675, 450, true );
	add_image_size( 'spana-appeal-featured-lg', 1200, 500, array( 'center', 'center' ) );
	add_image_size( 'spana-appeal-featured-sm', 600, 300, array( 'center', 'center' ) );

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );
	
	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );
	
	// Add HTML5 Support
	add_theme_support( 'html5', 
	         array( 
	         	'comment-list', 
	         	'comment-form', 
	         	'search-form', 
	         ) 
	);
	
	// Adding post format support
	 add_theme_support( 'post-formats',
		array(
			'aside',             // title less blurb
			'gallery',           // gallery of images
			'link',              // quick link to other site
			'image',             // an image
			'quote',             // a quick quote
			'status',            // a Facebook like status update
			'video',             // video
			'audio',             // audio
			'chat'               // chat transcript
		)
	); 
	
	// Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
	$GLOBALS['content_width'] = apply_filters( 'joints_theme_support', 1200 );	
	
} /* end theme support */

// Enable shortcodes in widgets
add_filter('widget_text', 'do_shortcode');

add_action( 'after_setup_theme', 'joints_theme_support' );

function megamenu_add_theme_spana_1474973189($themes) {
	$themes["spana_1474973189"] = array(
		'title' => 'SPANA',
		'container_background_from' => 'rgba(255, 255, 255, 0.1)',
		'container_background_to' => 'rgba(255, 255, 255, 0.1)',
		'arrow_up' => 'disabled',
		'arrow_down' => 'disabled',
		'arrow_left' => 'disabled',
		'arrow_right' => 'disabled',
		'menu_item_background_hover_from' => 'rgba(255, 255, 255, 0.1)',
		'menu_item_background_hover_to' => 'rgba(255, 255, 255, 0.1)',
		'menu_item_link_font_size' => '18px',
		'menu_item_link_height' => '65px',
		'menu_item_link_color' => 'rgb(102, 102, 102)',
		'menu_item_link_weight' => 'bold',
		'menu_item_link_color_hover' => 'rgb(194, 1, 57)',
		'menu_item_link_weight_hover' => 'bold',
		'panel_width' => '#title-bar-row',
		'panel_border_color' => 'rgba(255, 255, 255, 0.1)',
		'panel_header_text_transform' => 'none',
		'panel_header_font_size' => '19px',
		'panel_header_border_color' => '#555',
		'panel_padding_left' => '15px',
		'panel_padding_right' => '15px',
		'panel_padding_top' => '15px',
		'panel_padding_bottom' => '15px',
		'panel_font_size' => '14px',
		'panel_font_color' => '#666',
		'panel_font_family' => 'inherit',
		'panel_second_level_font_color' => '#555',
		'panel_second_level_font_color_hover' => 'rgb(194, 1, 57)',
		'panel_second_level_text_transform' => 'none',
		'panel_second_level_font' => 'inherit',
		'panel_second_level_font_size' => '16px',
		'panel_second_level_font_weight' => 'bold',
		'panel_second_level_font_weight_hover' => 'bold',
		'panel_second_level_text_decoration' => 'none',
		'panel_second_level_text_decoration_hover' => 'none',
		'panel_second_level_border_color' => '#555',
		'panel_third_level_font_color' => '#666',
		'panel_third_level_font_color_hover' => 'rgb(194, 1, 57)',
		'panel_third_level_font' => 'inherit',
		'panel_third_level_font_size' => '16px',
		'panel_third_level_font_weight' => 'bold',
		'flyout_link_weight' => 'bold',
		'flyout_link_weight_hover' => 'bold',
		'flyout_link_size' => '16px',
		'flyout_link_color' => '#666',
		'flyout_link_color_hover' => 'rgb(194, 1, 57)',
		'flyout_link_family' => 'inherit',
		'responsive_breakpoint' => '769px',
		'line_height' => '1',
		'transitions' => 'on',
		'mobile_columns' => '1',
		'toggle_background_from' => 'rgba(255, 255, 255, 0.1)',
		'toggle_background_to' => 'rgba(255, 255, 255, 0.1)',
		'toggle_font_color' => 'rgb(102, 102, 102)',
		'toggle_bar_height' => '70px',
		'mobile_background_from' => 'rgb(56, 62, 64)',
		'mobile_background_to' => 'rgb(56, 62, 64)',
		'disable_mobile_toggle' => 'on',
		'custom_css' => '/** Push menu onto new line **/
#{$wrap} {
    clear: both;
}',
	);
	return $themes;
}
add_filter("megamenu_themes", "megamenu_add_theme_spana_1474973189");