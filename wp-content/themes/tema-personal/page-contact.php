<?php
/**
 * Template Name: Contact
 * Description: Plantilla para página de Contacto
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Contact Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Info Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="bg-secondary text-center p-4 mb-4">
                    <i class="fa fa-3x fa-map-marker-alt text-primary mb-3"></i>
                    <h5 class="text-uppercase text-primary mb-3" style="letter-spacing: 5px;">Our Office</h5>
                    <p class="m-0">123 Street, New York, USA</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-secondary text-center p-4 mb-4">
                    <i class="fa fa-3x fa-envelope text-primary mb-3"></i>
                    <h5 class="text-uppercase text-primary mb-3" style="letter-spacing: 5px;">Email Us</h5>
                    <p class="m-0">info@example.com</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-secondary text-center p-4 mb-4">
                    <i class="fa fa-3x fa-phone text-primary mb-3"></i>
                    <h5 class="text-uppercase text-primary mb-3" style="letter-spacing: 5px;">Call Us</h5>
                    <p class="m-0">+012 345 6789</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Info End -->

<!-- Contact Start -->
<div class="container-fluid py-5" id="contact">
    <div class="container py-5">
        <div class="section-title position-relative text-center">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Contact</h6>
            <h1 class="font-secondary display-4">Get In Touch</h1>
        </div>

        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                if (get_the_content()) :
                    ?>
                    <div class="row mb-5">
                        <div class="col-12">
                            <div class="text-center">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                    <?php
                endif;
            endwhile;
        endif;
        ?>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col-sm-6 control-group">
                                <input type="text" class="form-control bg-secondary border-0 py-4 px-3" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group">
                                <input type="email" class="form-control bg-secondary border-0 py-4 px-3" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control bg-secondary border-0 py-4 px-3" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control bg-secondary border-0 py-2 px-3" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<!-- Map Start -->
<div class="container-fluid px-0">
    <div class="row mx-0">
        <div class="col-12 px-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.2412648718453!2d-73.98823368459395!3d40.75889797932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes%20Square!5e0!3m2!1sen!2sus!4v1589640861296!5m2!1sen!2sus"
                    width="100%"
                    height="450"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
            </iframe>
        </div>
    </div>
</div>
<!-- Map End -->

<?php get_footer(); ?>
