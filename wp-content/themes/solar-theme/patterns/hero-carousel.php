<?php
/**
 * Title: Hero Carousel
 * Slug: solar-theme/hero-carousel
 * Categories: solar-theme, featured
 * Description: Full-screen hero carousel with solar energy messaging
 */
?>

<!-- wp:html -->
<div class="container-fluid p-0 mb-5 pb-5" id="home">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                <img class="position-absolute w-100 h-100" src="/wp-content/themes/solar-theme/img/carousel-1.jpg" style="object-fit: cover;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Solar Energy</h4>
                        <h3 class="display-2 font-secondary text-white mb-4">Innovative Solar Solution For Home</h3>
                        <a class="btn btn-light font-weight-bold py-3 px-5 mt-2 btn-scroll" href="#contact">Get A Quote</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                <img class="position-absolute w-100 h-100" src="/wp-content/themes/solar-theme/img/carousel-2.jpg" style="object-fit: cover;">
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
<!-- /wp:html -->
