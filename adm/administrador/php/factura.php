<?php
include("conexion.php");

$Nombre_de_p = $_POST ["Nombre_de_p"];
$Nombre = $_POST ["Nombre"];
$Apellidos = $_POST ["Apellidos"];
$Dirección = $_POST ["Dirección"];
$telefono = $_POST ["telefono"];
$Email = $_POST ["Email"];
$Codigo_de_producto = $_POST ["Codigo_de_producto"];
$fecha = $_POST ["fecha"];
$Precio = $_POST ["Precio"];
$Detalles = $_POST ["Detalles"];
$cantida = $_POST ["cantida"];
$total = $_POST ["total"];
$targeta = $_POST["tarjeta"]; 
$fisico = $_POST["fisico"];

$insertar = "insert  into FACTURA (Nombre_de_producto,Nombre_Us,Apellido_Us,Direccion,telefono,Email,Codigo_de_producto,fecha,Precio_del_producto,detalles,cantidad,total,tarjeta,fisico) 
values ('$Nombre_de_p','$Nombre','$Apellidos','$Dirección','$telefono','$Email','$Codigo_de_producto','$fecha','$Precio','$Detalles','$cantida','$total','$targeta','$fisico')";


$resultado=mysqli_query($conexion,$insertar);

if($resultado){
    echo"<script>alert('se registro el Factura con exito');
    window.location='/administrador/adminstrador.php'</script>";
}
