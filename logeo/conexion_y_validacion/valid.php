<?php 

$usuario = $_POST['name'];
$contraseñas= $_POST['pws'];
//conexion
$Mysqli=new mysqli("localhost","desarrollo","15092010DE","empresa_scar_tunnig");

if(mysqli_connect_errno()){
    printf("conexion fallida", mysqli_connect_errno());
}
// selecion de clave 
$consulta="select * from cuenta where Nombre='$usuario' and  contraseña='$contraseñas'";
$resultados =mysqli_query($Mysqli, $consulta);

$filas=mysqli_num_rows($resultados);

if($filas>0){
    header("Location:../CLIENTE/cliente_productos.html");
}
else{
    echo "su usario o contraseña es incorreta ";
}
mysqli_free_result($resultados);
mysqli_close($Mysqli);