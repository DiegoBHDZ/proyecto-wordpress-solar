<?php
/**
 * Template Name: Home Solar
 *
 * Template modular para la página principal
 *
 * @package Tema Solar
 */

get_header();
?>

<?php
// Cargar secciones modulares
get_template_part('template-parts/sections/hero-carousel');
get_template_part('template-parts/sections/about');
get_template_part('template-parts/sections/services');
get_template_part('template-parts/sections/gallery');
get_template_part('template-parts/sections/team');
get_template_part('template-parts/sections/faqs');
get_template_part('template-parts/sections/testimonials');
get_template_part('template-parts/sections/contact');
?>

<?php get_footer(); ?>
