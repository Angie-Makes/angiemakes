<?php
/**
 * Title: Photo blog search results
 * Slug: angiemakes/template-search-photo-blog
 * Template Types: search
 * Viewport width: 1400
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Angie_Makes
 * @since Angie-Makes 1.0
 */

?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)">
	<!-- wp:query-title {"type":"search","textAlign":"center","align":"wide"} /-->
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:pattern {"slug":"angiemakes/hidden-search"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:pattern {"slug":"angiemakes/template-query-loop-photo-blog"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->
