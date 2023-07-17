<section class="contact" id="contact">
    <div class="max-width">
        <h2 class="title">CONTACTANOS</h2>
        <div class="contact-content">
            <div class="column left">
                <div class="text">Ponerse en Contacto</div>
                <p>Ante cualquier duda, consulta que necesites, ponte en contacto con nosotros, intentaremos contestar en la brevedad.</p>
                <div class="icons">
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <div class="info">
                            <div class="head">NOMBRE</div>
                            <div class="sub-title">Gimenez, Ivana Belén</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info">
                            <div class="head">DIRECCIÓN</div>
                            <div class="sub-title">Corrientes, Corrientes</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                            <div class="head">EMAIL</div>
                            <div class="sub-title">iva.gimenez@gmail.com</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column right">
                <div class="frmcontacto container">
                    
                    <?php $validation = \Config\Services::validation(); ?>
                    <form method="post" action="<?= base_url('formController/submitForm') ?>">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="name" class="form-control">
                            <!-- Error -->
                            <?php if ($validation->getError('name')) : ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('name'); ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" name="email" class="form-control">
                            <!-- Error -->
                            <?php if ($validation->getError('email')) : ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('email'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="text" name="phone" class="form-control">
                            <!-- Error -->
                            <?php if ($validation->getError('phone')) : ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('phone'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Mensaje</label>
                            <textarea class="form-control" name="mensaje" rows="3"></textarea>
                            <!-- Error -->
                            <?php if ($validation->getError('mensaje')) : ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('mensaje'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <br>
                        <div class="float-end">
                            <input class="btn btn-danger miBotonBorrar" type="reset" value="Borrar">
                            <input class="btn btn-success miBoton" type="submit" value="Enviar">
                        </div>
                        <br>
                    </form>
                </div>
                <br>
            </div>
        </div>
    </div>
</section>
<br><br>