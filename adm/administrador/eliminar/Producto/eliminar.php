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
    <link rel="stylesheet" href="estilos.css">
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
                
            </li>
        </ul>


        <div class="conteiner-table4 conteiner-table--edit4">
            <div class="tabla__title4 tabla__title--edit4">Datos de Productos</div>
            <div class="table__header4"> Nombre_de_producto</div>
            <div class="table__header4">Precio</div>
            <div class="table__header4">Stock</div>
            <div class="table__header4">cantidad</div>
            <div class="table__header4">iva</div>
            <div class="table__header4">total</div>
          
            <div class="table__header">Operacion</div>
            <?php $resultado = mysqli_query($conexion,$producto);
            while($row = mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__item4"><?php echo $row["Nombre_de_producto"]; ?></div>
            <div class="table__item4"><?php echo $row["Precio"]; ?></div>
            <div class="table__item4"><?php echo $row["Stock"]; ?></div>
            <div class="table__item4"><?php echo $row["cantidad"]; ?></div>
            <div class="table__item4"><?php echo $row["iva"]; ?></div>
            <div class="table__item4"><?php echo $row["total"]; ?></div>
            <div class="table__item">
                <a  href="procesar_eliminar4.php?id=<?php echo $row["Id_producto"]; ?>" class="table__item__link">eliminar</a>

            </div>

            <?php } mysqli_free_result($resultado); ?>
        </div>
        
        <script src="jqueri/abrir.js"></script>

        
</body>

</html>