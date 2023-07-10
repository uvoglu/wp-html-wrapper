<?php
/**
 * Plugin Name:       Html Wrapper
 * Description:       A block that allows to define raw html structures that can contain child blocks.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       html-wrapper
 *
 * @package           uvoglu
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function uvoglu_html_wrapper_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'uvoglu_html_wrapper_block_init' );
