<?php
/**
 * Template para mostrar el archivo de posts del blog
 *
 * @package Tema_Personal
 */

get_header(); ?>

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase"><?php the_archive_title(); ?></h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="<?php echo home_url(); ?>">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Blog</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row pb-3">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <div class="col-md-6 mb-4 pb-2">
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
                            <?php endwhile; ?>

                            <!-- Pagination -->
                            <div class="col-12">
                                <nav aria-label="Page navigation">
                                    <?php
                                    the_posts_pagination(array(
                                        'mid_size'  => 2,
                                        'prev_text' => '<span aria-hidden="true">&laquo;</span> <span class="sr-only">Previous</span>',
                                        'next_text' => '<span aria-hidden="true">&raquo;</span> <span class="sr-only">Next</span>',
                                        'before_page_number' => '<span class="page-link">',
                                        'after_page_number'  => '</span>',
                                        'class' => 'pagination pagination-lg justify-content-center bg-white mb-0',
                                    ));
                                    ?>
                                </nav>
                            </div>

                        <?php else : ?>
                            <div class="col-12">
                                <div class="bg-white p-5 text-center">
                                    <h3>No se encontraron posts</h3>
                                    <p>Lo sentimos, no hay posts disponibles en este momento.</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Author Bio -->
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <?php
                        $author_id = get_the_author_meta('ID');
                        $author_avatar = get_avatar_url($author_id, array('size' => 100));
                        ?>
                        <img src="<?php echo esc_url($author_avatar); ?>" class="img-fluid mx-auto mb-3" style="width: 100px; border-radius: 50%;">
                        <h3 class="text-primary mb-3"><?php echo get_the_author_meta('display_name'); ?></h3>
                        <p><?php echo get_the_author_meta('description') ?: 'Escritor y creador de contenido'; ?></p>
                        <div class="d-flex justify-content-center">
                            <a class="text-primary px-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="text-primary px-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="text-primary px-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="text-primary px-2" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>

                    <!-- Search Form -->
                    <div class="mb-5">
                        <div class="bg-white" style="padding: 30px;">
                            <form role="search" method="get" action="<?php echo home_url('/'); ?>">
                                <div class="input-group">
                                    <input type="text" name="s" class="form-control p-4" placeholder="Buscar..." value="<?php echo get_search_query(); ?>">
                                    <div class="input-group-append">
                                        <button type="submit" class="input-group-text bg-primary border-primary text-white">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Category List -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Categorías</h4>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0">
                                <?php
                                $categories = get_categories(array(
                                    'orderby' => 'count',
                                    'order'   => 'DESC',
                                    'number'  => 5
                                ));
                                foreach ($categories as $category) :
                                ?>
                                    <li class="mb-3 d-flex justify-content-between align-items-center">
                                        <a class="text-dark" href="<?php echo get_category_link($category->term_id); ?>">
                                            <i class="fa fa-angle-right text-primary mr-2"></i><?php echo $category->name; ?>
                                        </a>
                                        <span class="badge badge-primary badge-pill"><?php echo $category->count; ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <!-- Recent Post -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Posts Recientes</h4>
                        <?php
                        $recent_posts = wp_get_recent_posts(array(
                            'numberposts' => 3,
                            'post_status' => 'publish'
                        ));
                        foreach ($recent_posts as $recent) :
                            $post_id = $recent['ID'];
                            $thumbnail = get_the_post_thumbnail_url($post_id, 'thumbnail');
                            if (!$thumbnail) {
                                $thumbnail = tema_personal_get_default_blog_image();
                            }
                        ?>
                            <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="<?php echo get_permalink($post_id); ?>">
                                <img class="img-fluid" src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($recent['post_title']); ?>" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="pl-3">
                                    <h6 class="m-1"><?php echo esc_html($recent['post_title']); ?></h6>
                                    <small><?php echo get_the_date('M d, Y', $post_id); ?></small>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <!-- Tag Cloud -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Etiquetas</h4>
                        <div class="d-flex flex-wrap m-n1">
                            <?php
                            $tags = get_tags(array('number' => 10));
                            foreach ($tags as $tag) :
                            ?>
                                <a href="<?php echo get_tag_link($tag->term_id); ?>" class="btn btn-light m-1"><?php echo $tag->name; ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->

<?php get_footer(); ?>
