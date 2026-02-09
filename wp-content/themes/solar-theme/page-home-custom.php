<?php
/**
 * Template Name: Solar Home (HTML Original)
 * Description: Página de inicio con el HTML original del template
 */

// No incluir header/footer de WordPress, usamos el HTML completo
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class('data-spy="scroll" data-target=".navbar" data-offset="51"'); ?>>

<!-- Navbar Start -->
<nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-dark navbar-dark py-1 py-lg-0 px-lg-5">
    <a href="<?php echo home_url(); ?>" class="navbar-brand d-block d-lg-none">
        <h1 class="display-4 text-white text-uppercase m-0">Solar</h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav ml-auto py-0">
            <a href="#home" class="nav-item nav-link active">Home</a>
            <a href="#about" class="nav-item nav-link">About</a>
            <a href="#service" class="nav-item nav-link">Service</a>
            <a href="#project" class="nav-item nav-link">Project</a>
        </div>
        <a href="<?php echo home_url(); ?>" class="navbar-brand bg-primary px-4 mx-3 d-none d-lg-block">
            <h1 class="display-4 text-white text-uppercase m-0">Solar</h1>
        </a>
        <div class="navbar-nav mr-auto py-0">
            <a href="#team" class="nav-item nav-link">Team</a>
            <a href="#faqs" class="nav-item nav-link">FAQs</a>
            <a href="#testimonial" class="nav-item nav-link">Testimonial</a>
            <a href="#contact" class="nav-item nav-link">Contact</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 pb-5" id="home">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                <img class="position-absolute w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/img/carousel-1.jpg" style="object-fit: cover;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Solar Energy</h4>
                        <h3 class="display-2 font-secondary text-white mb-4">Innovative Solar Solution For Home</h3>
                        <a class="btn btn-light font-weight-bold py-3 px-5 mt-2 btn-scroll" href="#contact">Get A Quote</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                <img class="position-absolute w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/img/carousel-2.jpg" style="object-fit: cover;">
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
<!-- Carousel End -->

<!-- About Start -->
<div class="container-fluid py-5" id="about">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid mb-4 mb-lg-0" src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" alt="">
            </div>
            <div class="col-lg-7">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">About Us</h6>
                <h1 class="display-4 mb-3"><span class="text-primary">25+ Years Experience</span> In Solar Power Industry</h1>
                <p>At sed est eirmod sanctus et amet diam magna. Dolore clita magna sed sed stet et, at magna rebum eirmod sanctus ut sed, stet tempor dolore rebum sit duo, dolore tempor sit est sit sanctus, sit justo sit invidunt clita ut justo diam magna.</p>
                <a class="btn btn-primary font-weight-bold py-3 px-5 mt-2" type="button" data-toggle="modal" data-target="#exampleModalLong">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Service Start -->
<div class="container-fluid py-5" id="service">
    <div class="container py-5">
        <div class="section-title position-relative text-center">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Services</h6>
            <h1 class="font-secondary display-4">What We Cover</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="product-item mb-2">
                    <div class="product-img">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/product-1.jpg" alt="">
                        <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                            <i class="fa fa-2x fa-plus text-white"></i>
                        </a>
                    </div>
                    <div class="bg-secondary text-center p-4">
                        <h3 class="m-0">Solar System</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="product-item mb-2">
                    <div class="product-img">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/product-2.jpg" alt="">
                        <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                            <i class="fa fa-2x fa-plus text-white"></i>
                        </a>
                    </div>
                    <div class="bg-secondary text-center p-4">
                        <h3 class="m-0">Wind Turbine</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="product-item mb-2">
                    <div class="product-img">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/product-3.jpg" alt="">
                        <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                            <i class="fa fa-2x fa-plus text-white"></i>
                        </a>
                    </div>
                    <div class="bg-secondary text-center p-4">
                        <h3 class="m-0">Wind Generator</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<?php wp_footer(); ?>
</body>
</html>
