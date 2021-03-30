<?php
include("conexion.php");

$Nombre_proveedor = $_POST["Nombre_proveedor"];
$Apellido_Proveedor = $_POST["Apellido_Proveedor"];
$Nombre_de_la_empresa = $_POST["Nombre_de_la_empresa"];
$Ruc_de_la_empresa = $_POST["Ruc_de_la_empresa"];
$insertar = "insert  into proveedores (Nombre_proveedor,Apellido_Proveedor,Nombre_de_la_empresa,Ruc_de_la_empresa) values
('$Nombre_proveedor','$Apellido_Proveedor','$Nombre_de_la_empresa','$Ruc_de_la_empresa')";


$resultado=mysqli_query($conexion,$insertar);

if($resultado){
    echo"<script>alert('se registro el Proveedor con exito');
    window.location='/administrador/adminstrador.php'</script>";
}