<?php require_once 'includes/header.php'; ?>
    <main>
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Contacto</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="about-area about2">
            <div class="container">
                <div class="d-sm-block my-3">
                    <div id="map" style="height: 550px;" class="border-radius" data-aos="fade-up"></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title text-actingvip">Contáctanos</h2>
                    </div>
                    <div class="col-lg-8">
                        <div id="contact-form" class="wow fadeIn first">
                            <form class="form-contact contact_form" id="contactForm" data-toggle="validator">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" onfocus="this.placeholder = 'Escribe tu nombre*'" onblur="this.placeholder = 'El nombre es obligatorio*'" placeholder="Nombre completo*" required>
                                    <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" onfocus="this.placeholder = 'Escribe tu e-mail*'" onblur="this.placeholder = 'El e-mail es obligatorio*'" placeholder="E-mail*" required>
                                    <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="tel" id="tel" onfocus="this.placeholder = 'Escribe tu teléfono (10 digitos)*'" onblur="this.placeholder = 'El teléfono es obligatorio*'" placeholder="Teléfono (10 digitos)*" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
                                    <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" re>
                                        <span class="text-white">¿Cómo se enteró de nosotros?</span><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="medio[]" id="medio" value="Google">
                                            <label for="Google" class="form-check-label text-white">Google</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="medio[]" id="medio" value="Redes Sociales">
                                            <label for="Redes Sociales" class="form-check-label text-white">Redes Sociales (FB, Instagram, etc.)</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="medio[]" id="medio" value="Representante">
                                            <label for="Representante" class="form-check-label text-white">Representante</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="medio[]" id="medio" value="Manejador">
                                            <label for="Manejador" class="form-check-label text-white">Manejador</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="medio[]" id="medio" value="Amigo">
                                            <label for="Amigo" class="form-check-label text-white">Amigo</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="medio[]" id="medio" value="Backstage">
                                            <label for="Backstage" class="form-check-label text-white">Backstage</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label for="Evento" class="form-check-label text-white">
                                                <input type="checkbox" name="medio[]" id="medio" value="Evento"> Evento
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label for="Otros" class="form-check-label text-white">
                                                <input type="checkbox" name="medio[]" id="medio" value="Otros"> Otros
                                            </label>
                                        </div>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = 'Escribe el mensaje*'" onblur="this.placeholder = 'El mensaje es obligatorio*'" placeholder="Mensaje*" required></textarea>
                                        <div class="help-block with-errors text-danger"></div>
                                        <div id="msgSubmit" class="h5 text-center hidden"></div>
                                        <p class="text-white">*Campos obligatorios</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" id="form-submit" class="button button-contactForm boxed-btn">Enviar</button>
                                <div class="clearfix"></div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Terret Polanco, CDMX</h3>
                                <p>Av. Miguel Cervantes Saavedra 301, Ciudad de México, México 11520.</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>Miami</h3>
                                <p>+1 (305) 459-1200</p>
                                <h3>New York</h3>
                                <p>+1 (347) 230-8525</p>
                                <h3>México</h3>
                                <p>+52 (55) 5004-8757</p>
                                <h3>Puerto Rico</h3>
                                <p>+1 (787) 222-6000</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3><a href="mailto:info@actingvip.com">info@actingvip.com</a></h3>
                                <p>¡Envíanos un correo en cualquier momento!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php require_once 'includes/unete.php';
require_once 'includes/footer.php'; ?>