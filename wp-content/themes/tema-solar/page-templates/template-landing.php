<?php
/**
 * Template Name: Landing Page
 *
 * Plantilla para Landing Page (página de aterrizaje)
 *
 * @package Tema Solar
 */

get_header();
?>

<?php
// Combinación ideal para conversión
get_template_part('template-parts/sections/hero-carousel');
get_template_part('template-parts/sections/services');
get_template_part('template-parts/sections/testimonials');
get_template_part('template-parts/sections/contact');
?>

<?php get_footer(); ?>
