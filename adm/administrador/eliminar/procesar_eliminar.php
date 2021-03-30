<?php
include("conexion.php");

$id = $_GET["id"];
$eliminar = "DELETE fROM cliente WHERE Id_cliente = '$id'";
$resultado=mysqli_query($conexion,$eliminar); 

if($resultado){
    echo"<script>alert('se registro el Factura con exito');
   </script>";
}
