<?php
/**
 * Template Name: Projects Gallery
 * Description: Plantilla para galería de proyectos
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Proyectos</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Proyectos</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<?php
get_template_part('template-parts/section', 'projects');

get_footer();
