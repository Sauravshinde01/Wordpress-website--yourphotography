<?php 
if ( ! function_exists( 'market_boost_support' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */

	function market_boost_support() {
		load_theme_textdomain( 'market-boost', get_template_directory() . '/languages' );
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );
		
		// Add support for post thumbnails
		add_theme_support( 'post-thumbnails' );
		add_editor_style( 'style.css' );
	}

endif;
add_action( 'after_setup_theme', 'market_boost_support' );

if ( ! function_exists( 'market_boost_enqueue_scripts_and_styles' ) ) :
	/**
	 * Enqueue styles.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function market_boost_enqueue_scripts_and_styles() {
		$min = defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ? '' : '.min';
		$version = wp_get_theme()->get('version');
		$template_dir = get_template_directory_uri();
		$template_assets_dir = $template_dir . '/assets';

		// Styles
		$styles = array(
			'market-boost-style'         => array(get_stylesheet_uri(), array(), $version),
			'market-boost-fontawesome'   => array($template_assets_dir . '/css/font-awesome/css/all.css', array(), "5.15.3"),	
		);

		// Enqueue Styles
		foreach ($styles as $handle => $data) {
			list($src, $deps, $ver) = $data;
			wp_enqueue_style($handle, $src, $deps, $ver);
		}
	}

endif;

add_action('wp_enqueue_scripts', 'market_boost_enqueue_scripts_and_styles');


require get_theme_file_path( '/inc/tgm-plugin/tgmpa-hook.php' );

