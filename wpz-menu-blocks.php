<?php
/**
 * Plugin Name:     WPZ Menu Blocks
 * Plugin URI:      https://github.com/wpzoomup/wpz-menu-blocks
 * Description:     最新のお品書きを表示
 * Author:          wpzoomup
 * Author URI:      https://wpzoomup.com
 * Text Domain:     wpz-menu-blocks
 * Version: 0.0.1
 *
 * @package         WPZ_menu_Blocks
 */

namespace WPZ_menu_Blocks;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

const PLUGIN_FILE = __FILE__;
const SCRIPT_HANDLE = 'wpz-menu-blocks';

/**
 * Get plugin information.
 *
 * @return array {
 *     Array of plugin information for the strings.
 *
 *     @type string $Name        Plugin mame.
 *     @type string $PluginURI   Plugin URL.
 *     @type string $Version     Version.
 *     @type string $Description Description.
 *     @type string $Author      Author name.
 *     @type string $AuthorURI   Author URL.
 *     @type string $TextDomain  textdomain.
 *     @type string $DomainPath  mo file dir.
 *     @type string $Network     Multisite.
 * }
 */
function get_plugin_data() {
	static $data = null;
	if ( empty( $data ) ) {
		$data = \get_file_data(
			__FILE__,
			[
				'Name'        => 'Plugin Name',
				'PluginURI'   => 'Plugin URI',
				'Version'     => 'Version',
				'Description' => 'Description',
				'Author'      => 'Author',
				'AuthorURI'   => 'Author URI',
				'TextDomain'  => 'Text Domain',
				'DomainPath'  => 'Domain Path',
				'Network'     => 'Network',
			]
		);
	}

	return $data;
}


/**
 * Block Initializer.
 */
require_once dirname( __FILE__ ) . '/src/init.php';
