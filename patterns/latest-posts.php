<?php
/**
 * Title: Latest Blog Posts Section
 * Slug: simple-journal/latest-posts
 * Categories: query, posts
 * Description: A clean list layout displaying the latest blog posts.
 */
?>
<!-- wp:group {"layout":{"type":"constrained"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-x-large-font-size">Latest from the Blog</h2>
	<!-- /wp:heading -->

	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:query {"queryId":3,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
	<div class="wp-block-query">
		<!-- wp:post-template -->
			<!-- wp:group {"layout":{"type":"default"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
				<!-- wp:post-date {"fontSize":"small"} /-->
				<!-- wp:post-excerpt {"moreText":"","fontSize":"medium"} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
