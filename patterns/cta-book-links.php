<?php
/**
 * Title: Call to action with book links
 * Slug: angiemakes/cta-book-links
 * Categories: call-to-action
 * Description: A call to action section with links to get the book in different websites.
 *
 * @package WordPress
 * @subpackage Angie_Makes
 * @since Angie-Makes 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"textAlign":"center","align":"wide","fontSize":"x-large"} -->
	<h2 class="wp-block-heading alignwide has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Buy your copy of The Stories Book', 'angiemakes' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:buttons {"align":"wide","fontSize":"medium","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
	<div class="wp-block-buttons alignwide has-custom-font-size has-medium-font-size">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Amazon', 'Example brand name.', 'angiemakes' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Audible', 'Example brand name.', 'angiemakes' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Barnes &amp; Noble', 'Example brand name.', 'angiemakes' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Apple Books', 'Example brand name.', 'angiemakes' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Bookshop.org', 'Example brand name.', 'angiemakes' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Spotify', 'Example brand name.', 'angiemakes' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'BAM!', 'Example brand name.', 'angiemakes' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Simon &amp; Schuster', 'Example brand name.', 'angiemakes' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

	<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
	<p class="has-text-align-center has-medium-font-size"><?php echo wp_kses_post( _x( 'Outside Europe? View <a href="#" rel="nofollow">international editions</a>.', 'Pattern placeholder text with link.', 'angiemakes' ) ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
