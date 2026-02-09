<?php
/**
 * Template Name: Projects Gallery
 * Description: Plantilla para galería de proyectos
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Our Projects</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Projects</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Gallery Start -->
<div class="container-fluid py-5" id="project">
    <div class="container py-5">
        <div class="section-title position-relative text-center">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Projects</h6>
            <h1 class="font-secondary display-4">Project Photo Gallery</h1>
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
            <div class="col-12 text-center mb-2">
                <ul class="list-inline mb-4" id="portfolio-flters">
                    <li class="btn btn-outline-primary font-weight-bold m-1 py-2 px-4 active" data-filter="*">All</li>
                    <li class="btn btn-outline-primary font-weight-bold m-1 py-2 px-4" data-filter=".first">Solar Panel</li>
                    <li class="btn btn-outline-primary font-weight-bold m-1 py-2 px-4" data-filter=".second">Wind Turbine</li>
                    <li class="btn btn-outline-primary font-weight-bold m-1 py-2 px-4" data-filter=".third">Hydropower</li>
                </ul>
            </div>
        </div>
        <div class="row mx-1 portfolio-container">
            <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/img/gallery-1.jpg" alt="">
                    <a class="portfolio-btn" href="<?php echo get_template_directory_uri(); ?>/img/gallery-1.jpg" data-lightbox="portfolio">
                        <i class="fa fa-4x fa-plus text-primary"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item second">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/img/gallery-2.jpg" alt="">
                    <a class="portfolio-btn" href="<?php echo get_template_directory_uri(); ?>/img/gallery-2.jpg" data-lightbox="portfolio">
                        <i class="fa fa-4x fa-plus text-primary"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item third">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/img/gallery-3.jpg" alt="">
                    <a class="portfolio-btn" href="<?php echo get_template_directory_uri(); ?>/img/gallery-3.jpg" data-lightbox="portfolio">
                        <i class="fa fa-4x fa-plus text-primary"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/img/gallery-4.jpg" alt="">
                    <a class="portfolio-btn" href="<?php echo get_template_directory_uri(); ?>/img/gallery-4.jpg" data-lightbox="portfolio">
                        <i class="fa fa-4x fa-plus text-primary"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item second">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/img/gallery-5.jpg" alt="">
                    <a class="portfolio-btn" href="<?php echo get_template_directory_uri(); ?>/img/gallery-5.jpg" data-lightbox="portfolio">
                        <i class="fa fa-4x fa-plus text-primary"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item third">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/img/gallery-6.jpg" alt="">
                    <a class="portfolio-btn" href="<?php echo get_template_directory_uri(); ?>/img/gallery-6.jpg" data-lightbox="portfolio">
                        <i class="fa fa-4x fa-plus text-primary"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery End -->

<?php get_footer(); ?>
