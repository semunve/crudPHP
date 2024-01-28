<?php


if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) &&  !empty($_POST["apellido"]) && !empty($_POST["dni"]) && !empty($_POST["fecha"]) && !empty($_POST["correo"])){
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $dni=$_POST["dni"];
    $fecha=$_POST["fecha"];
    $correo=$_POST["correo"];
    
    $sql=$conexion->query("insert into persona (nombre,apellido,dni,fecha_nacimiento,correo)values('$nombre','$apellido','$dni','$fecha','$correo')");
    if($sql==1){
        echo '<div class="alert alert-success">Registrado correctamente</div>'; 
    }else{
        '<div class="alert alert-danger">Error al registrar</div>';
    }
    
       
    }else{
        echo  '<div class="alert alert-warning">Alguno de los campos esta vacío</div>';
    }
}