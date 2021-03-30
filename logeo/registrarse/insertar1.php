<?php 
include ("conexion1.php");


$Nombre= $_POST["Nombre"];
$Apellido= $_POST["Apellido"];
$Direccion= $_POST["Direccion"];
$Fecha= $_POST["Fecha"];
$Telefono= $_POST["Telefono"];
$Email= $_POST["Email"];
$Usuario= $_POST["Usuario"];
$Clave=$_POST["Clave"];
 

$insertar1 = "insert into CLIENTE_USUARIO (Nombre,Apellido,Direccion,Fecha,Telefono,Email,Usuario,Clave) 
values ('$Nombre','$Apellido','$Direccion','$Fecha','$Telefono','$Email','$Usuario','$Clave')";

$resultado=mysqli_query($mysqli,$insertar1);

if($resultado){
    echo"<script>alert('se registro el usuario con exito');
    window.location='/empresa_auto_lujos/'</script>";
}

?>
