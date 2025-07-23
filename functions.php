<?php
/**
 * Angie-Makes functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Angie_Makes
 * @since Angie-Makes 1.0
 */

// Adds theme support for post formats.
if ( ! function_exists( 'angiemakes_post_format_setup' ) ) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @since Angie-Makes 1.0
	 *
	 * @return void
	 */
	function angiemakes_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'angiemakes_post_format_setup' );

// Enqueues editor-style.css in the editors.
if ( ! function_exists( 'angiemakes_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since Angie-Makes 1.0
	 *
	 * @return void
	 */
	function angiemakes_editor_style() {
		add_editor_style( 'assets/css/editor-style.css' );
	}
endif;
add_action( 'after_setup_theme', 'angiemakes_editor_style' );

// Enqueues style.css on the front.
if ( ! function_exists( 'angiemakes_enqueue_styles' ) ) :
	/**
	 * Enqueues style.css on the front.
	 *
	 * @since Angie-Makes 1.0
	 *
	 * @return void
	 */
	function angiemakes_enqueue_styles() {
		wp_enqueue_style(
			'angiemakes-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'angiemakes_enqueue_styles' );

// Registers custom block styles.
if ( ! function_exists( 'angiemakes_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since Angie-Makes 1.0
	 *
	 * @return void
	 */
	function angiemakes_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'angiemakes' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);

		register_block_style(
			'core/cover',
			array(
				'name'         => 'top-border-background',
				'label'        => __( 'Top Border Background', 'angiemakes' ),
				'inline_style' => '
				.wp-block-cover.is-style-top-border-background {
					overflow: visible !important;
				}
				.wp-block-cover.is-style-top-border-background .wp-block-cover__image-background.is-repeated {
					background-repeat: repeat-x !important;
					background-position: center top !important;
					background-size: auto !important;
					overflow: visible !important;
					clip-path: none !important;
				}',
			)
		);

		register_block_style(
			'core/navigation',
			array(
				'name'         => 'padded-menu-buttons',
				'label'        => __( 'Padded Menu Buttons', 'angiemakes' ),
				'inline_style' => '
				.wp-block-navigation.is-style-padded-menu-buttons .wp-block-navigation-item__content {
					padding-top: 1rem !important;
					padding-bottom: 1rem !important;
				}',
			)
		);
	}
endif;
add_action( 'init', 'angiemakes_block_styles' );

// Registers pattern categories.
if ( ! function_exists( 'angiemakes_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since Angie-Makes 1.0
	 *
	 * @return void
	 */
	function angiemakes_pattern_categories() {

		register_block_pattern_category(
			'angiemakes_page',
			array(
				'label'       => __( 'Pages', 'angiemakes' ),
				'description' => __( 'A collection of full page layouts.', 'angiemakes' ),
			)
		);

		register_block_pattern_category(
			'angiemakes_post-format',
			array(
				'label'       => __( 'Post formats', 'angiemakes' ),
				'description' => __( 'A collection of post format patterns.', 'angiemakes' ),
			)
		);
	}
endif;
add_action( 'init', 'angiemakes_pattern_categories' );

// Registers block binding sources.
if ( ! function_exists( 'angiemakes_register_block_bindings' ) ) :
	/**
	 * Registers the post format block binding source.
	 *
	 * @since Angie-Makes 1.0
	 *
	 * @return void
	 */
	function angiemakes_register_block_bindings() {
		register_block_bindings_source(
			'angiemakes/format',
			array(
				'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 'angiemakes' ),
				'get_value_callback' => 'angiemakes_format_binding',
			)
		);
	}
endif;
add_action( 'init', 'angiemakes_register_block_bindings' );

// Registers block binding callback function for the post format name.
if ( ! function_exists( 'angiemakes_format_binding' ) ) :
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @since Angie-Makes 1.0
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	function angiemakes_format_binding() {
		$post_format_slug = get_post_format();

		if ( $post_format_slug && 'standard' !== $post_format_slug ) {
			return get_post_format_string( $post_format_slug );
		}
	}
endif;
