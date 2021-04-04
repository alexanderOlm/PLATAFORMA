<?php 
require_once "php/conexion.php";


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador Insertar</title>
    <script src="https://kit.fontawesome.com/521dc7195c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos/estulos.css" >
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>

<body>
    <div class="sidebar">
        <h1>
            admistrador
        </h1>
        <ul>
            <li>
                <a href="adminstrador.php">insertar&nbsp;&nbsp <i class="fas fa-plus-square"></i></a>
            </li>
            <li>
                <a href="Mostrar/mostrar.php">Mostrar &nbsp;&nbsp<i class="fas fa-eye"></i></a>
                 
            
            </li>
            <li>
                <a href="actualizar/actualizar.php">Actualizar&nbsp;&nbsp;<i class="fas fa-pen-alt"></i></a>
            </li>
            <li>
                <a href="eliminar/eliminar.php"> Borrar &nbsp;&nbsp;<i class="fas fa-trash-alt"></i></a>
            </li>

            <li>
                <a href="../../index.html">salir &nbsp;&nbsp;<i class="fas fa-fast-backward"></i></a>
            </li>
        </ul>
    </div>
    <div class="contenedor">
        <i class="fas fa-align-justify"></i>

    </div>

    <section class="insertar">
        <div class="container-add">
            <h1 class="container-title">Formulario Insertar Clientes </h1>


            <form class="container-form" action="php/insertar.php" method="POST"                   name="formDatosPersonales">

                <label for="Nombre">Nombre</label>
                <input type="text" class="input" name="Nombre" id="Nombre" placeholder="Escribe tu nombre" required />

                <label for="Apellidos" class="label">Apellidos</label>
                <input type="text" class="input" name="Apellidos" id="Apellidos" placeholder="Apellido" required />

                <label for="telefon" class="label">Telefono</label>
                <input type="number" class="input" name="telefono" id="telefono" placeholder="escriba su numero de telefono" required />

                <label for="Direccion" class="label">Dirección</label>
                <input type="text" class="input" name="Dirección" id="Dirección" placeholder="Dirección" required />

                <label for="Fecha" class="label">Fecha</label>
                <input type="date" class="input" name="Fecha" id="Fecha" placeholder="Dirección" required />


                <label for="Email" class="label">Email</label>
                <input type="Email" class="input" name="Email" id="Email" placeholder="Email" required/>

                <label for="Asunto" class="label">Asunto</label>
                <input type="text" class="input" name="Asunto" id="Asunto" placeholder="titular de la consulta" required/>

                <label for="Asunto" class="label">N_Cedula</label>
                <input type="text" class="input" name="N_Cedula" id="Asunto" placeholder="titular de la consulta" required/>

                <label for="Mensaje" class="label">Mensaje</label>
                <textarea name="Mensaje" class="input" for="Mensaje" placeholder="descripción" required maxlength="300"></textarea> 
                <input class="submit" type="submit" name="Enviar" value="enviar" />
            </form>

 
        </div>
    </section>

   <hr class="linea" size="8px"  width="80%" />




  <section class="insertar_2">
        <div class="container-add_2">
            <h1 class="container-title_2">Formulario Insertar Usuarios </h1>


            <form class="container-form_2" action="php/insertar_U.php" method="POST"                   name="formDatosPersonales">

                <label for="Nombre">Nombre</label>
                <input type="text" class="input_2" name="Nombre" id="Nombre" placeholder="Escribe tu nombre" required />

                <label for="Apellidos" class="label_2">Apellidos</label>
                <input type="text" class="input_2" name="Apellidos" id="Apellidos" placeholder="Apellido" required />

                <label for="Direccion" class="label_2">Dirección</label>
                <input type="text" class="input_2" name="Dirección" id="Dirección" placeholder="Dirección" required />

                <label for="Fecha" class="label_2">Fecha</label>
                <input type="date" class="input_2" name="Fecha" id="Fecha" placeholder="Dirección" required />

                <label for="telefon" class="label_2">Telefono</label>
                <input type="number" class="input_2" name="telefono" id="telefono" placeholder="escriba su numero de telefono" required />


                <label for="Email" class="label_2">Email</label>
                <input type="Email" class="input_2" name="Email" id="Email" placeholder="Email" required/>

                <label for="Usuario" class="label_2">Usuario</label>
                <input type="text" class="input_2" name="Usuario" id="Asunto" placeholder="Ingreso de usuario" required/>

                 <label for="Contraseña" class="label_2">Contraseña</label>
                <input type="text" class="input_2" name="Clave" id="Clave" placeholder="Ingreso de contraseña" required/>


                <input class="submit_2" type="submit" name="Enviar" value="enviar" />
            </form>


        </div>
    </section>

   <hr class="linea_2" size="8px"  width="80%" />

 <section class="insertar_3">
        <div class="container-add_3">
            <h1 class="container-title_3">Formulario Insertar Factura </h1>
  
        <form action="php/factura.php" class="container-form_3" method="POST" name="formDatosPersonales">

        <label for="Nombre" class="label_3">Nombre del producto</label>
        <input type="text" class="input_3"  name="Nombre_de_p" id="Nombre_de_p" placeholder="Escribe el nombredel producto"/>
        
        <label for="Nombre"  class="label_3">Nombre</label>
        <input type="text" class="input_3" name="Nombre" id="Nombre" placeholder="Escribe el nombredel producto"/>
        
        <label for="Apellidos" class="label_3">Apellidos</label>
        <input type="text" class="input_3" name="Apellidos" id="Apellidos" placeholder="1r Apellido"/>
        
          <label for="Direccion" class="label_3">Dirección</label>
        <input type="text" class="input_3" name="Dirección" id="Dirección" placeholder="Dirección"/>

         <label for="telefono" class="label_3">Telefono</label>
        <input type="text" class="input_3" name="telefono" id="telefono" placeholder="escriba su numero de telefono" />
      
        
        <label for="Email" class="label_3" >Email</label>
        <input type="Email" class="input_3" name="Email" id="Email" placeholder="Email" />

         <label for="Codigo_de_producto" class="label_3">Codigo del producto</label>
        <input type ="text"  class="input_3" name="Codigo_de_producto" id="Codigo_de_producto" placeholder="titular de la consulta"/>
    
         <label for="fecha" class="label_3">Fecha</label>
        <input type ="text"  class="input_3" name="fecha" id="fecha" placeholder="titular de la consulta"/>

          
        <label for="Precio" class="label_3">ingrese el presio del producto con IVA</label>
        <input type ="text" class="input_3" name="Precio" id="Precio" placeholder="titular de la consulta"/>



        <label for="cantidad" class="label_3">cantidad </label>
        <input type ="text" class="input_3" name="cantida" id="cantidad" placeholder="titular de la consulta"/>

  <label for="Precio" class="label_3">total</label>
        <input type ="text" class="input_3" name="total" id="Precio" placeholder="titular de la consulta"/>

  <label for="Precio" class="label_3">Pago en Tarjeta</label>
        <input type ="text" class="input_3" name="tarjeta" id="Precio" placeholder="titular de la consulta"/>


 <label for="Precio" class="label_3">Pago en fisico</label>
        <input type ="text" class="input_3" name="fisico" id="Precio" placeholder="titular de la consulta"/>



          <label for="Detalles" class="label_3">Detalles</label>
        <textarea class="input_3" name="Detalles" for="Detalles" placeholder="Copia el testo del costo de producto que deseas obtener " maxlength="300"></textarea>







        <input type="submit" class="submit_3" name="Comprar" value="comprar"/>
    </form>

    <hr class="linea_3" size="8px"  width="105%" />

        </div>
    </section>





      <section class="insertar_4">
        <div class="container-add_4">
            <h1 class="container-title_4">Formulario Insertar Producto </h1>


            <form class="container-form_4" action="php/producto.php" method="POST"                   name="formDatosPersonales">

                <label for="Nombre">Nombre de producto</label>
                <input type="text" class="input_4" name="Nombre_de_producto" id="Nombre" placeholder="Escribe tu nombre" required />

                <label for="Apellidos" class="label_4">	Precio</label>
                <input type="number" class="input_4" name="Precio" id="Apellidos" placeholder="precio" required />

                <label for="Direccion" class="label_4">Stock</label>
                <input type="text" class="input_4" name="Stock" id="Dirección" placeholder="condicion del producto" required />

                <label for="Fecha" class="label_4">Numero de factura</label>
                <input type="number" class="input_4" name="Nu_factura" id="Fecha" placeholder="Dirección" required />

                <label for="telefon" class="label_4">cantidad</label>
                <input type="number" class="input_4" name="cantidad" id="telefono" placeholder="escriba su numero de telefono" required />


                <label for="Email" class="label_4">Total</label>
                <input type="number" class="input_4" name="Total" id="Email" placeholder="Total a pagar" required/>

                
                 <label for="Contraseña" class="label_4">iva</label>
                <input type="text" class="input_4" name="iva" id="Clave" placeholder="El Iva es del 12%" required/>


                <input class="submit_4" type="submit" name="Enviar" value="enviar" />
                <input class="submit_4" type="submit" name="calcular" value="calcular" />
            </form>


        </div>
    </section>
<hr class="linea_4" size="8px"  width="80%" />


   
      <section class="insertar_5">
        <div class="container-add_5">
            <h1 class="container-title_5">Formulario Insertar Proveedor </h1>


            <form class="container-form_5" action="php/proveedor.php" method="POST"                   name="formDatosPersonales">

                <label for="Nombre">Nombre proveedor</label>
                <input type="text" class="input_5" name="Nombre_proveedor" id="Nombre" placeholder="Escribe tu nombre" required />

                <label for="Apellidos" class="label_5">Apellido Proveedor</label>
                <input type="text" class="input_5" name="Apellido_Proveedor" id="Apellidos" placeholder="precio" required />

                <label for="Direccion" class="label_5">Nombre de la Empresa</label>
                <input type="text" class="input_5" name="Nombre_de_la_empresa" id="Dirección" placeholder="condicion del producto" required />

                <label for="Fecha" class="label_5">Ruc de la empresa</label>
                <input type="number" class="input_5" name="Ruc_de_la_empresa" id="Fecha" placeholder="Dirección" required />


                

                <input class="submit_5" type="submit" name="Enviar" value="enviar" />
                
            </form>


        </div>
    </section>

    <script src="jqueri/abrir.js"></script>
</body>

</html>