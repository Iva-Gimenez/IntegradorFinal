<div class="containerTable mt-5 text-center">
  <div class="mt-3">
    <div class="mt-3 text">
      <div class="card-header text-center">
        <section class="contact" id="contact">
          <h2 class="title">LISTA DE USUARIOS</h2>
        </section>
      </div>
      <br>
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
                <th>Teléfono</th>
                <th>Email</th>
                <th>Baja</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php if($usuarios): ?>
                <?php foreach($usuarios as $user): ?>
                  <tr>
                    <td><?php echo $user['nombre']; ?></td>
                    <td><?php echo $user['apellido']; ?></td>
                    <td><?php echo $user['telefono']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $resultado = $user['email'] === 0 ? 'SI' : 'NO'; ?></td>
                    <td>
                      <!-- clase del boton bootstrap btn btn-outline-success -->
                      <a class="ov-btn-grow-box orange" href="<?php echo base_url('Datatable_controller/editar/'.$user['id']);?>">Editar</a>
                      <a class="ov-btn-grow-box red" href="<?php echo base_url('Usuario_controller/delete/'.$user['id']);?>">Dar Baja</a>
                     <!-- <a class="ov-btn-grow-box green" href="<?php echo base_url('Usuario_controller/habilitar/'.$user['id']);?>">Habilitar</a> -->
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
  <a class="ov-btn-grow-box mt-3" href="<?php echo base_url('nuevoUs');?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
      <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
      <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
    </svg> Nuevo Usuario
  </a>
  <a class="ov-btn-grow-box red mt-3" href="<?php echo base_url('eliminados');?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-recycle" viewBox="0 0 16 16">
      <path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z"/>
    </svg> Usuarios Eliminados
  </a>
</div>
<br><br>


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
    border-radius: 10px; 
    overflow: hidden; 
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


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function () {
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
    });
  });
</script>