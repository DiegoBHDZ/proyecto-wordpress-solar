<?php
/**
 * Template para posts individuales
 *
 * @package Tema_Personal
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white mb-4 animated slideInDown"><?php the_title(); ?></h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Blog Post Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('mb-5'); ?>>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="mb-4">
                                    <?php the_post_thumbnail('large', array('class' => 'img-fluid w-100')); ?>
                                </div>
                            <?php endif; ?>

                            <div class="mb-3">
                                <span class="text-primary text-uppercase"><i class="far fa-calendar-alt mr-2"></i><?php echo get_the_date(); ?></span>
                                <span class="text-primary text-uppercase mx-3">|</span>
                                <span class="text-primary text-uppercase"><i class="far fa-user mr-2"></i><?php the_author(); ?></span>
                                <?php if (has_category()) : ?>
                                    <span class="text-primary text-uppercase mx-3">|</span>
                                    <span class="text-primary text-uppercase"><i class="far fa-folder mr-2"></i><?php the_category(', '); ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="entry-content">
                                <?php
                                the_content();

                                wp_link_pages(array(
                                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'tema-personal'),
                                    'after'  => '</div>',
                                ));
                                ?>
                            </div>

                            <?php if (has_tag()) : ?>
                                <div class="tags mt-4">
                                    <strong>Tags:</strong> <?php the_tags('', ', ', ''); ?>
                                </div>
                            <?php endif; ?>
                        </article>

                        <div class="row mb-5">
                            <div class="col-6">
                                <?php
                                $prev_post = get_previous_post();
                                if ($prev_post) :
                                    ?>
                                    <a href="<?php echo get_permalink($prev_post); ?>" class="btn btn-outline-primary">
                                        <i class="fa fa-angle-left mr-2"></i> Previous Post
                                    </a>
                                    <?php
                                endif;
                                ?>
                            </div>
                            <div class="col-6 text-right">
                                <?php
                                $next_post = get_next_post();
                                if ($next_post) :
                                    ?>
                                    <a href="<?php echo get_permalink($next_post); ?>" class="btn btn-outline-primary">
                                        Next Post <i class="fa fa-angle-right ml-2"></i>
                                    </a>
                                    <?php
                                endif;
                                ?>
                            </div>
                        </div>

                        <?php
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                    endwhile;
                else :
                    ?>
                    <p><?php esc_html_e('No se encontró contenido.', 'tema-personal'); ?></p>
                    <?php
                endif;
                ?>
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Widget -->
                <div class="mb-5">
                    <form action="<?php echo home_url('/'); ?>" method="get">
                        <div class="input-group">
                            <input type="text" name="s" class="form-control border-0 p-4" placeholder="Search..." value="<?php echo get_search_query(); ?>">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary px-4"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Categories Widget -->
                <?php if (has_category()) : ?>
                    <div class="mb-5">
                        <h3 class="mb-4">Categories</h3>
                        <div class="bg-secondary" style="padding: 30px;">
                            <ul class="list-unstyled m-0">
                                <?php
                                $categories = get_categories();
                                foreach ($categories as $category) :
                                    ?>
                                    <li class="mb-2">
                                        <a href="<?php echo get_category_link($category->term_id); ?>">
                                            <i class="fa fa-angle-right text-primary mr-2"></i><?php echo $category->name; ?> (<?php echo $category->count; ?>)
                                        </a>
                                    </li>
                                    <?php
                                endforeach;
                                ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Recent Posts Widget -->
                <div class="mb-5">
                    <h3 class="mb-4">Recent Posts</h3>
                    <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 5,
                        'post_status' => 'publish'
                    ));
                    foreach ($recent_posts as $recent) :
                        ?>
                        <div class="d-flex mb-3">
                            <?php if (has_post_thumbnail($recent['ID'])) : ?>
                                <div class="mr-3" style="width: 80px;">
                                    <?php echo get_the_post_thumbnail($recent['ID'], 'thumbnail', array('class' => 'img-fluid')); ?>
                                </div>
                            <?php endif; ?>
                            <div>
                                <a href="<?php echo get_permalink($recent['ID']); ?>">
                                    <h6><?php echo $recent['post_title']; ?></h6>
                                </a>
                                <small><i class="far fa-calendar-alt mr-2"></i><?php echo get_the_date('', $recent['ID']); ?></small>
                            </div>
                        </div>
                        <?php
                    endforeach;
                    wp_reset_query();
                    ?>
                </div>
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
</div>
<!-- Blog Post End -->

<?php get_footer(); ?>
