<?php
/**
 * Template Name: Página de Inicio Solar
 * Description: Página principal con diseño completo del template Solar
 */

get_header();

get_template_part('template-parts/section', 'home');
get_template_part('template-parts/section', 'about');
get_template_part('template-parts/section', 'services');
get_template_part('template-parts/section', 'projects');
get_template_part('template-parts/section', 'team');
get_template_part('template-parts/section', 'blog');
get_template_part('template-parts/section', 'faqs');
get_template_part('template-parts/section', 'testimonial');
get_template_part('template-parts/section', 'contact');

get_footer();
