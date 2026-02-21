<?php
/**
 * Funciones del tema
 *
 * @package Tema_Strategikos
 */

if (!defined('ABSPATH')) {
    exit; // Salir si se accede directamente
}

/**
 * Configuración del tema
 */
function tema_strategikos_setup() {
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
        'primary' => __('Menú Principal', 'tema-strategikos'),
    ));
}
add_action('after_setup_theme', 'tema_strategikos_setup');

/**
 * Encolar estilos y scripts
 */
function tema_strategikos_enqueue_scripts() {
    // Versión del tema
    $theme_version = '1.0.5';

    // Google Fonts - Poppins para TRAVELER
    wp_enqueue_style(
        'tema-strategikos-fonts',
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
        'tema-strategikos-style',
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
        'tema-strategikos-main',
        get_template_directory_uri() . '/js/main.js',
        array('jquery', 'bootstrap-bundle', 'easing', 'owl-carousel'),
        $theme_version,
        true
    );
}
add_action('wp_enqueue_scripts', 'tema_strategikos_enqueue_scripts');

/**
 * Obtener imagen por defecto del blog
 *
 * @param string $size Tamaño de la imagen ('full', 'thumbnail', 'medium', 'large')
 * @return string URL de la imagen por defecto
 */
function tema_strategikos_get_default_blog_image($size = 'full') {
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

/**
 * Registrar Custom Post Types de Strategikos
 */
function strategikos_register_post_types() {
    // CPT: Proyectos
    register_post_type('proyectos', array(
        'labels' => array(
            'name'               => 'Proyectos',
            'singular_name'      => 'Proyecto',
            'add_new'            => 'Añadir Proyecto',
            'add_new_item'       => 'Añadir Nuevo Proyecto',
            'edit_item'          => 'Editar Proyecto',
            'new_item'           => 'Nuevo Proyecto',
            'view_item'          => 'Ver Proyecto',
            'search_items'       => 'Buscar Proyectos',
            'not_found'          => 'No se encontraron proyectos',
            'not_found_in_trash' => 'No hay proyectos en la papelera',
        ),
        'public'       => true,
        'has_archive'  => false,
        'show_in_rest' => true,
        'supports'     => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'    => 'dashicons-portfolio',
        'rewrite'      => array('slug' => 'proyectos'),
    ));

    // CPT: Equipo
    register_post_type('equipo', array(
        'labels' => array(
            'name'               => 'Equipo',
            'singular_name'      => 'Miembro',
            'add_new'            => 'Añadir Miembro',
            'add_new_item'       => 'Añadir Nuevo Miembro',
            'edit_item'          => 'Editar Miembro',
            'new_item'           => 'Nuevo Miembro',
            'view_item'          => 'Ver Miembro',
            'search_items'       => 'Buscar Miembros',
            'not_found'          => 'No se encontraron miembros',
            'not_found_in_trash' => 'No hay miembros en la papelera',
        ),
        'public'       => false,
        'show_ui'      => true,
        'show_in_rest' => true,
        'supports'     => array('title', 'editor', 'thumbnail', 'page-attributes'),
        'menu_icon'    => 'dashicons-groups',
    ));
}
add_action('init', 'strategikos_register_post_types');

/**
 * Registrar Taxonomía: Sector (para Proyectos)
 */
function strategikos_register_sector_taxonomy() {
    register_taxonomy('sector', 'proyectos', array(
        'hierarchical' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name'              => 'Sectores',
            'singular_name'     => 'Sector',
            'search_items'      => 'Buscar Sectores',
            'all_items'         => 'Todos los Sectores',
            'edit_item'         => 'Editar Sector',
            'update_item'       => 'Actualizar Sector',
            'add_new_item'      => 'Añadir Nuevo Sector',
            'new_item_name'     => 'Nuevo Nombre de Sector',
            'menu_name'         => 'Sectores',
        ),
        'rewrite' => array('slug' => 'sector'),
    ));
}
add_action('init', 'strategikos_register_sector_taxonomy');

/**
 * Meta box: Cargo del miembro de equipo
 */
function strategikos_equipo_meta_boxes() {
    add_meta_box(
        'equipo_cargo',
        'Cargo / Rol',
        'strategikos_equipo_cargo_render',
        'equipo',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'strategikos_equipo_meta_boxes');

function strategikos_equipo_cargo_render($post) {
    $cargo = get_post_meta($post->ID, '_equipo_cargo', true);
    wp_nonce_field('strategikos_equipo_cargo', 'equipo_cargo_nonce');
    echo '<label for="equipo_cargo">Cargo o rol del miembro:</label>';
    echo '<input type="text" name="equipo_cargo" id="equipo_cargo" value="' . esc_attr($cargo) . '" class="widefat" style="margin-top:5px;">';
}

function strategikos_equipo_cargo_save($post_id) {
    if (!isset($_POST['equipo_cargo_nonce'])) return;
    if (!wp_verify_nonce($_POST['equipo_cargo_nonce'], 'strategikos_equipo_cargo')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;
    update_post_meta($post_id, '_equipo_cargo', sanitize_text_field($_POST['equipo_cargo']));
}
add_action('save_post_equipo', 'strategikos_equipo_cargo_save');

/**
 * Customizer: Datos de contacto del footer
 */
function strategikos_customizer($wp_customize) {

    // Sección: Información de Contacto
    $wp_customize->add_section('strategikos_contacto', array(
        'title'    => 'Información de Contacto',
        'priority' => 30,
    ));

    // Dirección
    $wp_customize->add_setting('footer_direccion', array(
        'default'           => 'Av. Insurgentes Sur 123, Ciudad de México, México',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_direccion', array(
        'label'   => 'Dirección',
        'section' => 'strategikos_contacto',
        'type'    => 'text',
    ));

    // Email
    $wp_customize->add_setting('footer_email', array(
        'default'           => 'contacto@strategikos.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('footer_email', array(
        'label'   => 'Correo electrónico',
        'section' => 'strategikos_contacto',
        'type'    => 'text',
    ));

    // Teléfono
    $wp_customize->add_setting('footer_telefono', array(
        'default'           => '+52 55 1234 5678',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_telefono', array(
        'label'   => 'Teléfono',
        'section' => 'strategikos_contacto',
        'type'    => 'text',
    ));

    // Descripción del footer
    $wp_customize->add_setting('footer_descripcion', array(
        'default'           => 'Strategikos es una firma especializada en análisis de riesgos territoriales y consultoría en seguridad integral.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('footer_descripcion', array(
        'label'   => 'Descripción (footer)',
        'section' => 'strategikos_contacto',
        'type'    => 'textarea',
    ));

    // Sección: Redes Sociales
    $wp_customize->add_section('strategikos_redes', array(
        'title'    => 'Redes Sociales',
        'priority' => 31,
    ));

    foreach (array(
        'twitter'   => 'Twitter (URL)',
        'facebook'  => 'Facebook (URL)',
        'linkedin'  => 'LinkedIn (URL)',
        'instagram' => 'Instagram (URL)',
    ) as $red => $label) {
        $wp_customize->add_setting('footer_' . $red, array(
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control('footer_' . $red, array(
            'label'   => $label,
            'section' => 'strategikos_redes',
            'type'    => 'url',
        ));
    }
}
add_action('customize_register', 'strategikos_customizer');
