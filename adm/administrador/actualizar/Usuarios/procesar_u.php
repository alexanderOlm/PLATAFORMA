<?php 
include("conexion.php");

$id = $_POST["Id_cliente"];
$Nombre = $_POST["Nombre"];
$Apellido= $_POST["Apellido"];
$telefono = $_POST["Telefono"];
$Dirección= $_POST["Direccion"];
$fecha= $_POST["fecha"];
$Email = $_POST["Email"];
$Usuario = $_POST["Usuario"];
$Clave = $_POST["Clave"];

$actualizar = "UPDATE cliente_usuario SET Nombre='$Nombre' , Apellido='$Apellido' , Direccion='$Dirección', fecha='$fecha' , Telefono='$telefono' , Email='$Email' , Usuario='$Usuario' , Clave='$Clave' WHERE Id_cliente='$id'";

$resultado=mysqli_query($conexion,$actualizar); 
if($resultado){
    echo"<script>alert('se registro el Factura con exito');
   </script>";
}
