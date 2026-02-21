<!-- Gallery Start -->
<div class="container-fluid bg-gallery" id="project" style="padding: 120px 0; margin: 90px 0;">
    <div class="section-title position-relative text-center" style="margin-bottom: 120px;">
        <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Proyectos</h6>
        <h1 class="font-secondary display-4 text-white">Galería de Proyectos</h1>
    </div>
    <div class="owl-carousel gallery-carousel">
        <?php
        $proyectos_query = new WP_Query(array(
            'post_type'      => 'proyectos',
            'posts_per_page' => 6,
            'post_status'    => 'publish',
        ));

        if ($proyectos_query->have_posts()) :
            while ($proyectos_query->have_posts()) :
                $proyectos_query->the_post();
                $img_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                if (!$img_url) $img_url = get_template_directory_uri() . '/img/gallery-1.jpg';
                ?>
                <div class="gallery-item">
                    <img class="img-fluid w-100" src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>">
                    <a class="btn btn-primary" href="<?php echo esc_url($img_url); ?>" data-lightbox="gallery">
                        <i class="fa fa-2x fa-plus text-white"></i>
                    </a>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            // Fallback con imágenes del tema
            for ($i = 1; $i <= 6; $i++) :
                $img_url = get_template_directory_uri() . '/img/gallery-' . $i . '.jpg';
                ?>
                <div class="gallery-item">
                    <img class="img-fluid w-100" src="<?php echo esc_url($img_url); ?>" alt="Proyecto Strategikos">
                    <a class="btn btn-primary" href="<?php echo esc_url($img_url); ?>" data-lightbox="gallery">
                        <i class="fa fa-2x fa-plus text-white"></i>
                    </a>
                </div>
                <?php
            endfor;
        endif;
        ?>
    </div>
</div>
<!-- Gallery End -->
