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
                <a href="../actualizar.php">Actualizar&nbsp;&nbsp;<i class="fas fa-pen-alt"></i></a>
              
            
            </li>
            <li>
                <a href="../eliminar/eliminar.php"> Borrar &nbsp;&nbsp;<i class="fas fa-trash-alt"></i></a>
            </li>
        </ul>


      
 <h1>Usuario</h1>
        <div class="conteiner-table2 conteiner-table--edi2" >
            <div class="tabla__title2 tabla__title--edit2">Datos de Usuario</div>
            <div class="table__header2">Nombre</div>
            <div class="table__header2">Apellido</div>
            <div class="table__header2">Direccion</div>
            <div class="table__header2">fecha</div>
            <div class="table__header2">Telefono</div>
            <div class="table__header2">Email</div>
            <div class="table__header2">Usuario</div>
            <div class="table__header2">Clave</div>
            <div class="table__header">Operacion</div>
            <?php $resultado = mysqli_query($conexion, $Usuario );
            while($row = mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__item2"><?php echo $row["Nombre"]; ?></div>
            <div class="table__item2"><?php echo $row["Apellido"]; ?></div>
            <div class="table__item2"><?php echo $row["Direccion"]; ?></div>
            <div class="table__item2"><?php echo $row["Fecha"]; ?></div>
            <div class="table__item2"><?php echo $row["Telefono"]; ?></div>
            <div class="table__item2"><?php echo $row["Email"]; ?></div>
            <div class="table__item2"><?php echo $row["Usuario"]; ?></div>
            <div class="table__item2"><?php echo $row["Clave"]; ?></div>
            <div class="table__item">
                <a  href="actualizar_campos2.php?id=<?php echo $row["Id_cliente"]; ?>" class="table__item__link">Editar</a>

            </div>
            <?php } mysqli_free_result($resultado); ?>
        </div>

        
         
        <script src="jqueri/abrir.js"></script>
</body>

</html>