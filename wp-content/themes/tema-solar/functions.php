<?php
/**
 * Tema Solar Energy - Functions and Definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tema Solar Energy
 * @subpackage Tema_Solar
 * @since 1.0.0
 */

// Prevenir acceso directo
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since 1.0.0
 *
 * @return void
 */
if (!function_exists('tema_solar_setup')) :
    function tema_solar_setup() {
        // Hacer el tema traducible
        load_theme_textdomain('tema-solar', get_template_directory() . '/languages');

        // Soporte para título dinámico
        add_theme_support('title-tag');

        // Soporte para imágenes destacadas
        add_theme_support('post-thumbnails');

        // Soporte para formatos de post
        add_theme_support('post-formats', array(
            'aside',
            'gallery',
            'image',
            'video',
            'quote',
            'link'
        ));

        // Soporte para HTML5
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ));

        // Soporte para logos personalizados
        add_theme_support('custom-logo', array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
        ));

        // Soporte para selectivo refresh en el Customizer
        add_theme_support('customize-selective-refresh-widgets');

        // Soporte para alineación ancha en bloques
        add_theme_support('align-wide');

        // Soporte para estilos de editor
        add_theme_support('editor-styles');

        // Soporte para responsive embeds
        add_theme_support('responsive-embeds');

        // Soporte para colores personalizados en el editor
        add_theme_support('editor-color-palette', array(
            array(
                'name'  => __('Primary', 'tema-solar'),
                'slug'  => 'primary',
                'color' => '#FEC910',
            ),
            array(
                'name'  => __('Secondary', 'tema-solar'),
                'slug'  => 'secondary',
                'color' => '#F4F5F8',
            ),
            array(
                'name'  => __('Dark', 'tema-solar'),
                'slug'  => 'dark',
                'color' => '#292B2E',
            ),
            array(
                'name'  => __('Light', 'tema-solar'),
                'slug'  => 'light',
                'color' => '#FFFFFF',
            ),
            array(
                'name'  => __('Success', 'tema-solar'),
                'slug'  => 'success',
                'color' => '#28A745',
            ),
        ));

        // Soporte para tamaños de fuente en el editor
        add_theme_support('editor-font-sizes', array(
            array(
                'name' => __('Small', 'tema-solar'),
                'size' => 14,
                'slug' => 'small'
            ),
            array(
                'name' => __('Normal', 'tema-solar'),
                'size' => 16,
                'slug' => 'normal'
            ),
            array(
                'name' => __('Medium', 'tema-solar'),
                'size' => 22,
                'slug' => 'medium'
            ),
            array(
                'name' => __('Large', 'tema-solar'),
                'size' => 36,
                'slug' => 'large'
            ),
            array(
                'name' => __('Huge', 'tema-solar'),
                'size' => 48,
                'slug' => 'huge'
            )
        ));

        // Registrar menú de navegación
        register_nav_menus(array(
            'primary' => __('Menú Principal', 'tema-solar'),
            'footer'  => __('Menú Footer', 'tema-solar'),
        ));

        // Tamaños de imagen personalizados
        add_image_size('solar-carousel', 1920, 1080, true);
        add_image_size('solar-gallery', 800, 600, true);
        add_image_size('solar-team', 600, 800, true);
        add_image_size('solar-thumbnail', 400, 300, true);
    }
endif;
add_action('after_setup_theme', 'tema_solar_setup');

/**
 * Enqueue editor styles.
 *
 * @since 1.0.0
 *
 * @return void
 */
if (!function_exists('tema_solar_editor_style')) :
    function tema_solar_editor_style() {
        add_editor_style('assets/css/editor-style.css');
    }
endif;
add_action('after_setup_theme', 'tema_solar_editor_style');

/**
 * Enqueue theme styles and scripts.
 *
 * @since 1.0.0
 *
 * @return void
 */
