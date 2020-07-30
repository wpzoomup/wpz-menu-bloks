<?php
/**
 * Autoloader.
 *
 * @package WPZ_menu_Blocks
 */

namespace WPZ_menu_Blocks;

try {
	spl_autoload_register( 'WPZ_menu_Blocks\autoload_register' );
} catch ( \Exception $e ) {
	wp_die( esc_html( $e->getMessage() ) );
}

/**
 * Autoloader callback.
 *
 * @param string $name class name.
 */
function autoload_register( $name ) {
	$namespaces = explode( '\\', $name );
	$class_name = array_pop( $namespaces );

	$dir = dirname( __FILE__ ) . '/' . str_replace( 'wpz_menu_blocks', '', strtolower( join( '/', $namespaces ) ) );

	$class_file_name = 'class-' . strtolower( str_replace( '_', '-', $class_name ) ) . '.php';
	$file_name       = $dir . '/' . $class_file_name;

	if ( is_readable( $file_name ) ) {
		include $file_name;
	}
}
