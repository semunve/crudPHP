<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud en php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <script>
    function eliminar(){
      var respuesta=confirm("¿Está seguro que quiere eliminar?");
      return respuesta;

    }
  </script>
    <h1 class="text-center p-3" >crud php</h1>
    <?php 
    
    include "modelo/conexion.php";
    //llamada eliminar
    include "controlador/eliminar.php"
    ?>
    <div class="container-fluid row">
    <form class="col-4"  method="POST">
        <h3 class="text-center text-secondary p-3" >Registros</h3>
  
        <?php
      
        include "controlador/registro_persona.php";

        ?>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre">
     </div>

     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellido</label>
    <input type="text" class="form-control" name="apellido">
     </div>

     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Dni</label>
    <input type="text" class="form-control" name="dni">
     </div>

     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
    <input type="date" class="form-control" name="fecha">
     </div>

     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo</label>
    <input type="text" class="form-control" name="correo">
     </div>
 
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
</form>
<div class="col-8 p-4">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRES</th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">DNI</th>
      <th scope="col">FECHA NAC.</th>
      <th scope="col">CORREO</th>
      <th   scope="col"></th>
    </tr>
  </thead class="bg-green" >
  <tbody>
  <?php 
    include "modelo/conexion.php";
    $sql=$conexion->query("select * from persona");

    while($datos=$sql->fetch_object()){
      
      ?>
     <td><?=$datos->id_persona?></td>
     <td><?=$datos->nombre?></td>
     <td><?=$datos->apellido?></td>
     <td><?=$datos->dni?></td>
     <td><?=$datos->fecha_nacimiento?></td>
     <td><?=$datos->correo?></td>
      
      <td>
        <a href="modificar.php?id=<?= $datos->id_persona?>" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
        <a onclick="return eliminar()" href="index.php?id=<?= $datos->id_persona?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
    </td>
    </tr>
<?php
 }
      ?>  
    </tbody>
</table>
</div>
    </div>
 </body>
</html>
