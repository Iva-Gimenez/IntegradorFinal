<div class="container abs-center">
    <section class="contact" id="contact">
        <h2 class="title">NUEVO PRODUCTO</h2>
    </section>

    <div class="row">
        <div class="col-md-6">
            <!-- Columna izquierda - Imagen -->
            <img src="assets/img/nuevopro.jpg" alt="Imagen del producto" class="img-fluid">
        </div>
        <div class="col-md-6">
            <?php $validation = \Config\Services::validation(); ?>

            <!-- Columna derecha - Formulario de registro -->
            <form method="post" enctype="multipart/form-data" action="<?= base_url('ProductoValidation') ?>">
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
                        <input name="nombre" type="text" class="form-control" placeholder="nombre">
                        <!-- Error de validación para el campo nombre -->
                        <?php if ($validation->hasError('nombre')) : ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $validation->getError('nombre'); ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                        <input type="text" name="descripcion" class="form-control" placeholder="Descripcion">
                        <!-- Error de validación para el campo descripcion -->
                        <?php if ($validation->hasError('descripcion')) : ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $validation->getError('descripcion'); ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Imagen</label>
                        <input name="imagen" type="file" class="form-control">
                        <!-- Error de validación para el campo imagen -->
                        <?php if ($validation->hasError('imagen')) : ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $validation->getError('imagen'); ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Categoria</label>
                        <select name="categoria_id">
                            <option>Seleccione Categoria</option>
                            <option value="1">Tortas</option>
                            <option value="2">Donas</option>
                            <option value="3">Cupcakes</option>
                        </select>
                        <!-- Error de validación para el campo categoria_id -->
                        <?php if ($validation->hasError('categoria_id')) : ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $validation->getError('categoria_id'); ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Precio</label>
                        <input name="precio" type="number" class="form-control" placeholder="precio">
                        <!-- Error de validación para el campo precio -->
                        <?php if ($validation->hasError('precio')) : ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $validation->getError('precio'); ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Precio Venta</label>
                        <input type="number" name="precio_vta" class="form-control" placeholder="Precio de Venta">
                        <!-- Error de validación para el campo precio_vta -->
                        <?php if ($validation->hasError('precio_vta')) : ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $validation->getError('precio_vta'); ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Stock</label>
                        <input name="stock" type="number" class="form-control" placeholder="Stock">
                        <!-- Error de validación para el campo stock -->
                        <?php if ($validation->hasError('stock')) : ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $validation->getError('stock'); ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Stock Minimo</label>
                        <input name="stock_min" type="number" class="form-control" placeholder="Stock Minimo">
                        <!-- Error de validación para el campo stock_min -->
                        <?php if ($validation->hasError('stock_min')) : ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $validation->getError('stock_min'); ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <br>
                   <div class="">
                    <input type="submit" value="Guardar" class="btn btn-outline-success">
                    <a type="reset" href="<?= base_url('/'); ?>" class="btn btn-outline-danger">Cancelar</a>
                </div>
                    <br><br>
                </div>
            </form>
        </div>
    </div>
</div>
<br><br>
