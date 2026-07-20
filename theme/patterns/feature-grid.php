<?php
/**
 * Title: Feature grid
 * Slug: enterprise-fse-starter/feature-grid
 * Categories: enterprise-fse-starter, featured
 * Description: A three-up grid of bordered feature cards, each with a heading and a short description.
 *
 * @package EnterpriseFseStarter
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"level":2,"align":"wide","fontSize":"large"} -->
	<h2 class="wp-block-heading alignwide has-large-font-size">What ships in the box</h2>
	<!-- /wp:heading -->
	<!-- wp:columns {"verticalAlignment":"stretch","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-stretch alignwide" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:column {"verticalAlignment":"stretch"} -->
		<div class="wp-block-column is-vertically-aligned-stretch">
			<!-- wp:group {"className":"is-style-bordered","style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-bordered" style="min-height:100%">
				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size">Design tokens</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size">Colour, fluid type, and spacing scales expressed once in theme.json and reused everywhere.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"stretch"} -->
		<div class="wp-block-column is-vertically-aligned-stretch">
			<!-- wp:group {"className":"is-style-bordered","style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-bordered" style="min-height:100%">
				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size">Accessible defaults</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size">AAA-contrast palettes, visible focus rings, and semantic markup baked into every part.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"stretch"} -->
		<div class="wp-block-column is-vertically-aligned-stretch">
			<!-- wp:group {"className":"is-style-bordered","style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-bordered" style="min-height:100%">
				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size">No build step</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size">Pure configuration and block markup — copy the theme in, activate it, and edit in the site editor.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
