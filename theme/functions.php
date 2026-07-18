<?php
/**
 * Enterprise FSE Starter theme setup.
 *
 * Block themes need almost no PHP. This registers a pattern category, a couple
 * of token-driven block styles, and loads the text domain; all other styling
 * lives in theme.json.
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

		// A card surface for Group blocks: token-driven border, radius, and padding.
		register_block_style(
			'core/group',
			array(
				'name'         => 'bordered',
				'label'        => __( 'Bordered', 'enterprise-fse-starter' ),
				'inline_style' => '.wp-block-group.is-style-bordered{'
					. 'border:1px solid var(--wp--preset--color--line);'
					. 'border-radius:0.5rem;'
					. 'padding:var(--wp--preset--spacing--40);}',
			)
		);

		// A fully rounded action for Button blocks, distinct from core fill/outline.
		register_block_style(
			'core/button',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'enterprise-fse-starter' ),
				'inline_style' => '.wp-block-button.is-style-pill .wp-block-button__link{'
					. 'border-radius:9999px;}',
			)
		);
	}
);
