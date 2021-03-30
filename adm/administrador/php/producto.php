<?php
include("conexion.php");
$Nombre_de_producto = $_POST["Nombre_de_producto"];
$Precio = $_POST["Precio"];
$Stock = $_POST["Stock"];
$cantidad = $_POST["cantidad"];
$Total = $_POST["Total"];
$iva = $_POST["iva"]; 

$insertar = "insert  into producto (Nombre_de_producto,Precio,Stock) values ('$Nombre_de_producto','$Precio','$Stock')";
$insertar2 = "insert  into detalles (cantidad,Total,iva) values ('$cantidad','$Total','$iva')";


$resultado=mysqli_query($conexion,$insertar);
$resultado2=mysqli_query($conexion,$insertar2);
if($resultado){
    echo"<script>alert('se registro el Producto con exito');
    window.location='/administrador/adminstrador.php'</script>";
}