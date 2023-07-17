<div class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-12 col-md-6">
      <section class="contact" id="contact">
          <h2 class="title">DETALLE DE LA CONSULTA</h2>
        </section>
      <div class="card">
        <div class="card-body">
          
          <?php $validation = \Config\Services::validation(); ?>

          <!-- Formulario de consulta -->
          <form method="post" enctype="multipart/form-data" action="<?php echo base_url('ConsultaResuelta/'.$data['id']) ?>">
            <?= csrf_field(); ?>

            <!-- Mensajes de error y éxito -->
            <?php if(!empty(session()->getFlashdata('fail'))): ?>
              <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
            <?php endif ?>

            <?php if(!empty(session()->getFlashdata('success'))): ?>
              <div class="alert alert-danger"><?= session()->getFlashdata('success'); ?></div>
            <?php endif ?>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nombre</label>
              <input name="name" type="text" class="form-control" placeholder="nombre" value="<?php echo $data['name'] ?>">

              <!-- Error -->
              <?php if($validation->getError('nombre')): ?>
                <div class='alert alert-danger mt-2'>
                  <?= $error = $validation->getError('nombre'); ?>
                </div>
              <?php endif ?>
            </div>

            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">E-mail</label>
              <input type="femail" name="email" class="form-control" value="<?php echo $data['email'] ?>">

              <!-- Error -->
              <?php if($validation->getError('descripcion')): ?>
                <div class='alert alert-danger mt-2'>
                  <?= $error = $validation->getError('descripcion'); ?>
                </div>
              <?php endif ?>
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
              <input type="text" name="phone" class="form-control" value="<?php echo $data['phone'] ?>">

              <!-- Error -->
              <?php if($validation->getError('phone')): ?>
                <div class='alert alert-danger mt-2'>
                  <?= $error = $validation->getError('phone'); ?>
                </div>
              <?php endif ?>
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Mensaje Consulta</label>
              <input name="mensaje" type="text" class="form-control" value="<?php echo $data['mensaje'] ?>">

              <!-- Error -->
              <?php if($validation->getError('mensaje')): ?>
                <div class='alert alert-danger mt-2'>
                  <?= $error = $validation->getError('mensaje'); ?>
                </div>
              <?php endif ?>
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Estado</label>
              <h3><?php echo $data['estado'] ?></h3>

              <!-- Error -->
              <?php if($validation->getError('stock')): ?>
                <div class='alert alert-danger mt-2'>
                  <?= $error = $validation->getError('stock'); ?>
                </div>
              <?php endif ?>
            </div>

            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">

            <div class="text-center mt-3">
              <input type="submit" value="Marcar Resuelta" class="btn btn-outline-success">
              <a type="reset" href="<?php echo base_url('consultas'); ?>" class="btn btn-outline-danger">Cancelar</a>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
