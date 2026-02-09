<?php
/**
 * Title: About Section
 * Slug: solar-theme/about-section
 * Categories: solar-theme, text
 * Description: About us section with image and text
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" id="about" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"42%"} -->
		<div class="wp-block-column" style="flex-basis:42%">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about.jpg" alt="<?php esc_attr_e('About Solar Energy', 'solar-theme'); ?>"/>
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"58%"} -->
		<div class="wp-block-column" style="flex-basis:58%">
			<!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.2rem"}},"textColor":"primary","fontSize":"small"} -->
			<h6 class="wp-block-heading has-primary-color has-text-color has-small-font-size" style="letter-spacing:0.2rem;text-transform:uppercase"><?php esc_html_e('About Us', 'solar-theme'); ?></h6>
			<!-- /wp:heading -->

			<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"3.5rem"}}} -->
			<h1 class="wp-block-heading" style="font-size:3.5rem"><span class="has-primary-color has-text-color"><?php esc_html_e('25+ Years Experience', 'solar-theme'); ?></span> <?php esc_html_e('In Solar Power Industry', 'solar-theme'); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e('At sed est eirmod sanctus et amet diam magna. Dolore clita magna sed sed stet et, at magna rebum eirmod sanctus ut sed, stet tempor dolore rebum sit duo, dolore tempor sit est sit sanctus, sit justo sit invidunt clita ut justo diam magna. Erat eos nonumy labore dolor. Dolore kasd no et et et elitr. Erat sea dolor elitr diam sed lorem rebum et vero.', 'solar-theme'); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
				<!-- wp:button {"backgroundColor":"primary","className":"font-weight-bold py-3 px-5"} -->
				<div class="wp-block-button font-weight-bold py-3 px-5"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" data-toggle="modal" data-target="#exampleModalLong"><?php esc_html_e('Read More', 'solar-theme'); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
