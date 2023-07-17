<div class="container">
    <section class="contact" id="contact">
        <h2 class="title">NUEVO USUARIO</h2>
    </section>
    <div class="row">
        <div class="col-md-6">
            <!-- Columna de la imagen -->
            <img src="<?=base_url('assets/img/nos2.jpeg');?>" alt="Imagen" class="img-fluid">
        </div>
        <div class="col-md-6">
            <!-- Columna del formulario -->
            <div class="frmcontacto container">
                <div class="card-header text-center" style="background-color: #FFE8FC">
                    <h2>Crear Nuevo Usuario</h2>
                </div>

                <?php $validation = \Config\Services::validation(); ?>
                <form method="post" action="<?php echo base_url('crearUs') ?>">
                    <?= csrf_field(); ?>
                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                    <?php endif ?>
                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('success'); ?></div>
                    <?php endif ?>

                    <div class="card-body">
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                            <input name="nombre" type="text" class="form-control" placeholder="nombre">
                            <!-- Error -->
                            <?php if ($validation->getError('nombre')) : ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('nombre'); ?>
                                </div>
                            <?php endif ?>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Apellido</label>
                            <input type="text" name="apellido" class="form-control" placeholder="apellido">
                            <!-- Error -->
                            <?php if ($validation->getError('apellido')) : ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('apellido'); ?>
                                </div>
                            <?php endif ?>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input name="email" type="femail" class="form-control" placeholder="correo@algo.com">
                            <!-- Error -->
                            <?php if ($validation->getError('email')) : ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('email'); ?>
                                </div>
                            <?php endif ?>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                            <input type="text" name="telefono" class="form-control" placeholder="teléfono">
                            <!-- Error -->
                            <?php if ($validation->getError('telefono')) : ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('telefono'); ?>
                                </div>
                            <?php endif ?>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                            <input name="pass" type="password" class="form-control" placeholder="password">
                            <!-- Error -->
                            <?php if ($validation->getError('pass')) : ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('pass'); ?>
                                </div>
                            <?php endif ?>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Perfil</label>
                            <select name="perfil_id" class="form-control">
                                <option>Seleccione Perfil</option>
                                <option value="1">Admin</option>
                                <option value="2">Cliente</option>
                            </select>
                            <!-- Error -->
                            <?php if ($validation->getError('perfil_id')) : ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('perfil_id'); ?>
                                </div>
                            <?php endif ?>
                        </div>
                        <br>
                        <div class="mb-3">
                            <input type="submit" value="Crear" class="btn btn-outline-success float-end">
                            <a type="reset" href="<?php echo base_url('crearUs'); ?>" class="btn btn-outline-danger float-end">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
