<?php $validation = \Config\Services::validation(); ?>

<div class="container">
  <section class="contact" id="contact">
    <h2 class="title">EDITAR MIS DATOS</h2>
  </section>

  <div class="w-50 mx-auto">
    <div class="col-md">
      <form method="post" action="<?= base_url('/actualizarDatos') ?>">
        <?= csrf_field() ?>
        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
          <div class="alert alert-danger"><?= session()->getFlashdata('fail') ?></div>
        <?php endif ?>
        <?php if (!empty(session()->getFlashdata('success'))) : ?>
          <div class="alert alert-danger"><?= session()->getFlashdata('success') ?></div>
        <?php endif ?>
        <div class="card-body" media="(max-width:768px)">
          <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label"><strong>Nombre</label>
            <input name="nombre" type="text" class="form-control" placeholder="nombre" value="<?= $data['nombre'] ?>">
            <!-- Error -->
            <?php if ($validation->getError('nombre')) { ?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('nombre') ?>
              </div>
            <?php } ?>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Apellido</label>
            <input type="text" name="apellido" class="form-control" placeholder="apellido" value="<?= $data['apellido'] ?>">
            <!-- Error -->
            <?php if ($validation->getError('apellido')) { ?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('apellido') ?>
              </div>
            <?php } ?>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" placeholder="correo@algo.com" value="<?= $data['email'] ?>">
            <!-- Error -->
            <?php if ($validation->getError('email')) { ?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('email') ?>
              </div>
            <?php } ?>
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
          <input type="hidden" name="id" value="<?= $data['id'] ?>">
          <br>
          <div class="float-end">
            <input class="btn btn-danger miBotonBorrar" type="reset" value="Borrar">
            <input class="btn btn-success miBoton" type="submit" value="Guardar">
          </div>
          <br><br>
        </div>
      </form>
    </div>
  </div>
</div>
<br>
<br><br>
