<?php
/**
 * Template Name: Services
 * Description: Plantilla para página de Servicios
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Nuestros Servicios</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Servicios</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<?php
get_template_part('template-parts/section', 'services');
get_template_part('template-parts/section', 'faqs');

get_footer();
