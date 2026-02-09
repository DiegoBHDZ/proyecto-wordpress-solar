<?php
/**
 * Template Name: About Us
 * Description: Plantilla para página Sobre Nosotros
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">About Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="container-fluid py-5" id="about">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid mb-4 mb-lg-0" src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" alt="">
            </div>
            <div class="col-lg-7">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">About Us</h6>
                <h1 class="display-4 mb-3"><span class="text-primary">25+ Years Experience</span> In Solar Power Industry</h1>

                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                        the_content();
                    endwhile;
                else :
                    ?>
                    <p>At sed est eirmod sanctus et amet diam magna. Dolore clita magna sed sed stet et, at magna rebum eirmod sanctus ut sed, stet tempor dolore rebum sit duo, dolore tempor sit est sit sanctus, sit justo sit invidunt clita ut justo diam magna. Erat eos nonumy labore dolor. Dolore kasd no et et et elitr. Erat sea dolor elitr diam sed lorem rebum et vero.</p>
                    <p>Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos.</p>
                    <?php
                endif;
                ?>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Team Start -->
<div class="container-fluid py-5" id="team">
    <div class="container py-5">
        <div class="section-title position-relative text-center">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Our Team</h6>
            <h1 class="font-secondary display-4">Meet The Team</h1>
        </div>
        <div class="row justify-content-lg-start m-0 mb-4 pb-2 mb-sm-0 pb-sm-0">
            <div class="col-lg-6 p-0">
                <div class="row m-0">
                    <div class="col-sm-6 p-0 text-center">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                            <h5 class="mb-2">Donald John</h5>
                            <p class="text-muted font-italic mb-2">CEO & Founder</p>
                            <p>Lorem elitr magna stet rebum dolores sed. Est stet labore est lorem lorem</p>
                            <div class="position-relative mb-2">
                                <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-0" style="min-height: 300px;">
                        <img class="position-absolute w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/img/team-1.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-lg-end m-0 mb-4 pb-2 mb-sm-0 pb-sm-0">
            <div class="col-lg-6 p-0">
                <div class="row m-0">
                    <div class="col-sm-6 p-0" style="min-height: 300px;">
                        <img class="position-absolute w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/img/team-2.jpg" style="object-fit: cover;">
                    </div>
                    <div class="col-sm-6 p-0 text-center">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                            <h5 class="mb-2">Adam Phillips</h5>
                            <p class="text-muted font-italic mb-2">Engineer</p>
                            <p>Lorem elitr magna stet rebum dolores sed. Est stet labore est lorem lorem</p>
                            <div class="position-relative mb-2">
                                <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-lg-start m-0 mb-4 pb-2 mb-sm-0 pb-sm-0">
            <div class="col-lg-6 p-0">
                <div class="row m-0">
                    <div class="col-sm-6 p-0 text-center">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                            <h5 class="mb-2">Thomas Olsen</h5>
                            <p class="text-muted font-italic mb-2">Engineer</p>
                            <p>Lorem elitr magna stet rebum dolores sed. Est stet labore est lorem lorem</p>
                            <div class="position-relative mb-2">
                                <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-0" style="min-height: 300px;">
                        <img class="position-absolute w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/img/team-3.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-lg-end m-0">
            <div class="col-lg-6 p-0">
                <div class="row m-0">
                    <div class="col-sm-6 p-0" style="min-height: 300px;">
                        <img class="position-absolute w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/img/team-4.jpg" style="object-fit: cover;">
                    </div>
                    <div class="col-sm-6 p-0 text-center">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                            <h5 class="mb-2">James Alien</h5>
                            <p class="text-muted font-italic mb-2">Engineer</p>
                            <p>Lorem elitr magna stet rebum dolores sed. Est stet labore est lorem lorem</p>
                            <div class="position-relative mb-2">
                                <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<?php get_footer(); ?>
