<?php
include("conexion.php");

$id= $_POST["Id_proveedor"];
$Nombre_proveedor = $_POST["Nombre_proveedor"];
$Apellido_Proveedor= $_POST["Apellido_Proveedor"];
$Nombre_de_la_empresa = $_POST["Nombre_de_la_empresa"];
$Ruc_de_la_empresa= $_POST["Ruc_de_la_empresa"];


$actualizar = "UPDATE proveedores SET Nombre_proveedor='$Nombre_proveedor' , Apellido_Proveedor='$Apellido_Proveedor' , Nombre_de_la_empresa='$Nombre_de_la_empresa', Ruc_de_la_empresa='$Ruc_de_la_empresa'  WHERE Id_proveedor='$id'";
$resultado=mysqli_query($conexion,$actualizar); 

if($resultado){
    echo"<script>alert('se registro el Factura con exito');
   </script>";
}

