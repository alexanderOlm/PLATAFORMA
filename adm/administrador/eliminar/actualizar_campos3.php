<?php 
include("conexion.php");
$id = $_POST["id"];
$usuario = "select * from cliente_usuario where Id_cliente='$id'";
$factura = "select * from factura where Nu_factura='$id'";
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
                <a href="actualizar.php">Actualizar&nbsp;&nbsp;<i class="fas fa-pen-alt"></i></a>
            </li>
            <li>
                <a href=""> Borrar &nbsp;&nbsp;<i class="fas fa-trash-alt"></i></a>
            </li>
        </ul>

<hr class="linea_1" size="8px" width="685%" />

        <form class="conteiner-table3 conteiner-table--edit3_1" action="procesar_f.php" method="POST">
            <div class="tabla__title3 tabla__title--edit3_1">Datos de factura</div>
            <div class="table__header3">Nom de producto</div>
            <div class="table__header3">Nombre Us</div>
            <div class="table__header3">Apellido Us</div>
            <div class="table__header3">Direccion</div>
            <div class="table__header3">Telefono</div>
            <div class="table__header3">Email</div>
            <div class="table__header3">Cod de producto</div>
            <div class="table__header3">Fecha</div>
            <div class="table__header3">Pre del producto</div>
            <div class="table__header3">Detalles</div>
            <div class="table__header">Operacion</div>
            <?php $resultado = mysqli_query($conexion,$factura);
            while($row = mysqli_fetch_assoc($resultado)) { ?>
            <br>
            <input type="hidden" class="table__item" value="<?php echo $row["Nu_factura"]; ?>" name="Nu_factura">
            <input type="text" class="table__item" value="<?php echo $row["Nombre_de_producto"]; ?>" name="Nombre_de_producto">
            <input type="text" class="table__item" value="<?php echo $row["Nombre_Us"]; ?>" name="Nombre_Us">
            <input type="text" class="table__item" value="<?php echo $row["Apellido_Us"]; ?>" name="Apellido_Us">
            <input type="text" class="table__item" value="<?php echo $row["Direccion"]; ?>" name="Direccion">
            <input type="text" class="table__item" value="<?php echo $row["telefono"]; ?>" name="telefono">
            <input type="text" class="table__item" value="<?php echo $row["Email"]; ?>" name="Email">
            <input type="text" class="table__item" value="<?php echo $row["Codigo_de_producto"]; ?>" name="Codigo_de_producto">
            <input type="text" class="table__item" value="<?php echo $row["fecha"]; ?>" name="fecha">
            <input type="text" class="table__item" value="<?php echo $row["Precio_del_producto"]; ?>" name="Precio_del_producto">
            <input type="text" class="table__item" value="<?php echo $row["Detalles"]; ?>" name="Detalles">

               <input type="submit" value="Actualizar" class="table__submit" >

            <?php } mysqli_free_result($resultado); ?>
        </div>
     
        </from>



        </body>

</html>