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
                <a href="../eliminar.php"> Borrar &nbsp;&nbsp;<i class="fas fa-trash-alt"></i></a>
            </li>
        </ul>


        <div class="conteiner-table conteiner-table--edit">
            <div class="tabla__title tabla__title--edit">Datos de Cliente</div>
            <div class="table__header">Nombre</div>
            <div class="table__header">Apellido</div>
            <div class="table__header">Direccion</div>
            <div class="table__header">fecha</div>
            <div class="table__header">Telefono</div>
            <div class="table__header">Email</div>
            <div class="table__header">Asunto</div>
            <div class="table__header">Mensaje</div>
            <div class="table__header">Operacion</div>
            <?php $resultado = mysqli_query($conexion, $Cliente);
            while($row = mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__item"><?php echo $row["Nombre"]; ?></div>
            <div class="table__item"><?php echo $row["Apellido"]; ?></div>
            <div class="table__item"><?php echo $row["Direccion"]; ?></div>
            <div class="table__item"><?php echo $row["fecha"]; ?></div>
            <div class="table__item"><?php echo $row["Telefono"]; ?></div>
            <div class="table__item"><?php echo $row["Email"]; ?></div>
            <div class="table__item"><?php echo $row["Asunto"]; ?></div>
            <div class="table__item"><?php echo $row["Mensaje"]; ?></div>
            <div class="table__item">
                <a  href="procesar_eliminar.php?id=<?php echo $row["Id_cliente"]; ?>" class="table__item__link">eliminar</a>

            </div>
            <?php } mysqli_free_result($resultado); ?>
        </div>
        
        <script src="jqueri/abrir.js"></script>

        
</body>

</html>