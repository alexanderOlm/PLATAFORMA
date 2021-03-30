<?php
include("conexion2.php");


$Nombre_de_producto = $_POST["Nombre_de_producto"];
$Nombre = $_POST ["Nombre"];
$Apellidos = $_POST ["Apellidos"];
$Dirección = $_POST ["Dirección"];
$telefono = $_POST ["telefono"];
$Email = $_POST ["Email"];
$Codigo_de_producto = $_POST ["Codigo_de_producto"];
$fecha = $_POST ["fecha"];
$Precio = $_POST ["Precio"];
$cantida = $_POST ["cantida"];
$total = $_POST ["total"];
$targeta = $_POST["targeta"]; 
$fisico = $_POST["fisico"];



$insertar = "insert  into FACTURA (Nombre_de_producto,Nombre_Us,Apellido_Us,Direccion,telefono,Email,Codigo_de_producto,fecha,Precio_del_producto,cantidad,total,tarjeta,fisico) 
values ('$Nombre_de_producto','$Nombre','$Apellidos','$Dirección','$telefono','$Email','$Codigo_de_producto','$fecha','$Precio','$cantida','$total','$targeta','$fisico')";


$resultado=mysqli_query($mysqli,$insertar);



header("location:confirmacio.php");
