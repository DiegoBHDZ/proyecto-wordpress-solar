<?php
/**
 * Template para páginas genéricas
 *
 * @package Tema_Personal
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown"><?php the_title(); ?></h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Content Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="mb-4">
                                    <?php the_post_thumbnail('large', array('class' => 'img-fluid w-100')); ?>
                                </div>
                            <?php endif; ?>

                            <div class="entry-content">
                                <?php
                                the_content();

                                wp_link_pages(array(
                                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'tema-personal'),
                                    'after'  => '</div>',
                                ));
                                ?>
                            </div>
                        </article>
                        <?php
                    endwhile;
                else :
                    ?>
                    <p><?php esc_html_e('No se encontró contenido.', 'tema-personal'); ?></p>
                    <?php
                endif;
                ?>
            </div>
        </div>
    </div>
</div>
<!-- Content End -->

<?php get_footer(); ?>
