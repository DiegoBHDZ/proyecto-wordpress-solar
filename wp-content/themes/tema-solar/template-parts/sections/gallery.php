<?php
/**
 * Template part - Gallery Section
 *
 * @package Tema Solar
 */
?>

<!-- Gallery Start -->
<div class="container-fluid bg-gallery" id="project" style="padding: 120px 0; margin: 90px 0;">
    <div class="section-title position-relative text-center" style="margin-bottom: 120px;">
        <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Project</h6>
        <h1 class="font-secondary display-4 text-white">Project Photo Gallery</h1>
    </div>
    <div class="owl-carousel gallery-carousel">
        <?php for ($i = 1; $i <= 6; $i++) : ?>
        <div class="gallery-item">
            <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-<?php echo $i; ?>.jpg" alt="Gallery <?php echo $i; ?>">
            <a class="btn btn-primary" href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-<?php echo $i; ?>.jpg" data-lightbox="gallery">
                <i class="fa fa-2x fa-plus text-white"></i>
            </a>
        </div>
        <?php endfor; ?>
    </div>
</div>
<!-- Gallery End -->
