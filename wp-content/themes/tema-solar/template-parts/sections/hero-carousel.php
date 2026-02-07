<?php
/**
 * Template part - Hero Carousel (Dynamic Version)
 *
 * Versión dinámica con array de slides personalizable
 *
 * @package Tema Solar
 */

// Define tus slides aquí - ¡Fácil de personalizar!
$slides = array(
    array(
        'image' => 'carousel-1.jpg',  // ← Cambia por tu imagen
        'subtitle' => 'Energía Solar',
        'title' => 'Solución Solar Innovadora Para Tu Hogar',
        'button_text' => 'Solicitar Cotización',
        'button_link' => '#contact'
    ),
    array(
        'image' => 'carousel-2.jpg',  // ← Cambia por tu imagen
        'subtitle' => 'Energía Renovable',
        'title' => 'Deja Que El Sol Trabaje Para Ti',
        'button_text' => 'Más Información',
        'button_link' => '#about'
    ),
    // Puedes agregar más slides aquí fácilmente:
    /*
    array(
        'image' => 'carousel-3.jpg',
        'subtitle' => 'Tu texto',
        'title' => 'Tu título',
        'button_text' => 'Tu botón',
        'button_link' => '#services'
    ),
    */
);
?>

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 pb-5" id="home">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($slides as $index => $slide) : ?>
                <div class="carousel-item position-relative <?php echo ($index === 0) ? 'active' : ''; ?>" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo esc_attr($slide['image']); ?>"
                         style="object-fit: cover;"
                         alt="<?php echo esc_attr($slide['title']); ?>">

                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">
                                <?php echo esc_html($slide['subtitle']); ?>
                            </h4>
                            <h3 class="display-2 font-secondary text-white mb-4">
                                <?php echo esc_html($slide['title']); ?>
                            </h3>
                            <a class="btn btn-light font-weight-bold py-3 px-5 mt-2 btn-scroll"
                               href="<?php echo esc_url($slide['button_link']); ?>">
                                <?php echo esc_html($slide['button_text']); ?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Controles de navegación -->
        <a class="carousel-control-prev justify-content-start" href="#header-carousel" data-slide="prev">
            <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                <span class="carousel-control-prev-icon mt-3"></span>
            </div>
        </a>
        <a class="carousel-control-next justify-content-end" href="#header-carousel" data-slide="next">
            <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                <span class="carousel-control-next-icon mt-3"></span>
            </div>
        </a>
    </div>
</div>
<!-- Carousel End -->
