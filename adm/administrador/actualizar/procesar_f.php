<?php 
include("conexion.php");

$id = $_POST["Nu_factura"];
$Nombre_de_producto = $_POST["Nombre_de_producto"];
$Nombre_Us = $_POST["Nombre_Us"];
$Apellido_Us = $_POST["Apellido_Us"];
$Direccion = $_POST["Direccion"];
$telefono = $_POST["telefono"];
$Email = $_POST["Email"];
$Codigo_de_producto = $_POST["Codigo_de_producto"];
$fecha = $_POST["fecha"];
$Precio_del_producto = $_POST["Precio_del_producto"];
$Detalles = $_POST["Detalles"];
$cantida = $_POST ["cantidad"];
$total = $_POST ["total"];
$targeta = $_POST["tarjeta"]; 
$fisico = $_POST["fisico"];


$actualizar = "UPDATE factura SET Nombre_de_producto='$Nombre_de_producto' , Nombre_Us='$Nombre_Us' , Apellido_Us='$Apellido_Us', Direccion='$Direccion' , Telefono='$telefono' , Email='$Email' , Codigo_de_producto='$Codigo_de_producto' , fecha='$fecha', Precio_del_producto='$Precio_del_producto' , Detalles='$Detalles',cantidad='$cantida', total='$total', tarjeta='$targeta', fisico='$fisico' WHERE Nu_factura='$id'";

$resultado=mysqli_query($conexion,$actualizar); 
if($resultado){
    echo"<script>alert('se registro el Factura con exito');
   </script>";
}
