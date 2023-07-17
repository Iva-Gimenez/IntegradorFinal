<div class="container abs-center">
    <section class="contact" id="contact">
        <h2 class="title">EDITAR USUARIO</h2>
    </section>

    <br><br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="container" style="width: 100%;">
                <div class="card-header text-center" style="background-color: #FFE8FC">
                    <h3>Editar Usuario</h3>
                </div> 

                <?php $validation = \Config\Services::validation(); ?>

                <form method="post" action="<?php echo base_url('enviarEdicion') ?>">
                    <?= csrf_field(); ?>

                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                    <?php endif ?>

                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                    <?php endif ?>

                    <div class="card-body" media="(max-width:768px)">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><strong>Nombre</label>
                            <input name="nombre" type="text" class="form-control" placeholder="nombre" value="<?= $data['nombre'] ?>">

                            <!-- Validación y error -->
                            <?php if ($validation->getError('nombre')) : ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $validation->getError('nombre'); ?>
                                </div>
                            <?php endif ?>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Apellido</label>
                            <input type="text" name="apellido" class="form-control" placeholder="apellido" value="<?= $data['apellido'] ?>">

                            <!-- Validación y error -->
                            <?php if ($validation->getError('apellido')) : ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $validation->getError('apellido'); ?>
                                </div>
                            <?php endif ?>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" placeholder="correo@algo.com" value="<?= $data['email'] ?>">

                            <!-- Validación y error -->
                            <?php if ($validation->getError('email')) : ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $validation->getError('email'); ?>
                                </div>
                            <?php endif ?>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                            <input name="telefono" type="text" class="form-control" placeholder="teléfono" value="<?= $data['telefono'] ?>">

                            <!-- Validación y error -->
                            <?php if ($validation->getError('telefono')) : ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $validation->getError('telefono'); ?>
                                </div>
                            <?php endif ?>
                        </div>

                        <div class="mb-3">
                            <?php
                            $perfil = '';
                            switch ($data['perfil_id']) {
                                case 1:
                                    $perfil = 'Admin';
                                    // Si el perfil actual es Admin (perfil 1), el perfil de opción será Cliente (perfil 2)
                                    $perfil_opcion = 'Cliente';
                                    $perfil_opcion_value = '2';
                                    break;
                                case 2:
                                    $perfil = 'Cliente';
                                    // Si el perfil actual es Cliente (perfil 2), el perfil de opción será Admin (perfil 1)
                                    $perfil_opcion = 'Admin';
                                    $perfil_opcion_value = '1';
                                    break;
                            }
                            ?>
                            <label for="exampleFormControlInput1" class="form-label">Categoría</label>
                            <select name="perfil_id" class="form-select">
                                <option value="<?= $data['perfil_id'] ?>"><?= $perfil ?></option>
                                <option value="<?= $perfil_opcion_value ?>"><?= $perfil_opcion ?></option>
                            </select>

                            <!-- Validación y error -->
                            <?php if ($validation->getError('perfil_id')) : ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $validation->getError('perfil_id'); ?>
                                </div>
                            <?php endif ?>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Eliminado</label>
                            <select name="baja" class="form-select">
                                <option value="1" <?= $data['baja'] == 1 ? 'selected' : ''; ?>>Sí</option>
                                <option value="0" <?= $data['baja'] == 0 ? 'selected' : ''; ?>>No</option>
                            </select>

                            <!-- Validación y error -->
                            <?php if ($validation->getError('baja')) : ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $validation->getError('baja'); ?>
                                </div>
                            <?php endif ?>
                        </div>

                        <input type="hidden" name="id" value="<?= $data['id'] ?>">

                        <br>  <br>

                        <input type="submit" value="Editar" class="btn btn-outline-success"></input>
                        &nbsp;&nbsp;
                        <a type="reset" href="<?php echo base_url('usuarios-list');?>" class="btn btn-outline-danger">Cancelar</a>


                        <br><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
