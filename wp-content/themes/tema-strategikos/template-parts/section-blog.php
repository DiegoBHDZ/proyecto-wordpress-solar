<!-- Blog Start -->
<div class="container-fluid py-5" id="blog">
    <div class="container py-5">
        <div class="section-title position-relative text-center">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Blog</h6>
            <h1 class="font-secondary display-4">Análisis y Tendencias</h1>
        </div>

        <div class="row">
            <div class="col-12 text-center mb-4">
                <ul class="nav nav-pills justify-content-center mb-3" id="blog-category-tabs">
                    <li class="nav-item">
                        <a class="nav-link active font-weight-bold mx-1" href="#" data-cat-filter="all">Todos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold mx-1" href="#" data-cat-filter="inmobiliario">Inmobiliario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold mx-1" href="#" data-cat-filter="turistico">Turístico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold mx-1" href="#" data-cat-filter="gubernamental">Gubernamental</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row" id="blog-posts-container">
            <?php
            $blog_query = new WP_Query(array(
                'post_type'      => 'post',
                'posts_per_page' => 6,
                'post_status'    => 'publish',
            ));

            if ($blog_query->have_posts()) :
                while ($blog_query->have_posts()) :
                    $blog_query->the_post();
                    $cats     = get_the_category();
                    $cat_slug = !empty($cats) ? $cats[0]->slug : 'general';
                    $cat_name = !empty($cats) ? $cats[0]->name : 'General';
                    $img_url  = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                    if (!$img_url) $img_url = get_template_directory_uri() . '/img/gallery-1.jpg';
                    ?>
                    <div class="col-lg-4 col-md-6 mb-4 blog-post-card" data-cat="<?php echo esc_attr($cat_slug); ?>">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="position-relative">
                                <img class="card-img-top" src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" style="height: 220px; object-fit: cover;">
                                <div class="position-absolute bg-primary text-white text-center p-2" style="top: 0; right: 0; min-width: 60px;">
                                    <div class="font-weight-bold" style="font-size: 1.4rem; line-height: 1;"><?php echo get_the_date('d'); ?></div>
                                    <div style="font-size: 0.75rem; text-transform: uppercase;"><?php echo get_the_date('M'); ?></div>
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-primary small"><i class="fa fa-user mr-1"></i><?php the_author(); ?></span>
                                    <span class="text-muted small"><i class="fa fa-tag mr-1"></i><?php echo esc_html($cat_name); ?></span>
                                </div>
                                <h5 class="card-title"><a href="<?php the_permalink(); ?>" class="text-dark"><?php the_title(); ?></a></h5>
                                <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?></p>
                            </div>
                            <div class="card-footer bg-white border-top-0 px-4 pb-4">
                                <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary btn-sm font-weight-bold">Leer más <i class="fa fa-arrow-right ml-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <div class="col-12 text-center py-5">
                    <p class="text-muted">Próximamente publicaremos análisis y artículos sobre seguridad territorial.</p>
                    <a class="btn btn-outline-primary" href="<?php echo home_url('/#contact'); ?>">Suscribirse al boletín</a>
                </div>
                <?php
            endif;
            ?>
        </div>

        <div class="row">
            <div class="col-12 text-center mt-3">
                <a href="<?php echo home_url('/blog/'); ?>" class="btn btn-primary font-weight-bold py-3 px-5">Ver todos los artículos</a>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

<script>
(function ($) {
    $('#blog-category-tabs .nav-link').on('click', function (e) {
        e.preventDefault();
        var filter = $(this).data('cat-filter');
        $('#blog-category-tabs .nav-link').removeClass('active');
        $(this).addClass('active');
        if (filter === 'all') {
            $('.blog-post-card').fadeIn(200);
        } else {
            $('.blog-post-card').hide();
            $('.blog-post-card[data-cat="' + filter + '"]').fadeIn(200);
        }
    });
})(jQuery);
</script>
