<?php
$envio = "dennisalexander11770@gmail.com";
$Nombre = $_POST["Nombre"];
$Apellidos = $_POST["Apellidos"];
$telefono = $_POST["telefono"];
$Direccion = $_POST["Dirección"];
$Email = $_POST["Email"];
$Asunto = $_POST["Asunto"];
$Mensaje = $_POST["Mensaje"];
$total = $_POST["total"];
$cantida = $_POST["cantida"];

$contenido =  "nombre \n" . $Nombre ."\nApellidos \n". $Apellidos  . "\n Telefono \n" . $telefono . "\n Dirección \n" . $Direccion . "\nEmail\n" . $Email . "\n$Asunto\n". $Asunto . "\nMensaje\n" . $Mensaje . "\ncantida\n" .$cantida. "\ntotal\n" . $total ;

mail('dennisalexander11770@gmail.com','Administración Scar Tunnig',$contenido ,'Administrador');    
mail($Email,'Usuario',$contenido, 'Te comunicastes con nosostros');    
    echo"<script>alert('Se Reguistro sus datos par su envio si eliguio el pago con tarjeta se llevara un terminal de pago ');
    window.location='/empresa_auto_lujos/'</script>";
?>
