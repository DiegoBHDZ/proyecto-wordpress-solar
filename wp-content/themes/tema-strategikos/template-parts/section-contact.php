<style>
/* Estilo único para selects del formulario de contacto */
/* color-scheme: light fuerza colores claros en Chromium/Linux con tema GTK oscuro */
#sector, #como_encontro {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    color-scheme: light;
    color: #495057 !important;
    -webkit-text-fill-color: #495057 !important;
    background-color: #F3F6FF !important;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23495057' d='M6 8L1 3h10z'/%3E%3C/svg%3E") !important;
    background-repeat: no-repeat !important;
    background-position: right 0.9rem center !important;
    background-size: 12px !important;
    cursor: pointer;
}
#sector option, #como_encontro option {
    color-scheme: light;
    background-color: #ffffff;
    color: #333333;
    -webkit-text-fill-color: #333333;
}
</style>
<!-- Contact Start -->
<div class="container-fluid py-5" id="contact">
    <div class="container py-5">
        <div class="section-title position-relative text-center">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Contacto</h6>
            <h1 class="font-secondary display-4">Hablemos</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <!-- Honeypot anti-spam -->
                        <div style="display:none;" aria-hidden="true">
                            <input type="text" name="website" id="website" tabindex="-1" autocomplete="off">
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6 control-group">
                                <input type="text" class="form-control bg-secondary border-0 py-4 px-3" id="name" placeholder="Nombre completo *" required="required" data-validation-required-message="Por favor ingrese su nombre" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group">
                                <input type="text" class="form-control bg-secondary border-0 py-4 px-3" id="empresa" placeholder="Empresa / Organización" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6 control-group">
                                <input type="text" class="form-control bg-secondary border-0 py-4 px-3" id="cargo" placeholder="Cargo / Posición" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group">
                                <input type="email" class="form-control bg-secondary border-0 py-4 px-3" id="email" placeholder="Correo electrónico *" required="required" data-validation-required-message="Por favor ingrese su correo" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6 control-group">
                                <input type="text" class="form-control bg-secondary border-0 py-4 px-3" id="telefono" placeholder="Teléfono / WhatsApp" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group">
                                <select class="form-control bg-secondary border-0 py-4 px-3" id="sector" name="sector">
                                    <option value="">Sector de interés</option>
                                    <option value="turistico">Turístico</option>
                                    <option value="inmobiliario">Inmobiliario</option>
                                    <option value="gubernamental">Gubernamental</option>
                                    <option value="otro">Otro</option>
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control bg-secondary border-0 py-2 px-3" rows="6" id="message" placeholder="Mensaje *" required="required" data-validation-required-message="Por favor ingrese su mensaje"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <select class="form-control bg-secondary border-0 py-4 px-3" id="como_encontro" name="como_encontro">
                                <option value="">¿Cómo nos encontró?</option>
                                <option value="google">Google / Buscador</option>
                                <option value="redes">Redes Sociales</option>
                                <option value="recomendacion">Recomendación</option>
                                <option value="evento">Evento / Conferencia</option>
                                <option value="otro">Otro</option>
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit" id="sendMessageButton">Enviar Mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<script>
(function ($) {
    // Pre-select sector from URL param (?servicio=turistico)
    $(document).ready(function () {
        try {
            var params = new URLSearchParams(window.location.search);
            var servicio = params.get('servicio');
            if (servicio) {
                $('#sector').val(servicio);
            }
        } catch (e) {}
    });
})(jQuery);
</script>
