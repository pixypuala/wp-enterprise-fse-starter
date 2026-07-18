<?php
/**
 * Title: Testimonial
 * Slug: enterprise-fse-starter/testimonial
 * Categories: enterprise-fse-starter, testimonials
 * Description: A single pull quote with attribution, centered in a constrained band.
 *
 * @package EnterpriseFseStarter
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:quote {"align":"wide","className":"is-style-bordered"} -->
	<blockquote class="wp-block-quote alignwide is-style-bordered">
		<!-- wp:paragraph {"fontSize":"large"} -->
		<p class="has-large-font-size">Separating the theme layer from business logic let our team ship editorial changes without touching a single plugin.</p>
		<!-- /wp:paragraph -->
		<cite>Platform lead, enterprise editorial team</cite>
	</blockquote>
	<!-- /wp:quote -->
</div>
<!-- /wp:group -->
