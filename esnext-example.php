<?php
/**
 * Plugin Name:       ESNext Example
 * Description:       Example block written with ESNext standard and JSX support – build step required.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       esnext-example
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/how-to-guides/block-tutorial/writing-your-first-block-type/
 */
function create_block_esnext_example_block_init() {
	$block_paths = glob(__DIR__ . '/inc/gutenberg/blocks/*');
	array_walk($block_paths, fn($block_path) => register_block_type($block_path));
}
add_action( 'init', 'create_block_esnext_example_block_init' );
