<?php
include "modelo/conexion.php";
$id=$_GET["id"];
$sql=$conexion->query("select * from persona where id_persona=$id");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <title>Document</title>
</head>
<body>
  <br>
<a href="index.php"><button type="submit" class="btn btn-primary mx-3" name="btnvolver" value="ok">Volver atras</button></a>
<form class="col-4 p-3 m-auto"  method="POST">
        <h3 class="text-center text-secondary p-3" >Modificar Datos</h3>
        <input type="hidden" name="id" value="<?=$_GET["id"] ?>">
 <?php
       
        include "controlador/modifica_persona.php";
       while($datos=$sql->fetch_object()){?>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" value="<?=$datos->nombre ?>">
     </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellido</label>
    <input type="text" class="form-control" name="apellido" value="<?=$datos->apellido?>">
     </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Dni</label>
    <input type="text" class="form-control" name="dni" value="<?=$datos->dni  ?>">
     </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
    <input type="date" class="form-control" name="fecha" value="<?=$datos->fecha_nacimiento ?>" >
     </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo</label>
    <input type="text" class="form-control" name="correo" value="<?=$datos->correo ?>"  >
     </div>
    <?php  }

        ?>
   
    <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button></a>
    </form>
 </body>
</html>
