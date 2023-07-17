<div class="container abs-center">
    <section class="contact" id="contact">
        <h2 class="title">EDITAR PRODUCTO</h2>
    </section>
  <div class="card frmcontacto container" style="width: 60%;">
    
    <?php $validation = \Config\Services::validation(); ?>
    <form method="post" enctype="multipart/form-data" action="<?= base_url('/enviarEdicionProd') ?>">
      <?= csrf_field(); ?>
      <?php if (!empty(session()->getFlashdata('fail'))) : ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
      <?php endif ?>
      <?php if (!empty(session()->getFlashdata('success'))) : ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('success'); ?></div>
      <?php endif ?>
      <div class="card-body" media="(max-width:768px)">
        <div class="mb-2">
          <label for="exampleFormControlInput1" class="form-label"><strong>Nombre</label>
          <input name="nombre" type="text" class="form-control" placeholder="nombre" value="<?= $data['nombre'] ?>">
          <!-- Error -->
          <?php if ($validation->getError('nombre')) : ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('nombre'); ?>
            </div>
          <?php endif ?>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
          <input type="text" name="descripcion" class="form-control" value="<?= $data['descripcion'] ?>">
          <!-- Error -->
          <?php if ($validation->getError('descripcion')) : ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('descripcion'); ?>
            </div>
          <?php endif ?>
        </div>
        <label for="exampleFormControlInput1" class="form-label">Imagen Actual: </label>
        <div class="mb-3">
          <img class="frmImg2" src="<?= base_url('assets/uploads/' . $data['imagen']); ?>">
          <br><br>
          <input name="imagen" type="file" class="form-control">
          <!-- Error -->
          <?php if ($validation->getError('imagen')) : ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('imagen'); ?>
            </div>
          <?php endif ?>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Precio</label>
          <input type="text" name="precio" class="form-control" value="<?= $data['precio'] ?>">
          <!-- Error -->
          <?php if ($validation->getError('precio')) : ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('precio'); ?>
            </div>
          <?php endif ?>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Precio Venta</label>
          <input name="precio_vta" type="text" class="form-control" value="<?= $data['precio_vta'] ?>">
          <!-- Error -->
          <?php if ($validation->getError('precio_vta')) : ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('precio_vta'); ?>
            </div>
          <?php endif ?>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Stock</label>
          <input name="stock" type="text" class="form-control" value="<?= $data['stock'] ?>">
          <!-- Error -->
          <?php if ($validation->getError('stock')) : ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('stock'); ?>
            </div>
          <?php endif ?>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Stock Minimo</label>
          <input name="stock_min" type="text" class="form-control" value="<?= $data['stock_min'] ?>">
          <!-- Error -->
          <?php if ($validation->getError('stock_min')) : ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('stock_min'); ?>
            </div>
          <?php endif ?>
        </div>
        <div class="mb-3">
          <?php
          $categoria = '';
          switch ($data['categoria_id']) {
            case 1:
              $categoria = 'Tortas';
              break;
            case 2:
              $categoria = 'Donas';
              break;
            case 3:
              $categoria = 'Cupcakes';
              break;
          }
          ?>
          <label for="exampleFormControlInput1" class="form-label">Categoria</label>
          <select name="categoria_id">
            <option value="<?= $data['categoria_id'] ?>"><?= $categoria ?></option>
            <option value="1">Tortas</option>
            <option value="2">Donas</option>
            <option value="3">Cupcakes</option>
          </select>
          <!-- Error -->
          <?php if ($validation->getError('categoria_id')) : ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('categoria_id'); ?>
            </div>
          <?php endif ?>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Eliminado</label>
          <input name="eliminado" readonly="true" type="text" class="form-control" value="<?= $data['eliminado'] ?>">
          <!-- Error -->
          <?php if ($validation->getError('eliminado')) : ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('eliminado'); ?>
            </div>
          <?php endif ?>
        </div>
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <br>
        <div class="mb-3 text-center">
          <input type="submit" value="Editar" class="btn btn-outline-success">
            <a type="reset" href="<?= base_url('Lista_Productos'); ?>"
            class="btn btn-outline-danger">Cancelar</a>
        </div>
        <br><br>
      </div>
    </form>
  </div>
</div>
<br>
