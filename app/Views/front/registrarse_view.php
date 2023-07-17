<section class="contact" id="contact">
    <!-- Título de la sección -->
    <h2 class="title">REGISTRARSE</h2>

    <div class="row">
        <!-- Contenedor de la imagen -->
        <div class="col-lg-6 col-md-6 d-none d-md-block infinity-image-container22"></div>

        <!-- Contenedor del formulario -->
        <div class="col-lg-6 col-md-6 infinity-form-container">
            <div class="col-lg-9 col-md-12 col-sm-8 col-xs-12 infinity-form">
                <!-- Título del formulario -->
                <div class="text-center mb-4">
                    <h4>Registrarse</h4>
                </div>

                <!-- Formulario -->
                <form class="px-3" method="post" action="<?php echo base_url('enviar-form');?>">
                    <!-- Campo de nombre -->
                    <div class="form-input">
                        <span><i class="fa fa-envelope"></i></span>
                        <input type="text" name="nombre" placeholder="Nombre:" tabindex="10" required>
                    </div>

                    <!-- Campo de apellido -->
                    <div class="form-input">
                        <span><i class="fa fa-envelope"></i></span>
                        <input type="text" name="apellido" placeholder="Apellido:" tabindex="10" required>
                    </div>

                    <!-- Campo de email -->
                    <div class="form-input">
                        <span><i class="fa fa-envelope"></i></span>
                        <input type="email" name="email" placeholder="Email:" tabindex="10" required>
                    </div>

                    <!-- Campo de teléfono -->
                    <div class="form-input">
                        <span><i class="fa fa-phone"></i></span>
                        <input type="tel" name="telefono" placeholder="Teléfono:" tabindex="10" required>
                    </div>

                    <!-- Campo de provincia -->
                    <div class="form-input">
                        <span><i class="fa fa-globe"></i></span>
                        <input type="text" name="provincia" placeholder="Provincia:" tabindex="10" required>
                    </div>

                    <!-- Campo de localidad -->
                    <div class="form-input">
                        <span><i class="fa fa-building"></i></span>
                        <input type="text" name="localidad" placeholder="Localidad:" tabindex="10" required>
                    </div>

                    <!-- Campo de dirección -->
                    <div class="form-input">
                        <span><i class="fa fa-building"></i></span>
                        <input type="text" name="dirección" placeholder="Dirección:" tabindex="10" required>
                    </div>

                    <!-- Campo de contraseña -->
                    <div class="form-input">
                        <span><i class="fa fa-lock"></i></span>
                        <input type="password" name="password" placeholder="Contraseña:" required>
                    </div>

                    <!-- Campo de confirmación de contraseña -->
                    <div class="form-input">
                        <span><i class="fa fa-lock"></i></span>
                        <input type="password" name="confirm_password" placeholder="Confirmar contraseña:" required>
                    </div>

                    <div class="text-center mt-4">
                        <button class="btn btn-danger" type="reset">Cancelar</button>
                        <button class="btn btn-success" type="submit">Guardar</button>
                    </div>
                </form>
                <br><br>
            </div>
        </div>
    </div>
</section>

