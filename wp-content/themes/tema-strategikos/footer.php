    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-12 mb-4 px-4">
                <div class="row mb-5 p-4" style="background: rgba(256, 256, 256, .05);">
                    <div class="col-md-4">
                        <div class="text-md-center">
                            <h5 class="text-primary text-uppercase mb-2" style="letter-spacing: 5px;">Nuestra Oficina</h5>
                            <p class="mb-4 m-md-0"><?php echo esc_html(get_theme_mod('footer_direccion', 'Av. Insurgentes Sur 123, Ciudad de México, México')); ?></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-md-center">
                            <h5 class="text-primary text-uppercase mb-2" style="letter-spacing: 5px;">Escríbenos</h5>
                            <p class="mb-4 m-md-0"><?php echo esc_html(get_theme_mod('footer_email', 'contacto@strategikos.com')); ?></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-md-center">
                            <h5 class="text-primary text-uppercase mb-2" style="letter-spacing: 5px;">Llámanos</h5>
                            <p class="m-0"><?php echo esc_html(get_theme_mod('footer_telefono', '+52 55 1234 5678')); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <p><?php echo esc_html(get_theme_mod('footer_descripcion', 'Strategikos es una firma especializada en análisis de riesgos territoriales y consultoría en seguridad integral. Aplicamos la Metodología GESSE para proteger inversiones, operaciones turísticas y organismos gubernamentales.')); ?></p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="<?php echo esc_url(get_theme_mod('footer_twitter', '#')); ?>"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="<?php echo esc_url(get_theme_mod('footer_facebook', '#')); ?>"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="<?php echo esc_url(get_theme_mod('footer_linkedin', '#')); ?>"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-lg btn-outline-light btn-lg-square" href="<?php echo esc_url(get_theme_mod('footer_instagram', '#')); ?>"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Nuestros Servicios</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white btn-scroll mb-2" href="#service"><i class="fa fa-angle-right mr-2"></i>Seguridad Turística</a>
                            <a class="text-white btn-scroll mb-2" href="#service"><i class="fa fa-angle-right mr-2"></i>Seguridad del Entorno</a>
                            <a class="text-white btn-scroll mb-2" href="#service"><i class="fa fa-angle-right mr-2"></i>Consultoría Gubernamental</a>
                            <a class="text-white btn-scroll mb-2" href="#project"><i class="fa fa-angle-right mr-2"></i>Proyectos</a>
                            <a class="text-white btn-scroll" href="#contact"><i class="fa fa-angle-right mr-2"></i>Contacto</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 mb-5">
                <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Boletín de Seguridad</h5>
                <p>Suscríbete para recibir análisis de riesgos, alertas territoriales y tendencias en seguridad para tu sector.</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Tu correo electrónico">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Suscribirse</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white text-center border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .05) !important;">
        <p class="m-0 text-white">&copy; <a href="#"><?php bloginfo('name'); ?></a>. Todos los derechos reservados.</p>
    </div>
    <!-- Footer End -->


    <!-- Modal - Metodología GESSE -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Metodología GESSE — Strategikos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid mb-4" src="<?php echo get_template_directory_uri(); ?>/img/carousel-1.jpg" alt="Metodología GESSE">
                    <p><strong>GESSE</strong> es el marco metodológico propietario de Strategikos para el análisis integral de riesgos territoriales. Sus cinco fases garantizan una cobertura completa, desde el diagnóstico inicial hasta el monitoreo continuo.</p>
                    <p><strong>G — Georreferenciación:</strong> Mapeo territorial y análisis geoespacial del entorno para identificar zonas de riesgo, flujos críticos y vulnerabilidades físicas de la zona de intervención.</p>
                    <p><strong>E — Evaluación de Amenazas:</strong> Diagnóstico exhaustivo de amenazas específicas del sector mediante inteligencia de campo, fuentes abiertas y análisis de patrones históricos de incidentes.</p>
                    <p><strong>S — Segmentación de Riesgos:</strong> Clasificación y priorización de riesgos por probabilidad e impacto, con matriz de calor adaptada a cada cliente, contexto operativo y tolerancia al riesgo.</p>
                    <p><strong>S — Estrategia de Respuesta:</strong> Diseño de protocolos de respuesta, planes de contingencia y medidas preventivas específicas, con capacitación del personal involucrado.</p>
                    <p><strong>E — Evaluación Continua:</strong> Monitoreo permanente del entorno de seguridad, actualización periódica del análisis de riesgos y emisión de alertas tempranas ante cambios relevantes en el contexto territorial.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->


    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <?php wp_footer(); ?>
</body>

</html>
