<?php
/**
 * Index - Template principal del tema
 *
 * @package Tema Solar
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid bg-primary py-5 mb-5">
    <div class="container py-5">
        <div class="row align-items-center py-4">
            <div class="col-md-12 text-center">
                <h1 class="display-4 text-white mb-3">
                    <?php
                    if (is_home() && !is_front_page()) {
                        single_post_title();
                    } elseif (is_archive()) {
                        the_archive_title();
                    } elseif (is_search()) {
                        echo 'Resultados de búsqueda para: ' . get_search_query();
                    } else {
                        bloginfo('name');
                    }
                    ?>
                </h1>
                <?php if (is_home() || is_archive()) : ?>
                    <p class="text-white mb-0"><?php bloginfo('description'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Blog Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <!-- Blog Posts -->
            <div class="col-lg-8">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                    <!-- Blog Post Item -->
                    <div class="mb-5">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="position-relative mb-4">
                                <img class="img-fluid w-100" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php the_title(); ?>">
                                <div class="position-absolute" style="top: 20px; right: 20px;">
                                    <span class="badge badge-primary px-3 py-2">
                                        <?php echo get_the_date('d M Y'); ?>
                                    </span>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="mb-4">
                            <div class="d-flex mb-2">
                                <a class="text-secondary text-uppercase font-weight-medium" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                    <i class="far fa-user mr-2"></i><?php the_author(); ?>
                                </a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-secondary text-uppercase font-weight-medium" href="<?php echo esc_url(get_permalink()); ?>">
                                    <i class="far fa-folder mr-2"></i><?php the_category(', '); ?>
                                </a>
                            </div>
                            <h3 class="font-weight-bold mb-3">
                                <a href="<?php echo esc_url(get_permalink()); ?>" class="text-dark">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <?php the_excerpt(); ?>
                            <a class="btn btn-primary font-weight-bold py-2 px-4 mt-2" href="<?php echo esc_url(get_permalink()); ?>">
                                Leer más
                            </a>
                        </div>
                    </div>
                    <!-- Blog Post Item End -->
                <?php
                    endwhile;

                    // Paginación
                    the_posts_pagination(array(
                        'mid_size'  => 2,
                        'prev_text' => '<i class="fa fa-angle-left"></i> Anterior',
                        'next_text' => 'Siguiente <i class="fa fa-angle-right"></i>',
                        'class'     => 'pagination justify-content-center mb-4',
                    ));

                else :
                ?>
                    <div class="text-center">
                        <h3>No se encontraron publicaciones</h3>
                        <p>Intenta buscar algo diferente.</p>
                    </div>
                <?php
                endif;
                ?>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Search Widget -->
                <div class="mb-5">
                    <h4 class="text-uppercase mb-4" style="letter-spacing: 3px;">Buscar</h4>
                    <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
                        <div class="input-group">
                            <input type="text" class="form-control border-0" style="padding: 25px;"
                                   name="s" value="<?php echo get_search_query(); ?>" placeholder="Buscar...">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-4" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Categories Widget -->
                <div class="mb-5">
                    <h4 class="text-uppercase mb-4" style="letter-spacing: 3px;">Categorías</h4>
                    <ul class="list-unstyled">
                        <?php
                        $categories = get_categories();
                        foreach ($categories as $category) {
                            echo '<li class="mb-2">';
                            echo '<a href="' . get_category_link($category->term_id) . '" class="text-dark">';
                            echo '<i class="fa fa-angle-right text-primary mr-2"></i>' . $category->name;
                            echo ' <span class="badge badge-primary badge-pill">' . $category->count . '</span>';
                            echo '</a>';
                            echo '</li>';
                        }
                        ?>
                    </ul>
                </div>

                <!-- Recent Posts Widget -->
                <div class="mb-5">
                    <h4 class="text-uppercase mb-4" style="letter-spacing: 3px;">Posts Recientes</h4>
                    <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 5,
                        'post_status' => 'publish'
                    ));
                    foreach ($recent_posts as $recent) {
                        echo '<div class="d-flex mb-3">';
                        if (has_post_thumbnail($recent['ID'])) {
                            echo '<img class="img-fluid" src="' . get_the_post_thumbnail_url($recent['ID'], 'thumbnail') . '"
                                  style="width: 80px; height: 80px; object-fit: cover;" alt="' . esc_attr($recent['post_title']) . '">';
                        }
                        echo '<div class="pl-3">';
                        echo '<h6 class="mb-1"><a href="' . get_permalink($recent['ID']) . '" class="text-dark">' . $recent['post_title'] . '</a></h6>';
                        echo '<small class="text-muted">' . get_the_date('d M Y', $recent['ID']) . '</small>';
                        echo '</div>';
                        echo '</div>';
                    }
                    wp_reset_query();
                    ?>
                </div>

                <!-- Tags Widget -->
                <div class="mb-5">
                    <h4 class="text-uppercase mb-4" style="letter-spacing: 3px;">Etiquetas</h4>
                    <div class="d-flex flex-wrap">
                        <?php
                        $tags = get_tags();
                        foreach ($tags as $tag) {
                            echo '<a href="' . get_tag_link($tag->term_id) . '" class="btn btn-outline-primary m-1">' . $tag->name . '</a>';
                        }
                        ?>
                    </div>
                </div>

                <!-- Sidebar Widgets -->
                <?php if (is_active_sidebar('sidebar-1')) : ?>
                    <?php dynamic_sidebar('sidebar-1'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

<?php get_footer(); ?>
