<?php
/**
 * Title: Services Grid
 * Slug: solar-theme/services-grid
 * Categories: solar-theme
 * Description: Three column services/products showcase
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" id="service" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.2rem"}},"textColor":"primary","fontSize":"small"} -->
		<h6 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-small-font-size" style="letter-spacing:0.2rem;text-transform:uppercase"><?php esc_html_e('Services', 'solar-theme'); ?></h6>
		<!-- /wp:heading -->

		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"3.5rem"}}} -->
		<h1 class="wp-block-heading has-text-align-center" style="font-size:3.5rem"><?php esc_html_e('What We Cover', 'solar-theme'); ?></h1>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"},"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--large)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"product-item mb-2","layout":{"type":"constrained"}} -->
			<div class="wp-block-group product-item mb-2">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"product-img"} -->
				<figure class="wp-block-image size-large product-img">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/product-1.jpg" alt="<?php esc_attr_e('Solar System', 'solar-theme'); ?>"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
					<!-- wp:heading {"textAlign":"center","level":3} -->
					<h3 class="wp-block-heading has-text-align-center"><?php esc_html_e('Solar System', 'solar-theme'); ?></h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"product-item mb-2","layout":{"type":"constrained"}} -->
			<div class="wp-block-group product-item mb-2">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"product-img"} -->
				<figure class="wp-block-image size-large product-img">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/product-2.jpg" alt="<?php esc_attr_e('Wind Turbine', 'solar-theme'); ?>"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
					<!-- wp:heading {"textAlign":"center","level":3} -->
					<h3 class="wp-block-heading has-text-align-center"><?php esc_html_e('Wind Turbine', 'solar-theme'); ?></h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"product-item mb-2","layout":{"type":"constrained"}} -->
			<div class="wp-block-group product-item mb-2">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"product-img"} -->
				<figure class="wp-block-image size-large product-img">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/product-3.jpg" alt="<?php esc_attr_e('Wind Generator', 'solar-theme'); ?>"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
					<!-- wp:heading {"textAlign":"center","level":3} -->
					<h3 class="wp-block-heading has-text-align-center"><?php esc_html_e('Wind Generator', 'solar-theme'); ?></h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
