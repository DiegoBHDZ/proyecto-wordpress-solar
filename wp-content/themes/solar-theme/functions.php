<?php
/**
 * Solar Energy Theme Functions
 *
 * @package Solar_Theme
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function solar_theme_setup() {
    // Add theme support
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));

    // Add support for block styles
    add_theme_support('wp-block-styles');

    // Add support for editor styles
    add_theme_support('editor-styles');

    // Add support for wide and full alignments
    add_theme_support('align-wide');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'solar-theme'),
        'footer' => __('Footer Menu', 'solar-theme')
    ));
}
add_action('after_setup_theme', 'solar_theme_setup');

/**
 * Enqueue Theme Styles and Scripts
 */
function solar_theme_enqueue_scripts() {
    // Get theme version
    $theme_version = wp_get_theme()->get('Version');

    // Enqueue Google Fonts
    wp_enqueue_style(
        'solar-theme-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@500;700&display=swap',
        array(),
        null
    );

    // Enqueue Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css',
        array(),
        '5.10.0'
    );

    // Enqueue Owl Carousel CSS
    wp_enqueue_style(
        'owl-carousel',
        get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css',
        array(),
        $theme_version
    );

    // Enqueue Lightbox CSS
    wp_enqueue_style(
        'lightbox',
        get_template_directory_uri() . '/lib/lightbox/css/lightbox.min.css',
        array(),
        $theme_version
    );

    // Enqueue main theme stylesheet
    wp_enqueue_style(
        'solar-theme-style',
        get_template_directory_uri() . '/css/style.css',
        array(),
        $theme_version
    );

    // Enqueue WordPress Blocks Compatibility CSS
    wp_enqueue_style(
        'solar-theme-blocks-compatibility',
        get_template_directory_uri() . '/assets/css/blocks-compatibility.css',
        array('solar-theme-style'),
        $theme_version
    );

    // Enqueue WordPress Overrides CSS (loaded last for highest priority)
    wp_enqueue_style(
        'solar-theme-wordpress-overrides',
        get_template_directory_uri() . '/assets/css/wordpress-overrides.css',
        array('solar-theme-blocks-compatibility'),
        $theme_version
    );

    // Enqueue jQuery (WordPress includes it)
    wp_enqueue_script('jquery');

    // Enqueue Bootstrap Bundle
    wp_enqueue_script(
        'bootstrap-bundle',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js',
        array('jquery'),
        '4.4.1',
        true
    );

    // Enqueue Easing
    wp_enqueue_script(
        'easing',
        get_template_directory_uri() . '/lib/easing/easing.min.js',
        array('jquery'),
        $theme_version,
        true
    );

    // Enqueue Waypoints
    wp_enqueue_script(
        'waypoints',
        get_template_directory_uri() . '/lib/waypoints/waypoints.min.js',
        array('jquery'),
        $theme_version,
        true
    );

    // Enqueue Owl Carousel
    wp_enqueue_script(
        'owl-carousel',
        get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js',
        array('jquery'),
        $theme_version,
        true
    );

    // Enqueue Isotope
    wp_enqueue_script(
        'isotope',
        get_template_directory_uri() . '/lib/isotope/isotope.pkgd.min.js',
        array('jquery'),
        $theme_version,
        true
    );

    // Enqueue Lightbox
    wp_enqueue_script(
        'lightbox',
        get_template_directory_uri() . '/lib/lightbox/js/lightbox.min.js',
        array('jquery'),
        $theme_version,
        true
    );

    // Enqueue Contact Form Validation
    wp_enqueue_script(
        'contact-validation',
        get_template_directory_uri() . '/mail/jqBootstrapValidation.min.js',
        array('jquery'),
        $theme_version,
        true
    );

    // Enqueue Contact Form Handler
    wp_enqueue_script(
        'contact-form',
        get_template_directory_uri() . '/mail/contact.js',
        array('jquery', 'contact-validation'),
        $theme_version,
        true
    );

    // Enqueue main theme script
    wp_enqueue_script(
        'solar-theme-main',
        get_template_directory_uri() . '/js/main.js',
        array('jquery'),
        $theme_version,
        true
    );

    // Add AJAX URL for contact form
    wp_localize_script('contact-form', 'solarTheme', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('solar_contact_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'solar_theme_enqueue_scripts');

/**
 * Register Block Patterns Category
 */
function solar_theme_register_block_patterns_category() {
    if (function_exists('register_block_pattern_category')) {
        register_block_pattern_category(
            'solar-theme',
            array(
                'label' => __('Solar Theme', 'solar-theme'),
                'description' => __('A collection of patterns for the Solar Energy theme.', 'solar-theme')
            )
        );
    }
}
add_action('init', 'solar_theme_register_block_patterns_category');

/**
 * Handle Contact Form Submission via AJAX
 */
function solar_theme_handle_contact_form() {
    // Verify nonce
    check_ajax_referer('solar_contact_nonce', 'nonce');

    // Sanitize input
    $name = sanitize_text_field($_POST['name'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');
    $subject = sanitize_text_field($_POST['subject'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    // Validate
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        wp_send_json_error(array('message' => __('All fields are required.', 'solar-theme')));
    }

    if (!is_email($email)) {
        wp_send_json_error(array('message' => __('Invalid email address.', 'solar-theme')));
    }

    // Get admin email
    $to = get_option('admin_email');
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: ' . $name . ' <' . $email . '>',
        'Reply-To: ' . $email
    );

    // Email body
    $body = sprintf(
        __('<strong>Name:</strong> %s<br><strong>Email:</strong> %s<br><strong>Subject:</strong> %s<br><br><strong>Message:</strong><br>%s', 'solar-theme'),
        $name,
        $email,
        $subject,
        nl2br($message)
    );

    // Send email
    $sent = wp_mail($to, 'Contact Form: ' . $subject, $body, $headers);

    if ($sent) {
        wp_send_json_success(array('message' => __('Your message has been sent successfully!', 'solar-theme')));
    } else {
        wp_send_json_error(array('message' => __('There was an error sending your message. Please try again.', 'solar-theme')));
    }
}
add_action('wp_ajax_solar_contact_form', 'solar_theme_handle_contact_form');
add_action('wp_ajax_nopriv_solar_contact_form', 'solar_theme_handle_contact_form');

/**
 * Add custom body classes
 */
function solar_theme_body_classes($classes) {
    // Add a class for scroll spy
    $classes[] = 'scrollspy-enabled';

    return $classes;
}
add_filter('body_class', 'solar_theme_body_classes');

/**
 * Hero Carousel Shortcode
 */
function solar_theme_hero_carousel_shortcode() {
    $theme_url = get_template_directory_uri();

    ob_start();
    ?>
    <div class="container-fluid p-0 mb-5 pb-5" id="home">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="<?php echo esc_url($theme_url); ?>/img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Solar Energy</h4>
                            <h3 class="display-2 font-secondary text-white mb-4">Innovative Solar Solution For Home</h3>
                            <a class="btn btn-light font-weight-bold py-3 px-5 mt-2 btn-scroll" href="#contact">Get A Quote</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="<?php echo esc_url($theme_url); ?>/img/carousel-2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Solar Energy</h4>
                            <h3 class="display-2 font-secondary text-white mb-4">Let The Sun Work For Your Home</h3>
                            <a class="btn btn-light font-weight-bold py-3 px-5 mt-2 btn-scroll" href="#contact">Get A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
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
    <?php
    return ob_get_clean();
}
add_shortcode('solar_hero_carousel', 'solar_theme_hero_carousel_shortcode');
