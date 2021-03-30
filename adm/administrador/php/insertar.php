<?php
include("conexion.php");

$Nombre = $_POST["Nombre"];
$Apellidos= $_POST["Apellidos"];
$telefono = $_POST["telefono"];
$Dirección= $_POST["Dirección"];
$fecha= $_POST["Fecha"];
$Email = $_POST["Email"];
$Asunto = $_POST["Asunto"];
$N_Cedula = $_POST ["N_Cedula"];
$Mensaje = $_POST["Mensaje"];
$insertar = "insert  into CLIENTE (N_cedula,Nombre,Apellido,Telefono,Direccion,Fecha,Email,Asunto,Mensaje) values
('$N_Cedula','$Nombre','$Apellidos','$telefono','$Dirección','$fecha','$Email','$Asunto','$Mensaje')";


$resultado=mysqli_query($conexion,$insertar);

if($resultado){
    echo"<script>alert('se registro el Cliente con exito');
    window.location='/administrador/adminstrador.php'</script>";
}
