
<!-- login_view.php -->
<section class="contact" id="contact">
    <h2 class="title">INICIAR SESIÓN</h2>
    <div class="row">
        <!-- IMAGE CONTAINER BEGIN -->
        <div class="col-lg-6 col-md-6 d-none d-md-block infinity-image-container"></div>
        <!-- IMAGE CONTAINER END -->

        <!-- FORM CONTAINER BEGIN -->
        <div class="col-lg-6 col-md-6 infinity-form-container">
            <div class="col-lg-9 col-md-12 col-sm-8 col-xs-12 infinity-form">

                <div class="text-center mb-4">
                    <h4>Iniciar Sesión</h4>
                </div>
                <!-- Formulario -->
                <form class="px-3" method="post" action="<?= site_url('enviar-login') ?>">
                    <!-- Validación del campo de correo electrónico -->
                    <div class="form-input">
                        <span><i class="fa fa-envelope"></i></span>
                        <input type="email" name="email" placeholder="Email:" tabindex="10" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        <!-- Patrón para validar el formato de correo electrónico -->
                    </div>
                    <!-- Validación del campo de contraseña -->
                    <div class="form-input">
                        <span><i class="fa fa-lock"></i></span>
                        <input type="password" name="password" placeholder="Password:" required minlength="8">
                        <!-- Longitud mínima de 8 caracteres -->
                    </div>
                   
                    <!-- Mensaje de alerta -->
                    <?php if (session()->getFlashdata('msg')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('msg') ?>
                        </div>
                    <?php endif; ?>

				    <!-- Botón de inicio de sesión -->
				    <div class="mb-3 flex-grow-0">
				        <button type="submit" class="btn btn-block">Iniciar</button>
				    </div>
				    
				         <div class="text-center mb-2">
                        <div class="text-center mb-3" style="color: #777;">
                            <br>
                            <div class="text-center mb-5" style="color: #777;">Aún no tiene una cuenta?
                                <a class="register-link" href="<?php echo base_url('registrarse');?>">Registrarse</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- FIN FORMULARIO -->
        </div>
    </div>
</section>
