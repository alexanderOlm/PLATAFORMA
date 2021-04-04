<?php 
include("conexion.php");
$Cliente = "select * from cliente";
$Usuario = "select * from cliente_usuario";
$factura = "select * from factura";
$producto = "select * from producto , detalles";
$Proveedor = "select * from proveedores";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar tablas</title>
    <script src="https://kit.fontawesome.com/521dc7195c.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos/stilos.css">
</head>

<body>
    <div class="sidebar">
        <h1>
            admistrador
        </h1>
        <ul>
            <li>
                <a href="../adminstrador.php">insertar&nbsp;&nbsp <i class="fas fa-plus-square"></i></a>
            </li>
            <li>
                <a href="../Mostrar/mostrar.php">Mostrar &nbsp;&nbsp<i class="fas fa-eye"></i></a>
            </li>
            <li>
                <a href="../actualizar/actualizar.php">Actualizar&nbsp;&nbsp;<i class="fas fa-pen-alt"></i></a>
            </li>
            <li>
                <a href="eliminar.php"> Borrar &nbsp;&nbsp;<i class="fas fa-trash-alt"></i></a>
                   <ul class="submenu">
                        <li class="li_sub">
                            <a href="cliente/eliminar.php"> Cliente </a>
                        </li>
                        <li class="li_sub">
                            <a href="Usuarios/eliminar.php">Usuario</a>
                        </li>
                        <li class="li_sub">
                            <a href="Factura/eliminar.php">Factura</a>
                        </li>
                        <li class="li_sub">
                            <a href="producto/eliminar.php">Producto</a>
                        </li>

                        <li class="li_sub">
                            <a href="proveedor/eliminar.php">Proveedor</a>
                        </li>
                         <li>
                <a href="../adminstrador.php"> Inicio &nbsp;&nbsp <i class="fas fa-fast-backward"></i></a>
            </li>
                      
                    </ul>
            </li>
             <li>
                <a href="../adminstrador.php"> Inicio &nbsp;&nbsp <i class="fas fa-fast-backward"></i></a>
            </li>
        </ul>


        <script src="jqueri/abrir.js"></script>

        
</body>

</html>