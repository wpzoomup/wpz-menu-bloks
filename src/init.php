<?php
/**
 * Initialize.
 *
 * @package WPZ_menu_Blocks
 */

namespace WPZ_menu_Blocks;

require_once dirname( __FILE__ ) . '/autoload.php';

add_action(
	'init',
	function () {
		load_plugin_textdomain( 'wpz-menu-blocks', false, basename( PLUGIN_FILE ) . '/languages' );
	}
);

add_action(
	'init',
	function () {
		new Blocks\Posts\Renderer();
	}
);

