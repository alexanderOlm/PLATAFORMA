<?php 
include ("conexion1.php");


$Nombre= $_POST["name"];
$Apellido= $_POST["apellido"];
$Email= $_POST["Correo"];
$Usuario= $_POST["N_name"];
$Clave=$_POST["N_pws"];
 

$insertar1 = "insert into CLIENTE_USUARIO (Nombre,Apellido,Email,Usuario,Clave) 
values ('$Nombre','$Apellido','$Email','$Usuario','$Clave')";

$resultado=mysqli_query($mysqli,$insertar1);

if($resultado){
    echo"<script>alert('se registro el usuario con exito');
   </script>";
   header("location:confirmacio.php");
}

?>
