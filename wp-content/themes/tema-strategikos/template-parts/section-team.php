<!-- Team Start -->
<div class="container-fluid py-5" id="team">
    <div class="container py-5">
        <div class="section-title position-relative text-center">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Equipo</h6>
            <h1 class="font-secondary display-4">Nuestro Equipo</h1>
        </div>
        <?php
        $equipo_query = new WP_Query(array(
            'post_type'      => 'equipo',
            'posts_per_page' => 4,
            'post_status'    => 'publish',
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        ));

        if ($equipo_query->have_posts()) :
            $i = 0;
            while ($equipo_query->have_posts()) :
                $equipo_query->the_post();
                $cargo   = get_post_meta(get_the_ID(), '_equipo_cargo', true);
                $img_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                if (!$img_url) $img_url = get_template_directory_uri() . '/img/team-' . (($i % 4) + 1) . '.jpg';
                $align = ($i % 2 === 0) ? 'justify-content-lg-start' : 'justify-content-lg-end';
                $img_left = ($i % 2 !== 0);
                ?>
                <div class="row <?php echo $align; ?> m-0 mb-4 pb-2 mb-sm-0 pb-sm-0">
                    <div class="col-lg-6 p-0">
                        <div class="row m-0">
                            <?php if ($img_left) : ?>
                                <div class="col-sm-6 p-0" style="min-height: 300px;">
                                    <img class="position-absolute w-100 h-100" src="<?php echo esc_url($img_url); ?>" style="object-fit: cover;" alt="<?php the_title_attribute(); ?>">
                                </div>
                                <div class="col-sm-6 p-0 text-center">
                                    <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                                        <h5 class="mb-2"><?php the_title(); ?></h5>
                                        <p class="text-muted font-italic mb-2"><?php echo esc_html($cargo); ?></p>
                                        <p><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                                        <div class="position-relative mb-2">
                                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="col-sm-6 p-0 text-center">
                                    <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                                        <h5 class="mb-2"><?php the_title(); ?></h5>
                                        <p class="text-muted font-italic mb-2"><?php echo esc_html($cargo); ?></p>
                                        <p><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                                        <div class="position-relative mb-2">
                                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 p-0" style="min-height: 300px;">
                                    <img class="position-absolute w-100 h-100" src="<?php echo esc_url($img_url); ?>" style="object-fit: cover;" alt="<?php the_title_attribute(); ?>">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php
                $i++;
            endwhile;
            wp_reset_postdata();
        else :
            $team_members = array(
                array('name' => 'Ana González',  'role' => 'Directora General',       'bio' => 'Especialista en seguridad territorial con 15 años de experiencia en análisis de riesgos regionales.', 'img' => 'team-1.jpg', 'align' => 'justify-content-lg-start', 'img_left' => false),
                array('name' => 'Carlos Méndez', 'role' => 'Analista de Riesgos',     'bio' => 'Experto en inteligencia de campo y metodologías cuantitativas para la evaluación de amenazas.', 'img' => 'team-2.jpg', 'align' => 'justify-content-lg-end',   'img_left' => true),
                array('name' => 'Laura Vargas',  'role' => 'Consultora Turística',    'bio' => 'Especializada en seguridad turística y protección de activos en destinos de alto dinamismo.', 'img' => 'team-3.jpg', 'align' => 'justify-content-lg-start', 'img_left' => false),
                array('name' => 'Martín Reyes',  'role' => 'Consultor Gubernamental', 'bio' => 'Asesor de organismos públicos en planificación de seguridad territorial y gestión de crisis.', 'img' => 'team-4.jpg', 'align' => 'justify-content-lg-end',   'img_left' => true),
            );
            foreach ($team_members as $member) :
                ?>
                <div class="row <?php echo $member['align']; ?> m-0 mb-4 pb-2 mb-sm-0 pb-sm-0">
                    <div class="col-lg-6 p-0">
                        <div class="row m-0">
                            <?php if ($member['img_left']) : ?>
                                <div class="col-sm-6 p-0" style="min-height: 300px;">
                                    <img class="position-absolute w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $member['img']; ?>" style="object-fit: cover;">
                                </div>
                                <div class="col-sm-6 p-0 text-center">
                                    <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                                        <h5 class="mb-2"><?php echo esc_html($member['name']); ?></h5>
                                        <p class="text-muted font-italic mb-2"><?php echo esc_html($member['role']); ?></p>
                                        <p><?php echo esc_html($member['bio']); ?></p>
                                        <div class="position-relative mb-2">
                                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="col-sm-6 p-0 text-center">
                                    <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                                        <h5 class="mb-2"><?php echo esc_html($member['name']); ?></h5>
                                        <p class="text-muted font-italic mb-2"><?php echo esc_html($member['role']); ?></p>
                                        <p><?php echo esc_html($member['bio']); ?></p>
                                        <div class="position-relative mb-2">
                                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 p-0" style="min-height: 300px;">
                                    <img class="position-absolute w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $member['img']; ?>" style="object-fit: cover;">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php
            endforeach;
        endif;
        ?>
    </div>
</div>
<!-- Team End -->
