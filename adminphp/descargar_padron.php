<?php

header("Content-Type: application/xls");


header("Content-Disposition: attachment; filename= Lista_Padrón.xls");
?>

<html lang="en">

<meta http-equiv="X-UA-Compatible" content="IE=edge" />  
<meta http-equiv="Content-Type" content="text/html" />
<meta charset="utf-8" />


<table id="datatablesSimple">
    <thead>
        <tr>
            <th>Nombre(s)</th>
            <th>Apellidos</th>
            <th>Teléfono</th>
            <th>Edad</th>
            <th>Matrícula</th>
            <th>Email</th>
        </tr>
    </thead>

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