<?php
/**
 * Template Name: Services
 * Description: Plantilla para página de Servicios
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Our Services</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Service Start -->
<div class="container-fluid py-5" id="service">
    <div class="container py-5">
        <div class="section-title position-relative text-center">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Services</h6>
            <h1 class="font-secondary display-4">What We Cover</h1>
        </div>

        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                if (get_the_content()) :
                    ?>
                    <div class="row mb-5">
                        <div class="col-12">
                            <div class="text-center">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                    <?php
                endif;
            endwhile;
        endif;
        ?>

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
            <div class="col-lg-4 mb-3">
                <div class="product-item mb-2">
                    <div class="product-img">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/product-1.jpg" alt="">
                        <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                            <i class="fa fa-2x fa-plus text-white"></i>
                        </a>
                    </div>
                    <div class="bg-secondary text-center p-4">
                        <h3 class="m-0">Solar Energy</h3>
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
                        <h3 class="m-0">Solar Panel</h3>
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
                        <h3 class="m-0">Solar Inverter</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- FAQs Start -->
<div class="container-fluid py-5" id="faqs">
    <div class="container py-5">
        <div class="section-title position-relative text-center">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">FAQs</h6>
            <h1 class="display-4">You Should Know</h1>
        </div>
        <div class="row">
            <div class="col-md-6 border-right border-primary">
                <div class="text-center text-md-right mr-md-3 mb-4 mb-md-0">
                    <h3 class="mb-4">Why Switch to Solar?</h3>
                    <h5 class="mb-3"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>Vero dolor amet no eos ipsum erat</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>Lorem tempor tempor gubergren dolor dolor dolor</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>Nonumy tempor dolores sadipscing duo</h5>
                    <h5 class="mb-0"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>Kasd dolor ea dolores ut nonumy</h5>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-center text-md-left ml-md-3">
                    <h3 class="mb-4">Why Choose Us?</h3>
                    <h5 class="mb-3"><i class="fa fa-check text-success mr-2"></i>Vero dolor amet no eos ipsum erat</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-success mr-2"></i>Lorem tempor tempor gubergren dolor dolor dolor</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-success mr-2"></i>Nonumy tempor dolores sadipscing duo</h5>
                    <h5 class="mb-0"><i class="fa fa-check text-success mr-2"></i>Kasd dolor ea dolores ut nonumy</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQs End -->

<?php get_footer(); ?>
