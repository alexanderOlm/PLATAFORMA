<?php
include("conexion.php");

$id = $_POST["Id_cliente"];
$Nombre = $_POST["Nombre"];
$Apellido= $_POST["Apellido"];
$telefono = $_POST["Telefono"];
$Dirección= $_POST["Direccion"];
$fecha= $_POST["fecha"];
$Email = $_POST["Email"];
$Asunto = $_POST["Asunto"];
$Mensaje = $_POST["Mensaje"];

$actualizar = "UPDATE cliente SET Nombre='$Nombre' , Apellido='$Apellido' , Direccion='$Dirección', fecha='$fecha' , telefono='$telefono' , Email='$Email' , Asunto='$Asunto' , Mensaje='$Mensaje' WHERE Id_cliente='$id'";

$resultado=mysqli_query($conexion,$actualizar); 

if($resultado){
    echo"<script>alert('se registro el Factura con exito');
   </script>";
}

