<?php
include("conexion.php");

$id = $_GET["id"];
$eliminar = "DELETE fROM proveedores WHERE Id_proveedor = '$id'";
$resultado=mysqli_query($conexion,$eliminar); 

if($resultado){
    echo"<script>alert('Se eliminado corretamente retroseda a la paguina principal y actualize');
   </script>";
}
