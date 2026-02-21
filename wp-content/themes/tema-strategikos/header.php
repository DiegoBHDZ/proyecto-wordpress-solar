<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?php bloginfo('name'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- Favicon -->
    <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" rel="icon">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-dark navbar-dark py-1 py-lg-0 px-lg-5">
        <a href="<?php echo home_url(); ?>" class="navbar-brand d-block d-lg-none">
            <h1 class="display-4 text-white text-uppercase m-0">Strategikos</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto py-0">
                <a href="<?php echo is_front_page() ? '#home' : home_url('/#home'); ?>" class="nav-item nav-link <?php echo is_front_page() ? 'active' : ''; ?>">Inicio</a>
                <a href="<?php echo is_front_page() ? '#about' : home_url('/#about'); ?>" class="nav-item nav-link">Nosotros</a>
                <a href="<?php echo is_front_page() ? '#service' : home_url('/#service'); ?>" class="nav-item nav-link">Servicios</a>
                <a href="<?php echo is_front_page() ? '#project' : home_url('/#project'); ?>" class="nav-item nav-link">Proyectos</a>
            </div>
            <a href="<?php echo home_url(); ?>" class="navbar-brand bg-primary px-4 mx-3 d-none d-lg-block">
                <h1 class="display-4 text-white text-uppercase m-0">Strategikos</h1>
            </a>
            <div class="navbar-nav mr-auto py-0">
                <a href="<?php echo is_front_page() ? '#team' : home_url('/#team'); ?>" class="nav-item nav-link">Equipo</a>
                <a href="<?php echo is_front_page() ? '#blog' : home_url('/#blog'); ?>" class="nav-item nav-link">Blog</a>
                <a href="<?php echo is_front_page() ? '#faqs' : home_url('/#faqs'); ?>" class="nav-item nav-link">FAQs</a>
                <a href="<?php echo is_front_page() ? '#contact' : home_url('/#contact'); ?>" class="nav-item nav-link">Contacto</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

