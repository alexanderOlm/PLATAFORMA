<?php
include("mysql.php");

$Nombre = $_POST["Nombre"];
$Apellidos= $_POST["Apellidos"];
$telefono = $_POST["telefono"];
$Dirección= $_POST["Dirección"];

$Email = $_POST["Email"];
$Asunto = $_POST["Asunto"];
$Mensaje = $_POST["Mensaje"];
$insertar = "insert  into CLIENTE (Nombre,Apellido,Telefono,Direccion,Email,Asunto,Mensaje) values
('$Nombre','$Apellidos','$telefono','$Dirección','$Email','$Asunto','$Mensaje')";


$resultado=mysqli_query($mysqli,$insertar);

if($resultado){
    echo"<script>alert('se registro el usuario con exito');
    window.location='/empresa_auto_lujos/'</script>";
}