if (!function_exists('tema_solar_scripts')) :
    function tema_solar_scripts() {
        // Determinar si usar versión minificada
        $suffix = (defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) ? '' : '.min';
        $theme_version = wp_get_theme()->get('Version');

        // Google Fonts
        wp_enqueue_style(
            'tema-solar-google-fonts',
            'https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@500;700&display=swap',
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
            get_template_directory_uri() . '/assets/lib/owlcarousel/assets/owl.carousel.min.css',
            array(),
            '2.3.4'
        );

        // Lightbox CSS
        wp_enqueue_style(
            'lightbox',
            get_template_directory_uri() . '/assets/lib/lightbox/css/lightbox.min.css',
            array(),
            '2.11.3'
        );

        // Estilo principal del tema
        $style_src = 'style' . $suffix . '.css';
        wp_enqueue_style(
            'tema-solar-style',
            get_template_directory_uri() . '/' . $style_src,
            array(),
            $theme_version
        );
        wp_style_add_data(
            'tema-solar-style',
            'path',
            get_template_directory() . '/' . $style_src
        );

        // Estilos adicionales del tema
        wp_enqueue_style(
            'tema-solar-main-style',
            get_template_directory_uri() . '/assets/css/style.css',
            array('tema-solar-style'),
            $theme_version
        );

        // jQuery (viene incluido en WordPress)
        wp_enqueue_script('jquery');

        // Bootstrap Bundle (incluye Popper)
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
            get_template_directory_uri() . '/assets/lib/easing/easing.min.js',
            array('jquery'),
            '1.0',
            true
        );

        // Waypoints
        wp_enqueue_script(
            'waypoints',
            get_template_directory_uri() . '/assets/lib/waypoints/waypoints.min.js',
            array('jquery'),
            '4.0.1',
            true
        );

        // Owl Carousel
        wp_enqueue_script(
            'owl-carousel',
            get_template_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.min.js',
            array('jquery'),
            '2.3.4',
            true
        );

        // Isotope
        wp_enqueue_script(
            'isotope',
            get_template_directory_uri() . '/assets/lib/isotope/isotope.pkgd.min.js',
            array('jquery'),
            '3.0.6',
            true
        );

        // Lightbox
        wp_enqueue_script(
            'lightbox',
            get_template_directory_uri() . '/assets/lib/lightbox/js/lightbox.min.js',
            array('jquery'),
            '2.11.3',
            true
        );

        // Contact Form Scripts
        wp_enqueue_script(
            'jq-validation',
            get_template_directory_uri() . '/assets/mail/jqBootstrapValidation.min.js',
            array('jquery'),
            '1.0',
            true
        );
        wp_enqueue_script(
            'contact-form',
            get_template_directory_uri() . '/assets/mail/contact.js',
            array('jquery', 'jq-validation'),
            '1.0',
            true
        );

        // Main JS del tema
        wp_enqueue_script(
            'tema-solar-main',
            get_template_directory_uri() . '/assets/js/main.js',
            array('jquery'),
            $theme_version,
            true
        );

        // Agregar soporte para comentarios threaded
        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }
endif;
add_action('wp_enqueue_scripts', 'tema_solar_scripts');

/**
 * Register custom block styles.
 *
 * @since 1.0.0
 *
 * @return void
 */
if (!function_exists('tema_solar_block_styles')) :
    function tema_solar_block_styles() {
        // Estilo de lista con checkmarks
        register_block_style(
            'core/list',
            array(
                'name'         => 'checkmark-list',
                'label'        => __('Checkmark', 'tema-solar'),
                'inline_style' => '
                    ul.is-style-checkmark-list {
                        list-style-type: "\2713";
                    }
                    ul.is-style-checkmark-list li {
                        padding-inline-start: 1ch;
                    }',
            )
        );

        // Botón con sombra
        register_block_style(
            'core/button',
            array(
                'name'  => 'shadow-button',
                'label' => __('Shadow Button', 'tema-solar'),
            )
        );
    }
endif;
add_action('init', 'tema_solar_block_styles');

/**
 * Register pattern categories.
 *
 * @since 1.0.0
 *
 * @return void
 */
if (!function_exists('tema_solar_pattern_categories')) :
    function tema_solar_pattern_categories() {
        register_block_pattern_category(
            'tema-solar-pages',
            array(
                'label'       => __('Pages', 'tema-solar'),
                'description' => __('Full page layouts for Solar Energy theme.', 'tema-solar'),
            )
        );

        register_block_pattern_category(
            'tema-solar-sections',
            array(
                'label'       => __('Sections', 'tema-solar'),
                'description' => __('Reusable sections for building pages.', 'tema-solar'),
            )
        );

        register_block_pattern_category(
            'tema-solar-cta',
            array(
                'label'       => __('Call to Action', 'tema-solar'),
                'description' => __('Call to action patterns.', 'tema-solar'),
            )
        );
    }
endif;
add_action('init', 'tema_solar_pattern_categories');

/**
 * Register widget areas.
 *
 * @since 1.0.0
 *
 * @return void
 */
