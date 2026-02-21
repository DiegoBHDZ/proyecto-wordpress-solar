<?php
/**
 * Template para página 404
 *
 * @package Tema_Personal
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">404</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">404 Error</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- 404 Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="mb-5">
                    <i class="fa fa-exclamation-triangle text-primary mb-4" style="font-size: 100px;"></i>
                    <h1 class="display-1 text-primary mb-4">404</h1>
                    <h2 class="mb-4">Page Not Found</h2>
                    <p class="mb-4">We're sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>

                    <form action="<?php echo home_url('/'); ?>" method="get" class="mb-5">
                        <div class="input-group mx-auto" style="max-width: 600px;">
                            <input type="text" name="s" class="form-control border-0 py-3 px-4" placeholder="Search..." value="<?php echo get_search_query(); ?>">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary px-4">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <a href="<?php echo home_url(); ?>" class="btn btn-primary font-weight-bold py-3 px-5">
                        Go Back To Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 404 End -->

<?php get_footer(); ?>
