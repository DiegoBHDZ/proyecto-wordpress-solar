<?php
/**
 * Funciones del tema
 *
 * @package Tema_Personal
 */

if (!defined('ABSPATH')) {
    exit; // Salir si se accede directamente
}

/**
 * Configuración del tema
 */
function tema_personal_setup() {
    // Soporte para título del sitio
    add_theme_support('title-tag');

    // Soporte para imágenes destacadas
    add_theme_support('post-thumbnails');

    // Soporte para HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Registro de menús
    register_nav_menus(array(
        'primary' => __('Menú Principal', 'tema-personal'),
    ));
}
add_action('after_setup_theme', 'tema_personal_setup');

/**
 * Encolar estilos y scripts
 */
function tema_personal_enqueue_scripts() {
    // Versión del tema
    $theme_version = '1.0.2';

    // Google Fonts - Poppins para TRAVELER
    wp_enqueue_style(
        'tema-personal-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css',
        array(),
        '5.10.0'
    );

    // Owl Carousel CSS
    wp_enqueue_style(
        'owl-carousel',
        get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css',
        array(),
        $theme_version
    );

    // Lightbox CSS
    wp_enqueue_style(
        'lightbox',
        get_template_directory_uri() . '/lib/lightbox/css/lightbox.min.css',
        array(),
        $theme_version
    );

    // Estilo principal del tema
    wp_enqueue_style(
        'tema-personal-style',
        get_template_directory_uri() . '/css/style.css',
        array(),
        $theme_version
    );

    // No cargar WordPress custom CSS (usamos el CSS de tema-blog directamente)

    // jQuery (WordPress lo incluye)
    wp_enqueue_script('jquery');

    // Bootstrap Bundle
    wp_enqueue_script(
        'bootstrap-bundle',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js',
        array('jquery'),
        '4.4.1',
        true
    );

    // Easing
    wp_enqueue_script(
        'easing',
        get_template_directory_uri() . '/lib/easing/easing.min.js',
        array('jquery'),
        $theme_version,
        true
    );

    // Waypoints
    wp_enqueue_script(
        'waypoints',
        get_template_directory_uri() . '/lib/waypoints/waypoints.min.js',
        array('jquery'),
        $theme_version,
        true
    );

    // Owl Carousel JS
    wp_enqueue_script(
        'owl-carousel',
        get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js',
        array('jquery'),
        $theme_version,
        true
    );

    // Isotope
    wp_enqueue_script(
        'isotope',
        get_template_directory_uri() . '/lib/isotope/isotope.pkgd.min.js',
        array('jquery'),
        $theme_version,
        true
    );

    // Lightbox JS
    wp_enqueue_script(
        'lightbox',
        get_template_directory_uri() . '/lib/lightbox/js/lightbox.min.js',
        array('jquery'),
        $theme_version,
        true
    );

    // Validación del formulario de contacto
    wp_enqueue_script(
        'contact-validation',
        get_template_directory_uri() . '/mail/jqBootstrapValidation.min.js',
        array('jquery'),
        $theme_version,
        true
    );

    // Manejador del formulario de contacto
    wp_enqueue_script(
        'contact-form',
        get_template_directory_uri() . '/mail/contact.js',
        array('jquery', 'contact-validation'),
        $theme_version,
        true
    );

    // Script principal del tema (usa el main.js original de Solar)
    wp_enqueue_script(
        'tema-personal-main',
        get_template_directory_uri() . '/js/main.js',
        array('jquery', 'bootstrap-bundle', 'easing', 'owl-carousel'),
        $theme_version,
        true
    );
}
add_action('wp_enqueue_scripts', 'tema_personal_enqueue_scripts');

/**
 * Obtener imagen por defecto del blog
 *
 * @param string $size Tamaño de la imagen ('full', 'thumbnail', 'medium', 'large')
 * @return string URL de la imagen por defecto
 */
function tema_personal_get_default_blog_image($size = 'full') {
    $default_image = get_template_directory_uri() . '/tema-blog/img/';

    switch ($size) {
        case 'thumbnail':
        case 'small':
            $default_image .= 'blog-100x100.jpg';
            break;
        default:
            $default_image .= 'blog-1.jpg';
            break;
    }

    return $default_image;
}
