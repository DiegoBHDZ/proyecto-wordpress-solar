<?php
/**
 * Template Name: Contact
 * Description: Plantilla para página de Contacto
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Contacto</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contacto</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Info Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="bg-secondary text-center p-4 mb-4">
                    <i class="fa fa-3x fa-map-marker-alt text-primary mb-3"></i>
                    <h5 class="text-uppercase text-primary mb-3" style="letter-spacing: 5px;">Nuestra Oficina</h5>
                    <p class="m-0">Av. Insurgentes Sur 123, Ciudad de México, México</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-secondary text-center p-4 mb-4">
                    <i class="fa fa-3x fa-envelope text-primary mb-3"></i>
                    <h5 class="text-uppercase text-primary mb-3" style="letter-spacing: 5px;">Escríbenos</h5>
                    <p class="m-0">contacto@strategikos.com</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-secondary text-center p-4 mb-4">
                    <i class="fa fa-3x fa-phone text-primary mb-3"></i>
                    <h5 class="text-uppercase text-primary mb-3" style="letter-spacing: 5px;">Llámanos</h5>
                    <p class="m-0">+52 55 1234 5678</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Info End -->

<?php
get_template_part('template-parts/section', 'contact');

get_footer();
