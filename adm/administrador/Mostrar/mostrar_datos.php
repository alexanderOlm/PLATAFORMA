<?php
include("conexion.php");


$insertar = "select * from cliente";

$resultado=mysqli_query($conexion,$insertar);

if($resultado){
    echo"<script>alert('se registro el Factura con exito');
    window.location='/administrador/adminstrador.php'</script>";
}
