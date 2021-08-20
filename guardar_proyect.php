<?php

if(isset($_POST)){
    
    //conexion ala base de datos
      include_once 'conexionV.php';

      $nombre= isset($_POST['nombre']) ? mysqli_real_escape_string($conexion,$_POST['nombre']): false;
         $voto= isset($_POST['voto']) ? mysqli_real_escape_string($conexion,$_POST['voto']): false;
         
       $titulo= isset($_POST['titulo']) ? mysqli_real_escape_string($conexion,$_POST['titulo']): false;
       $descripcion= isset($_POST['descripcion']) ? mysqli_real_escape_string($conexion,$_POST['descripcion']): false;
    
       
       //validacion
        //array de errores
    $errores=array();
    
    
  
    //validar los datos antes de guardarlos a la base de datos
    // validar campo nombre
    if(empty($titulo)){
        $errores['titulo']= "el titulo no es valido ";
        
        
    }
    if(empty($descripcion)){
        $errores['descripcion']= "la descripcion  no es valido ";
        
        
    }
     
    
    if(count($errores)== 0){
        $sql="INSERT INTO proyecto VALUES (null,'$nombre','$titulo','$descripcion', CURDATE(),'$voto');";

        $guardar= mysqli_query($conexion, $sql);

        

        echo 
        '<script language="javascript" type="text/javascript"> 
            alert("Proyecto subido con exito");
            window.location = "indexU.view.php";
        </script>';
        
     
        }
         else{

       echo 
        '<script language="javascript" type="text/javascript"> 
            alert("error en el proceso");
            window.location = "newproyect.php";
        </script>';
       
        }

    }
        
       
    






