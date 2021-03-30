<?php 
include("conexion.php");
$id = $_GET["id"];
$Cliente = "select * from cliente where Id_cliente='$id'";
$factura = "select * from factura";
$producto = "select * from producto , detalles";
$Proveedor = "select * from proveedores where Id_proveedor='$id'";
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
    <link rel="stylesheet" href="estilos/estilos.css">
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

  <form class="conteiner-table5 conteiner-table--edit5a" action="proceso_pr.php" method="POST">
            <div class="tabla__title5 tabla__title--edit5" >Datos de Productos</div>
            <div class="table__header5">Nomb proveedor</div>
            <div class="table__header5">Apel Proveedor</div>
            <div class="table__header5">Nom de empresa</div>
            <div class="table__header5">Ruc de empresa</div>
            <div class="table__header5">Operacion</div>
            <?php $resultado = mysqli_query($conexion,$Proveedor);
            while($row = mysqli_fetch_assoc($resultado)) { ?>
            <input type="hidden" class="table__item" value="<?php echo $row["Id_proveedor"]; ?>" name="Id_proveedor">
            <input type="text" class="table__item" value="<?php echo $row["Nombre_proveedor"]; ?>" name="Nombre_proveedor">
            <input type="text" class="table__item" value="<?php echo $row["Apellido_Proveedor"]; ?>" name="Apellido_Proveedor">
            <input type="text" class="table__item" value="<?php echo $row["Nombre_de_la_empresa"]; ?>" name="Nombre_de_la_empresa">
            <input type="text" class="table__item" value="<?php echo $row["Ruc_de_la_empresa"]; ?>" name="Ruc_de_la_empresa">
           
        
            <input type="submit" value="Actualizar" class="table__submit" >
             
                 <?php } mysqli_free_result($resultado); ?>
               
        </form>     



        </body>

</html>