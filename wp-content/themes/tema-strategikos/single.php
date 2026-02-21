<?php
/**
 * Template para mostrar un post individual del blog
 *
 * @package Tema_Personal
 */

get_header(); ?>

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php while (have_posts()) : the_post(); ?>
                        <!-- Blog Detail Start -->
                        <div class="pb-3">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large', array('class' => 'img-fluid w-100')); ?>
                                    <?php else : ?>
                                        <img class="img-fluid w-100" src="<?php echo tema_strategikos_get_default_blog_image(); ?>" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                    <div class="blog-date">
                                        <h6 class="font-weight-bold mb-n1"><?php echo get_the_date('d'); ?></h6>
                                        <small class="text-white text-uppercase"><?php echo get_the_date('M'); ?></small>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white mb-3 post-content" style="padding: 30px;">
                                <!-- Post Meta -->
                                <div class="post-meta d-flex mb-3">
                                    <div class="meta-item">
                                        <a class="text-primary text-uppercase text-decoration-none" href="#">
                                            <i class="fa fa-calendar mr-2"></i><?php echo get_the_date('F j, Y'); ?>
                                        </a>
                                    </div>
                                    <span class="text-primary px-2">|</span>
                                    <div class="meta-item">
                                        <?php
                                        $categories = get_the_category();
                                        if (!empty($categories)) {
                                            echo '<a class="text-primary text-uppercase text-decoration-none" href="' . esc_url(get_category_link($categories[0]->term_id)) . '"><i class="fa fa-folder mr-2"></i>' . esc_html($categories[0]->name) . '</a>';
                                        }
                                        ?>
                                    </div>
                                </div>

                                <!-- Post Title -->
                                <h2 class="mb-3"><?php the_title(); ?></h2>

                                <!-- Post Content -->
                                <?php the_content(); ?>

                                <!-- Post Tags -->
                                <?php
                                $tags = get_the_tags();
                                if ($tags) :
                                ?>
                                    <div class="post-tags mt-4 pt-4" style="border-top: 1px solid #E5E5E5;">
                                        <h5 class="mb-3">Etiquetas:</h5>
                                        <?php foreach ($tags as $tag) : ?>
                                            <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>

                                <!-- Post Navigation -->
                                <div class="d-flex justify-content-between mt-4 pt-4" style="border-top: 1px solid #E5E5E5;">
                                    <div>
                                        <?php
                                        $prev_post = get_previous_post();
                                        if ($prev_post) :
                                        ?>
                                            <a href="<?php echo get_permalink($prev_post); ?>" class="btn btn-outline-primary">
                                                <i class="fa fa-angle-left mr-2"></i> Post Anterior
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                    <div>
                                        <?php
                                        $next_post = get_next_post();
                                        if ($next_post) :
                                        ?>
                                            <a href="<?php echo get_permalink($next_post); ?>" class="btn btn-outline-primary">
                                                Post Siguiente <i class="fa fa-angle-right ml-2"></i>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Detail End -->

                    <?php endwhile; ?>
                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-4 mt-5 mt-lg-0">
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
                                $thumbnail = tema_strategikos_get_default_blog_image();
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
