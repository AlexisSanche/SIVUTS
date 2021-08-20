<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PADRÓN</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3">. : : S I V U T S : : .</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

           
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Funciones</div>
                            <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <a class="sb-nav-link-icon" style="text-decoration: none; color: white; margin-left: 10px;" href="padronA.view.php"><i class="fas fa-book-open"></i>
                                Lista del Padrón</a>
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                        </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <br>
    
                        <div class="card mb-4">
                            <div class="col-xl-12 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body" style="font-size: 30px;"><i class="fas fa-database"></i> LISTA DEL PADRÓN DE VOTANTES</div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nombre(s)</th>
                                            <th>Apellidos</th>
                                            <th>Telefono</th>
                                            <th>Edad</th>
                                            <th>Matricula</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nombre(s)</th>
                                            <th>Apellidos</th>
                                            <th>Telefono</th>
                                            <th>Edad</th>
                                            <th>Matricula</th>
                                            <th>Email</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        <?php
                                            require_once "conexionA.php";
                                            $query = "SELECT * FROM votante";
                                            $consulta = mysqli_query($conexion,$query);
                                            while ($fila = mysqli_fetch_array($consulta)) {
                                        ?>

                                        <tr>
                                            <td><?php echo $fila['name'] ?></td>
                                            <td><?php echo $fila['lastname'] ?></td>
                                            <td><?php echo $fila['phone'] ?></td>
                                            <td><?php echo $fila['years'] ?></td>
                                            <td><?php echo $fila['matri'] ?></td>
                                            <td><?php echo $fila['email'] ?></td>
                                        </tr>

                                        <?php
                                            }
                                        ?> 

                                    </tbody>
                                </table>
                            </div>

                            <div class="row">
                                <div class="col-xl-12 col-md-6">
                                    <div class="card bg-success text-white mb-4">
                                        <div class="card-body" style="font-size: 30px;"><i class="fas fa-file-excel"></i> Descargar Lista del Padrón en formato .xslx <i class="fas fa-download"></i></div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link" href="descargar_padron.php"></a>
                                        </div>
                                    </div>
                                </div>
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
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>