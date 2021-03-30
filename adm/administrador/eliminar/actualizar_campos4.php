<?php 
include("conexion.php");
$id = $_POST["id"];
$usuario = "select * from cliente_usuario where Id_cliente='$id'";
$factura = "select * from factura where Nu_factura='$id'";
$producto = "select * from producto  where Id_producto='$id' ";
$detalles = "select * from detalles where Num_detalles='$id' ";
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

        <form class="conteiner-table4 conteiner-table--edit4a" action="proceso_p.php" method="POST">
              <div class="tabla__title4 tabla__title--edit4a">Datos de Productos</div>
            <div class="table__header4a"> Nombre_de_producto</div>
            <div class="table__header4a">Precio</div>
            <div class="table__header4a">Stock</div>
            <div class="table__header4a">iva</div>
            <div class="table__header4a">total</div>
            <div class="table__header4a">Codigo_de_producto</div>
            <div class="table__header4a">Operacion</div>
            
            <?php $resultado = mysqli_query($conexion,$producto);
            while($row = mysqli_fetch_assoc($resultado)) { ?>
            <br>
             <input type="hidden" class="table__item" value="<?php echo $row["Id_producto"]; ?>" name="Id_producto">
            <input type="text" class="table__item" value="<?php echo $row["Nombre_de_producto"]; ?>" name="Nombre_de_producto">
            <input type="text" class="table__item" value="<?php echo $row["Precio"]; ?>" name="Precio">
            <input type="text" class="table__item" value="<?php echo $row["Stock"]; ?>" name="Stock">
            <input type="text" class="table__item" value="<?php echo $row["cantidad"]; ?>" name="cantidad">
            <input type="text" class="table__item" value="<?php echo $row["iva"]; ?>" name="iva">
            <input type="text" class="table__item" value="<?php echo $row["total"]; ?>" name="total">

             <input type="submit" value="Actualizar" class="table__submit" >

            <?php } mysqli_free_result($resultado); ?>
        </div>      

        </body>

</html>

