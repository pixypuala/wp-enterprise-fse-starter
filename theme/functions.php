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

/**
 * Keep the navigation's list markup valid.
 *
 * A Page List rendered as a navigation's top level is wrapped by core in its
 * own `<ul>`, because core only omits that wrapper inside a submenu (see
 * `block_core_page_list_render`). The result is a `<ul>` as the direct child of
 * the navigation's `<ul>`, which is invalid list structure and fails WCAG 1.3.1
 * — confirmed with axe against this theme's own header.
 *
 * A theme that advertises `accessibility-ready` is answerable for the markup it
 * emits, so the wrapper is removed here and the page items become direct
 * children of the navigation's list, which is what a screen reader expects.
 * Submenus are untouched: they are the case core already handles.
 */
add_filter(
	'render_block_core/page-list',
	static function ( string $block_content, array $block, \WP_Block $instance ): string {
		unset( $block );

		// `showSubmenuIcon` is only in context when the parent is a navigation;
		// `core/isInsideSubmenu` marks the nested case core already unwraps.
		$in_navigation = array_key_exists( 'showSubmenuIcon', $instance->context );
		$in_submenu    = ! empty( $instance->context['core/isInsideSubmenu'] );

		if ( ! $in_navigation || $in_submenu ) {
			return $block_content;
		}

		$unwrapped = preg_replace( '~^\s*<ul\b[^>]*>(.*)</ul>\s*$~s', '$1', $block_content );

		// preg_replace returns null on failure; never hand back nothing.
		return is_string( $unwrapped ) ? $unwrapped : $block_content;
	},
	10,
	3
);
