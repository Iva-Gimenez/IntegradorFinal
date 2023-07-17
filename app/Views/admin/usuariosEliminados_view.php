<div class="containerTable mt-5 text-center">
  <div class="mt-3">
    <div class="mt-3 text">
      <div class="card-header text-center">
        <section class="contact" id="contact">
          <h2 class="title">USUARIOS ELIMINADOS</h2>
        </section>
      </div>
   
      <?php if (session()->getFlashdata('mensaje')) : ?>
        <div class="alert alert-success">
          <?= session()->getFlashdata('mensaje') ?>
        </div>
      <?php endif; ?>
      <div class="container">
        <div class="card p-4">
          <table class="table table-responsive" id="users-list">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Perfil</th>
                <th>Eliminado</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($usuarios): ?>
                <?php foreach ($usuarios as $user): ?>
                  <tr>
                    <td><?= $user['nombre']; ?></td>
                    <td><?= $user['apellido']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <?php  
                    $perfil = '';
                    switch ($user['perfil_id']) {
                      case 1:
                        $perfil = 'Admin';
                        break;
                      case 2:
                        $perfil = 'Cliente';
                        break;
                    }
                    ?>
                    <td><?= $perfil ?></td>
                    <td><?= $resultado = $user['email'] === 0 ? 'NO' : 'SI'; ?></td>
                    <td>
                      <a class="ov-btn-grow-box green" href="<?php echo base_url('Usuario_controller/habilitar/'.$user['id']);?>">Habilitar</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <a class="ov-btn-grow-box mt-3" href="<?php echo base_url('usuarios-list');?>">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-skip-backward" viewBox="0 0 16 16">
  <path d="M.5 3.5A.5.5 0 0 1 1 4v3.248l6.267-3.636c.52-.302 1.233.043 1.233.696v2.94l6.267-3.636c.52-.302 1.233.043 1.233.696v7.384c0 .653-.713.998-1.233.696L8.5 8.752v2.94c0 .653-.713.998-1.233.696L1 8.752V12a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5zm7 1.133L1.696 8 7.5 11.367V4.633zm7.5 0L9.196 8 15 11.367V4.633z"/>
</svg> Volver
  </a>
</div>


<style>
  .containerTable {
    padding: 10px;
    background-color: #f2f2f2;
    border: 1px solid #ddd;
    border-radius: 10px;
  }

  .ov-btn-grow-box {
    background: #fff;
    color: #4741d7;
    border: 2px solid #4741d7;
    padding: 8px 12px;
    border-radius: 3px;
    position: relative;
    z-index: 1;
    overflow: hidden;
    display: inline-block;
    text-decoration: none;
    transition: color 0.3s ease, background 0.3s ease;
    margin-top: 20px; /* Añadido para separar los botones de la tabla */
  }

  .ov-btn-grow-box:hover {
    color: #fff;
    background: #4741d7;
  }

  .ov-btn-grow-box.red {
    color: #fff;
    background: #e74c3c;
    border-color: #e74c3c;
  }

  .ov-btn-grow-box.red:hover {
    background: #c0392b;
  }

  .ov-btn-grow-box.orange {
    color: #fff;
    background: #e67e22;
    border-color: #e67e22;
  }

  .ov-btn-grow-box.orange:hover {
    background: #d35400;
  }

  .ov-btn-grow-box.green {
    color: #fff;
    background: #2ecc71;
    border-color: #2ecc71;
  }

  .ov-btn-grow-box.green:hover {
    background: #27ae60;
  }

  .ov-btn-grow-box::after {
    content: "";
    background: #020202;
    position: absolute;
    z-index: -1;
    padding: 8px 12px;
    display: block;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    transform: scale(0, 0);
    transition: all 0.3s ease;
  }

  .ov-btn-grow-box:hover::after {
    transition: all 0.3s ease-out;
    transform: scale(1, 1);
  }

  table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
    border-radius: 10px; /* Añadido para redondear las esquinas del datatable */
    overflow: hidden; /* Añadido para ocultar el desbordamiento de la tabla */
  }

  th, td {
    padding: 8px;
    text-align: center;
  }

  th {
    background-color: #f2f2f2;
    border: 1px solid #ddd;
  }

  td {
    border: 1px solid #ddd;
  }
</style>

<link rel="stylesheet" https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>


<script>
    $(document).ready( function () {
      $('#users-list').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página.",
            "zeroRecords": "Lo sentimos! No hay resultados.",
            "info": "Mostrando la página e _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles.",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar: ",
            "paginate": {
              "next": "Siguiente",
              "previous": "Anterior"
            }
        }
    } );
  } );
</script>

<br>
<br>
