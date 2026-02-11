<?php
/**
 * Template Name: Blog Traveler
 * Description: Página de Blog con diseño completo del template Traveler
 */

get_header(); ?>


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Nuestro Blog</h6>
                <h1>Últimas Publicaciones</h1>
            </div>
            <div class="row">
                <?php
                // Query para obtener todos los posts del blog con paginación
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $blog_posts = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 9,
                    'post_status' => 'publish',
                    'paged' => $paged
                ));

                if ($blog_posts->have_posts()) :
                    while ($blog_posts->have_posts()) : $blog_posts->the_post();
                ?>
                    <div class="col-lg-4 col-md-6 mb-4 pb-2">
                        <div class="blog-item">
                            <div class="position-relative">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium', array('class' => 'img-fluid w-100')); ?>
                                    </a>
                                <?php else : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <img class="img-fluid w-100" src="<?php echo tema_personal_get_default_blog_image(); ?>" alt="<?php the_title(); ?>">
                                    </a>
                                <?php endif; ?>
                                <div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1"><?php echo get_the_date('d'); ?></h6>
                                    <small class="text-white text-uppercase"><?php echo get_the_date('M'); ?></small>
                                </div>
                            </div>
                            <div class="bg-white p-4">
                                <div class="d-flex mb-2">
                                    <a class="text-primary text-uppercase text-decoration-none" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                        <?php the_author(); ?>
                                    </a>
                                    <span class="text-primary px-2">|</span>
                                    <?php
                                    $categories = get_the_category();
                                    if (!empty($categories)) {
                                        echo '<a class="text-primary text-uppercase text-decoration-none" href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a>';
                                    }
                                    ?>
                                </div>
                                <a class="h5 m-0 text-decoration-none" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                                <p class="mt-3"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary mt-2">Leer más</a>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                ?>

                <!-- Pagination -->
                <div class="col-12">
                    <nav aria-label="Page navigation">
                        <div class="pagination pagination-lg justify-content-center mb-0" style="padding: 30px;">
                            <?php
                            echo paginate_links(array(
                                'total' => $blog_posts->max_num_pages,
                                'current' => $paged,
                                'prev_text' => '&laquo;',
                                'next_text' => '&raquo;',
                                'type' => 'list'
                            ));
                            ?>
                        </div>
                    </nav>
                </div>

                <?php
                    wp_reset_postdata();
                else :
                ?>
                    <div class="col-12">
                        <div class="bg-white text-center p-5">
                            <h4>No hay posts disponibles</h4>
                            <p>¡Próximamente tendremos contenido nuevo para ti!</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Blog End -->

<?php get_footer(); ?>
