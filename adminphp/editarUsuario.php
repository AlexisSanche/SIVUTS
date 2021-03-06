<?php require_once '../conexionV.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>REGISTRO</title>
        <link href="../css/styles.css" rel="stylesheet" />
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Actualizar Usuario</h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted"></div>
                                        <form action="actualizar_usuario.php" method="POST" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <?php
                                                            $result = mysqli_query($conexion,"SELECT * FROM votante WHERE name ='$id'");
                                                            while($fila = mysqli_fetch_array($result))
                                                            {
                                                            ?>

                                                          <?php  echo"<input type='hidden' name='id' value='{$fila['name']}' required>"; ?>

                                                    <?php    echo"<input type='text' class='form-control' placeholder='nombre' name='nombre' value='{$fila['name']}' required>"; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">

                                                        <?php    echo"<input type='text' class='form-control' placeholder='apellido' name='apellido' value='{$fila['lastname']}' required>"; ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                       <?php    echo"<input type='text' class='form-control' placeholder='telefono' name='telefono' value='{$fila['phone']}' required>"; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <?php    echo"<input type='number' class='form-control' placeholder='edad' name='edad' value='{$fila['years']}' required>"; ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                       <?php    echo"<input type='text' class='form-control' placeholder='curp' name='curp' value='{$fila['curp']}' required>"; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                       <?php    echo"<input type='text' class='form-control' placeholder='matricula' name='matricula' value='{$fila['matri']}' required>"; ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <?php    echo"<input type='email' class='form-control' placeholder='email' name='email' value='{$fila['email']}' required>"; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <?php    echo"<input type='text' class='form-control' placeholder='password' name='contrasena' value='{$fila['pass']}' required>"; ?>
                                                    </div>
                                                </div>


                                                          <?php

                                                    }

                                                    ?>  

                                            </div>
                                            <div class="mt-4 mb-0">
                                                <input onclick="check()" name="registrar" value="Actualizar Cuenta" type="submit" class="btn btn-primary" class="btn btn-primary btn-user btn-block">
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
                                <a href="#">Pol??tica de Privacidad</a>
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


