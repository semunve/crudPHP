<?php


if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("delete from persona where id_persona=$id");
    if($sql==1){
   echo '<div class="alert alert-success ">Persoana eliminada correctamente</div>';
    }else{
        echo '<div class="alert alert-danger " >Persoana no eliminada</div>';

    }
}

?>

