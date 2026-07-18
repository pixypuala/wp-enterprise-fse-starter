<?php
/**
 * Enterprise FSE Starter theme setup.
 *
 * Block themes need almost no PHP. This registers a pattern category and loads
 * the text domain; all styling is in theme.json.
 *
 * @package EnterpriseFseStarter
 */

declare( strict_types=1 );

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action(
	'init',
	static function (): void {
		register_block_pattern_category(
			'enterprise-fse-starter',
			array( 'label' => __( 'Enterprise FSE Starter', 'enterprise-fse-starter' ) )
		);
	}
);
