<?php



if(!empty($_POST["btnregistrar"])){
   if(!empty($_POST["nombre"]) &&  !empty($_POST["apellido"]) &&  !empty($_POST["dni"]) &&  !empty($_POST["fecha"]) &&  !empty($_POST["correo"]) )  {
   $id=$_POST["id"];
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $dni=$_POST["dni"];
    $fecha=$_POST["fecha"];
    $correo=$_POST["correo"];

    $sql = $conexion->query("update persona set nombre='$nombre', apellido='$apellido', dni=$dni, fecha_nacimiento='$fecha', correo='$correo' where id_persona=$id");

    if($sql==1){
        header("location:\crud\index.php");
        echo "bien";
    }else{
        echo "<div class='alert alert-warning'> Error al modificar</div>";
        echo 'Error en la consulta SQL: ' . $conexion->error;
    }

   }else{
    echo "<div class='alert alert-warning'> Campos vacios</div>";
   }
}



?>
