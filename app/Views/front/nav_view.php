<?php
$session = \Config\Services::session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
$id = $session->get('id');
?>

<style type="text/css">
  .nav-item .blanco { color: white !important }
</style>
<body>

<header id="navbar">
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>  
    <nav class="navbar navbar-expand-md fixed-top" width=100%>
    <div class="container fluid">
        <a class="navbar-brand" href="<?php echo base_url('principal'); ?>" style="color: white;">★-𝕀𝔾-★ </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#MenuNavegacion">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="MenuNavegacion" class="collapse navbar-collapse">


            <!--- Inicio Menú Admin --->
            <?php if ($perfil == '1') { ?>
                <ul class="navbar-nav ms-3">
                    <li class="nav-item float-end">
                        <a class="nav-link blanco" href="#" tabindex="-1" aria-disabled="true"><?php echo "Bienvenido Admin ".$nombre; ?></a>
                     </li>
                    <li class="nav-item"><a class="nav-link blanco" href="<?php echo base_url('principal');?>">Principal</a></li>
                    <li class="nav-item">
                        <a class="nav-link blanco" href="<?php echo base_url('consultas');?>" tabindex="-1" aria-disabled="true">Consultas</a>
                    </li>
                    <li class="nav-item"><a class="nav-link blanco" href="<?php echo base_url('usuarios-list');?>">Listar Usuarios</a>
                    </li>
                      <li class="nav-item">
                    <a class="nav-link blanco" href="<?php echo base_url('Lista_Productos');?>" tabindex="-1" aria-disabled="true">Nuestras Delicias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link blanco" href="<?php echo base_url('logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
                    </li>
                </ul>

            <div>



<!--- Inicio Menú Usuario Registrado --->
<?php } else if ($perfil == '2') { ?>
<ul class="navbar-nav ms-3">
                    <li class="nav-item float-end">
                        <a class="nav-link blanco" href="#" tabindex="-1" aria-disabled="true"><?php echo "Bienveni@ ".$nombre; ?></a>
                     </li>
        
        <li class="nav-item"><a class="nav-link blanco" href="<?php echo base_url('principal');?>">Principal</a></li>
        <li class="nav-item"><a class="nav-link blanco" href="<?php echo base_url('nosotros');?>">Nosotros</a></li>
        <li class="nav-item"><a class="nav-link blanco" href="<?php echo base_url('contact-form');?>">Contáctanos</a></li>
                       
            <li class="nav-item">
                    <a class="nav-link blanco" href="<?php echo base_url('Lista_Productos_Cliente');?>">Nuestras Delicias</a>
                    </li>
        <li class="nav-item">
            <a class="nav-link blanco" href="<?php echo base_url('DataTable_controller/editoMisDatos/'.$id);?>">Mis Datos</a>
        </li>
          <li class="nav-item">
            <a class="nav-link blanco" href="<?php echo base_url('logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
            </li>

    </ul>

<?php } else { ?>

<!-- Menú cuando nadie está logueado --> 
                    
<ul class="navbar-nav ms-3">
    <li class="nav-item"><a class="nav-link blanco" href="<?php echo base_url('principal');?>">Principal</a></li>
    <li class="nav-item"><a class="nav-link blanco" href="<?php echo base_url('nosotros');?>">¿Quiénes Somos?</a></li>
    <li class="nav-item">
        <a class="nav-link blanco" href="<?php echo base_url('contact-form');?>">Contáctanos</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link blanco dropdown-toggle" href="<?php echo base_url('productos');?>" role="button" data-bs-toggle="dropdown">
            Nuestras Delicias
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo base_url('tortas');?>">Tortas</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('donas');?>">Donas</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('cupcakes');?>">Cupcakes</a></li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link blanco dropdown-toggle" href="<?php echo base_url('productos');?>" role="button" data-bs-toggle="dropdown">
            Mi Cuenta
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo base_url('login');?>">Iniciar Sesión</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('registrarse');?>">Registrarse</a></li>
        </ul>
    </li>
</ul>

<?php } ?> 
</div>

</div>      
</nav>

<!-- Resto del código -->
<section class="textos-header" style="padding-top: 9em;">
    <h1><i>Bienvenidos a nuestro sitio web!!</i></h1>
    <h2><b><i>El arte de elaborar y crear postres..</i></b></h2>
</section>
<div class="wave" style="height: 100px; overflow: hidden;">
    <svg viewBox="0 0 500 100" preserveAspectRatio="none" style="height: 100%; width: 100%;">
        <path d="M0.00,33.32 C150.00,100.00 349.20,-50.00 500.00,33.32 L500.00,100.00 L0.00,100.00 Z" style="stroke: none; fill: #fff;"></path>
    </svg>
</div>



</header>