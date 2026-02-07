<?php
/**
 * Template Name: Services Page
 *
 * Plantilla para página de Servicios
 *
 * @package Tema Solar
 */

get_header();
?>

<?php
// Solo secciones relacionadas con servicios
get_template_part('template-parts/sections/services');
get_template_part('template-parts/sections/gallery');
get_template_part('template-parts/sections/faqs');
get_template_part('template-parts/sections/contact');
?>

<?php get_footer(); ?>
