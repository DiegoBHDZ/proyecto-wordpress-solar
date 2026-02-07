<?php
/**
 * Template Name: Portfolio Page
 *
 * Plantilla para mostrar proyectos/portafolio
 *
 * @package Tema Solar
 */

get_header();
?>

<?php
// Enfocado en mostrar trabajos
get_template_part('template-parts/sections/gallery');
get_template_part('template-parts/sections/testimonials');
get_template_part('template-parts/sections/contact');
?>

<?php get_footer(); ?>
