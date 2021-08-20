
<?php 


session_start();

if(isset($_SESSION['usuario'])){

    $id=$_SESSION['usuario'];

 ?>
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
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Subir Nuevo Proyecto</h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted">Añade un proyecto que tengas en mente para que los usuarios y docentes puedan votar por él.</div>

                                        <form action="guardar_proyect.php" method="POST" enctype="multipart/form-data">

                                            <?php
                                                require_once 'conexionV.php';

                                                $query=" SELECT  * from votante where name='$id' ";
                                                $consulta1=mysqli_query($conexion,$query);
                                                while ($fila=mysqli_fetch_array($consulta1)) {
                                            ?>

                                            <input name="nombre" type="hidden" value="<?php echo $fila['id'] ?>">

                                                <?php
                                                    }
                                                ?>  

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" type="text" name="titulo"/>
                                                        <label for="titulo">Título del Proyecto</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <textarea class="form-control" name="descripcion"></textarea>
                                                        <label for="descripcion">Describe un poco sobre tu Proyecto</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-4 mb-0">
                                                <input name="voto" type="hidden" value="<?php echo 0?>">
                                                <input type="submit" value="Guardar"/>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
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
    </body>
</html>

<?php
} else {
    header("location:loginV.view.php");   
} 
?>