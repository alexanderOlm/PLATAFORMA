<?php
include("conexion.php");

$Nombre = $_POST["Nombre"];
$Apellido= $_POST["Apellido"];
$Dirección= $_POST["Dirección"];
$fecha= $_POST["Fecha"];
$telefono = $_POST["telefono"];
$Email = $_POST["Email"];
$Usuario = $_POST["Usuario"];
$Clave = $_POST["Clave"];
$insertar1 = "insert into CLIENTE_USUARIO (Nombre,Apellido,Direccion,Fecha,telefono,Email,Usuario,Clave) 
values ('$Nombre','$Apellidos','$Dirección','$fecha','$telefono','$Email','$Usuario','$Clave')";

$resultado=mysqli_query($conexion,$insertar1);

if($resultado){
  echo"<script>alert('se registro el usuario con exito');
window.location='/administrador/adminstrador.php'</script>";
}
