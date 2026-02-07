<?php
/**
 * Title: Services 3 Columns
 * Slug: tema-solar/services-3-col
 * Categories: tema-solar-sections
 * Description: Three column service section with icons
 *
 * @package Tema Solar Energy
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","className":"py-5"} -->
<div class="wp-block-group alignfull py-5">
    <!-- wp:group {"layout":{"type":"constrained","contentSize":"1140px"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"textAlign":"center","level":2,"textColor":"primary"} -->
        <h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color">Nuestros Servicios</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","className":"mb-5"} -->
        <p class="has-text-align-center mb-5">Ofrecemos soluciones completas de energía renovable</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"className":"mt-4"} -->
        <div class="wp-block-columns mt-4">
            <!-- wp:column {"className":"text-center"} -->
            <div class="wp-block-column text-center">
                <!-- wp:image {"width":"100px","sizeSlug":"large","className":"mb-3"} -->
                <figure class="wp-block-image size-large is-resized mb-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-1.jpg" alt="Sistema Solar" style="width:100px"/>
                </figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":3} -->
                <h3 class="wp-block-heading has-text-align-center">Sistema Solar</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">Instalación completa de paneles solares para hogares y empresas con garantía extendida.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"className":"text-center"} -->
            <div class="wp-block-column text-center">
                <!-- wp:image {"width":"100px","sizeSlug":"large","className":"mb-3"} -->
                <figure class="wp-block-image size-large is-resized mb-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-2.jpg" alt="Turbina Eólica" style="width:100px"/>
                </figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":3} -->
                <h3 class="wp-block-heading has-text-align-center">Turbina Eólica</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">Sistemas de energía eólica eficientes para maximizar tu producción energética.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"className":"text-center"} -->
            <div class="wp-block-column text-center">
                <!-- wp:image {"width":"100px","sizeSlug":"large","className":"mb-3"} -->
                <figure class="wp-block-image size-large is-resized mb-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-3.jpg" alt="Generador Eólico" style="width:100px"/>
                </figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":3} -->
                <h3 class="wp-block-heading has-text-align-center">Generador Eólico</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">Generadores de alta capacidad para uso residencial y comercial.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