if (!function_exists('tema_solar_widgets_init')) :
    function tema_solar_widgets_init() {
        register_sidebar(array(
            'name'          => __('Sidebar Principal', 'tema-solar'),
            'id'            => 'sidebar-1',
            'description'   => __('Sidebar que aparece en el blog', 'tema-solar'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ));

        register_sidebar(array(
            'name'          => __('Footer 1', 'tema-solar'),
            'id'            => 'footer-1',
            'description'   => __('Área de widgets del footer - Columna 1', 'tema-solar'),
            'before_widget' => '<div id="%1$s" class="widget %2$s mb-5">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">',
            'after_title'   => '</h5>',
        ));

        register_sidebar(array(
            'name'          => __('Footer 2', 'tema-solar'),
            'id'            => 'footer-2',
            'description'   => __('Área de widgets del footer - Columna 2', 'tema-solar'),
            'before_widget' => '<div id="%1$s" class="widget %2$s mb-5">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">',
            'after_title'   => '</h5>',
        ));

        register_sidebar(array(
            'name'          => __('Footer 3', 'tema-solar'),
            'id'            => 'footer-3',
            'description'   => __('Área de widgets del footer - Columna 3', 'tema-solar'),
            'before_widget' => '<div id="%1$s" class="widget %2$s mb-5">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">',
            'after_title'   => '</h5>',
        ));
    }
endif;
add_action('widgets_init', 'tema_solar_widgets_init');

/**
 * Customize excerpt length.
 *
 * @since 1.0.0
 *
 * @param int $length Excerpt length.
 * @return int Modified excerpt length.
 */
if (!function_exists('tema_solar_excerpt_length')) :
    function tema_solar_excerpt_length($length) {
        return 30;
    }
endif;
add_filter('excerpt_length', 'tema_solar_excerpt_length');

/**
 * Customize excerpt more string.
 *
 * @since 1.0.0
 *
 * @param string $more The excerpt more string.
 * @return string Modified excerpt more string.
 */
if (!function_exists('tema_solar_excerpt_more')) :
    function tema_solar_excerpt_more($more) {
        return '...';
    }
endif;
add_filter('excerpt_more', 'tema_solar_excerpt_more');

/**
 * Register custom page templates from page-templates folder.
 *
 * @since 1.0.0
 *
 * @param array $templates Array of page templates.
 * @return array Modified array of page templates.
 */
if (!function_exists('tema_solar_register_page_templates')) :
    function tema_solar_register_page_templates($templates) {
        $templates['page-templates/template-home.php'] = __('Home Solar', 'tema-solar');
        $templates['page-templates/template-about.php'] = __('About Page', 'tema-solar');
        $templates['page-templates/template-services.php'] = __('Services Page', 'tema-solar');
        $templates['page-templates/template-landing.php'] = __('Landing Page', 'tema-solar');
        $templates['page-templates/template-portfolio.php'] = __('Portfolio Page', 'tema-solar');

        return $templates;
    }
endif;
add_filter('theme_page_templates', 'tema_solar_register_page_templates');

/**
 * Load page template from page-templates folder.
 *
 * @since 1.0.0
 *
 * @param string $template The path of the template to include.
 * @return string Modified template path.
 */
if (!function_exists('tema_solar_load_page_template')) :
    function tema_solar_load_page_template($template) {
        global $post;

        if (!$post) {
            return $template;
        }

        $page_template = get_post_meta($post->ID, '_wp_page_template', true);

        if (strpos($page_template, 'page-templates/') === 0) {
            $file = get_template_directory() . '/' . $page_template;
            if (file_exists($file)) {
                return $file;
            }
        }

        return $template;
    }
endif;
add_filter('template_include', 'tema_solar_load_page_template', 99);

/**
 * Add custom query vars for pagination.
 *
 * @since 1.0.0
 *
 * @param array $vars The array of available query variables.
 * @return array Modified query variables.
 */
if (!function_exists('tema_solar_query_vars')) :
    function tema_solar_query_vars($vars) {
        $vars[] = 'solar_page';
        return $vars;
    }
endif;
add_filter('query_vars', 'tema_solar_query_vars');

/**
 * Add theme support for WooCommerce (optional).
 *
 * @since 1.0.0
 *
 * @return void
 */
if (!function_exists('tema_solar_woocommerce_support')) :
    function tema_solar_woocommerce_support() {
        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');
    }
endif;
add_action('after_setup_theme', 'tema_solar_woocommerce_support');
