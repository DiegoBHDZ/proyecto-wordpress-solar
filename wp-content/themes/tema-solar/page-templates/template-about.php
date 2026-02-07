<?php
/**
 * Template Name: About Page
 *
 * Plantilla para página "Sobre Nosotros"
 *
 * @package Tema Solar
 */

get_header();
?>

<?php
// Solo cargar las secciones relevantes para About
get_template_part('template-parts/sections/about');
get_template_part('template-parts/sections/team');
get_template_part('template-parts/sections/testimonials');
get_template_part('template-parts/sections/contact');
?>

<?php get_footer(); ?>
