<?php
/**
 * Title: Project Gallery
 * Slug: solar-theme/project-gallery
 * Categories: solar-theme, gallery
 * Description: Owl Carousel photo gallery section
 */
?>

<!-- wp:html -->
<div class="container-fluid bg-gallery" id="project" style="padding: 120px 0; margin: 90px 0;">
    <div class="section-title position-relative text-center" style="margin-bottom: 120px;">
        <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Project</h6>
        <h1 class="font-secondary display-4 text-white">Project Photo Gallery</h1>
    </div>
    <div class="owl-carousel gallery-carousel">
        <div class="gallery-item">
            <img class="img-fluid w-100" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/gallery-1.jpg" alt="">
            <a class="btn btn-primary" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/gallery-1.jpg" data-lightbox="gallery">
                <i class="fa fa-2x fa-plus text-white"></i>
            </a>
        </div>
        <div class="gallery-item">
            <img class="img-fluid w-100" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/gallery-2.jpg" alt="">
            <a class="btn btn-primary" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/gallery-2.jpg" data-lightbox="gallery">
                <i class="fa fa-2x fa-plus text-white"></i>
            </a>
        </div>
        <div class="gallery-item">
            <img class="img-fluid w-100" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/gallery-3.jpg" alt="">
            <a class="btn btn-primary" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/gallery-3.jpg" data-lightbox="gallery">
                <i class="fa fa-2x fa-plus text-white"></i>
            </a>
        </div>
        <div class="gallery-item">
            <img class="img-fluid w-100" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/gallery-4.jpg" alt="">
            <a class="btn btn-primary" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/gallery-4.jpg" data-lightbox="gallery">
                <i class="fa fa-2x fa-plus text-white"></i>
            </a>
        </div>
        <div class="gallery-item">
            <img class="img-fluid w-100" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/gallery-5.jpg" alt="">
            <a class="btn btn-primary" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/gallery-5.jpg" data-lightbox="gallery">
                <i class="fa fa-2x fa-plus text-white"></i>
            </a>
        </div>
        <div class="gallery-item">
            <img class="img-fluid w-100" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/gallery-6.jpg" alt="">
            <a class="btn btn-primary" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/gallery-6.jpg" data-lightbox="gallery">
                <i class="fa fa-2x fa-plus text-white"></i>
            </a>
        </div>
    </div>
</div>
<!-- /wp:html -->
