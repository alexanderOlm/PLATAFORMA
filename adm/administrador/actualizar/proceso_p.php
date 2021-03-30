<?php
include("conexion.php");

$id = $_POST["Id_producto"];
$Nombre_de_producto = $_POST["Nombre_de_producto"];
$Precio= $_POST["Precio"];
$Stock = $_POST["Stock"];
$cantidad= $_POST["cantidad"];
$iva= $_POST["iva"];
$total = $_POST["total"];
;

$actualizar = "UPDATE producto SET Nombre_de_producto='$Nombre_de_producto' , Precio='$Precio' , Stock='$Stock', cantidad='$cantidad' , iva='$iva' , total='$total' WHERE Id_producto='$id'";
$resultado=mysqli_query($conexion,$actualizar); 

if($resultado){
    echo"<script>alert('se registro el Factura con exito');
   </script>";
}

