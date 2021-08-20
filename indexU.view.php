
<?php 

session_start();

if(isset($_SESSION['usuario'])){

 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>USUARIO</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="indexU.view.php">. : : S I V U T S : : .</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <a href="whatareU.view.php" style="color: white; text-decoration: none;">¿Qué es S I V U T S? <i class="fas fa-angle-right"></i></a>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="salirV.php">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Funciones</div>
                            <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <a class="sb-nav-link-icon" style="text-decoration: none; color: white; margin-left: 10px;" href="newproyect.php"><i class="fas fa-plus"></i>
                                Añadir un Nuevo Proyecto</a>
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <a class="sb-nav-link-icon" style="text-decoration: none; color: white; margin-left: 10px;" href="adminphp/padronA.view.php"><i class="fas fa-book-open"></i>
                                Ver Lista del Padrón</a>
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Bienvenido, <?php echo $_SESSION['usuario']?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Has iniciado sesión como Votante y puedes votar libremente.</li>
                        </ol>

                        <div class="col-xl-12 col-md-6">
                            <div class=" text-white mb-4">
                                <div class="card-body" style="font-size: 30px; color: black;">Opciones</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body" style="font-size: 30px;"><i class="fas fa-sliders-h"></i> Votar por un Proyecto</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="votar.php"></a>
                                    </div>

                                </div>
                            </div>
                            
                        </div>
    
                        <div class="card mb-4">
                            <div class="col-xl-12 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body" style="font-size: 30px;"><i class="fas fa-database"></i> Proyectos Subidos</div>
                                </div>
                            </div>
                            <div class="card-body">
                                 <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Propuesta de</th>
                                            <th>Título</th>
                                            <th>Descripción</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                         include 'conexionV.php';
                                       

                                          $query="SELECT  proyecto.titulo, proyecto.descripcion, proyecto.fecha,
                                            votante.name 
                                            from proyecto inner join votante 
                                            on proyecto.votante_id=votante.id ";
                                            $consulta1=mysqli_query($conexion,$query);
                                            while ($fila=mysqli_fetch_array($consulta1)) {
                                        ?>

                                        <tr>
                                            <td><?php echo $fila['name'] ?></td>
                                            <td><?php echo $fila['titulo'] ?></td>
                                            <td><?php echo $fila['descripcion'] ?></td>
                                          
                                            
                                            
                                        </tr>

                                        <?php
                                            }
                                        ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SIVUTS - 2021</div>
                            <div>
                                <a href="#">Política de Privacidad</a>
                                &middot;
                                <a href="#">Terminos &amp; Condiciones</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php
} else{
    header("location:index.php");
    
} 

 ?>

