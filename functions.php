<?php
/**
 * Simple Journal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Simple_Journal
 * @since Simple Journal 1.0
 */

if (!function_exists('simple_journal_support')):
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Simple Journal 1.0
	 *
	 * @return void
	 */
	function simple_journal_support()
	{
		// Enqueue editor styles.
		add_editor_style('style.css');

		// Make theme available for translation.
		load_theme_textdomain('simple-journal');
	}
endif;
add_action('after_setup_theme', 'simple_journal_support');

if (!function_exists('simple_journal_styles')):
	/**
	 * Enqueue styles.
	 *
	 * @since Simple Journal 1.0
	 *
	 * @return void
	 */
	function simple_journal_styles()
	{
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get('Version');
		$version_string = is_string($theme_version) ? $theme_version : false;

		wp_enqueue_style(
			'simple-journal-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);
	}
endif;
add_action('wp_enqueue_scripts', 'simple_journal_styles');