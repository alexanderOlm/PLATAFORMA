<? php 
require_once ("conexion2.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parrillas</title>
    <script src="https://kit.fontawesome.com/521dc7195c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../stylos_cliente/menu.css">
    <link rel="stylesheet" href="stilos/stylos_p.css">
    <link rel="stylesheet" href="../factura/stilos/for.css">
    <link rel="stylesheet" href="../stylos_cliente/stylos_cliente.css">
</head>

<body>
    <header>
        <div class="contenedor">
            <h1 class="fas fa-car">
                <a class="index" href="../cliente_productos.html">Scar tunnig</a>

            </h1>
            <input type="checkbox" id="menu-bar">
            <label class="fas fa-bars" for="menu-bar"></label>

            <ul class="menu">
                <li>
                    <a href="../ambientales/ambientales.html">Ambiental</a>

                </li>
                <li>
                    <a href="../Cubre_volante/cubre_volante.html">Cubre volantes</a>

                </li>
                <li>
                    <a href="../Lámin_de_seguridad/Lámina_de_seguridad.html">Lámina de seguridad</a>

                </li>
                <li>
                    <a href="parrillas.php">parrillas</a>
                </li>
                <li>
                    <a href="../plumas/plumas.php">Plumas</a>
                </li>
                <li>
                    <a href="../parasol/Parasol.php">parasoles</a>
                </li>
                <li>
                    <a href="../moquetas y varios/moquetas_y_varios.php">Moquetas y varios</a>
                </li>


            </ul>

        </div>
    </header>
    <section>
        <h1 class="modificar">
            Parrillas
        </h1>
    </section>


    
    
    <article class="contenedor_carta">
        <div class="contenedor_carta2">
            <div class="carta">
                <div class="lado frente">
                    <img src="parrilla/parilla.PNG" alt="">

                </div>
                <div class="lado atras">
                    <h2>
                        Parrilla Universal
                    </h2>
                    <img class="mas_pequeña" src="parrilla/toyota.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="contenedor_carta2">
            <div class="carta">
                <div class="lado frente">
                    <img src="parrilla/parrilla2.PNG" alt="">

                </div>
                <div class="lado atras">
                    <h2>
                        Parrilla Chevrolet Vitara MR
                    </h2>
                    <img  src="parrilla/ch mr.jpg" alt="" >
                </div>
            </div>
        </div>

      

        
         
    </article>


    

    <article class="contenedor_carta">
        <div class="contenedor_carta2">
               <div class="carta">
                <div class="lado frente">
                    <img src="parrilla/parrilla3.PNG" alt="">

                </div>
                <div class="lado atras">
                    <h2>
                        Parrilla Grand Vitara 5 puertas
                    </h2>
                    <img  class="mas_pequeña" src="parrilla//vitara 5   pueratas.jpg" alt="" >
                </div>
            </div>
        </div>
        <div class="contenedor_carta2">
            <div class="carta">
                <div class="lado frente">
                    <img src="parrilla/parrilla4.PNG" alt="">

                </div>
                <div class="lado atras">
                    <h2>
                        Parrilla Grand Vitara SZ
                    </h2>
                    <img  class="mas_pequeña" src="parrilla/suzuki-grand-vitara-suv-2009-front-quarter-main.jpg" alt="" >
                </div>
            </div>
        </div>
    </article>


    <article class="contenedor_carta">
        <div class="contenedor_carta2">
               <div class="carta">
                <div class="lado frente">
                    <img src="parrilla/parrilla5.PNG" alt="">

                </div>
                <div class="lado atras">
                    <h2>
                        Parrilla Kia Sportage Active
                    </h2>
                    <img  class="mas_pequeña" src="parrilla/sportag.jpg" alt="" >
                </div>
            </div>
        </div>
        <div class="contenedor_carta2">
            <div class="carta">
                <div class="lado frente">
                    <img src="parrilla/parrilla7.PNG" alt="">

                </div>
                <div class="lado atras">
                    <h2>
                        Parrilla Sport
                    </h2>
                    <img  class="mas_pequeña" src="parrilla/tupson.jpg" alt="" >
                </div>
            </div>
        </div>
    </article>
    <article class="contenedor_carta">
        <div class="contenedor_carta2">
               <div class="carta">
                <div class="lado frente">
                    <img src="parrilla/parrilla8.PNG" alt="">

                </div>
                <div class="lado atras">
                    <h2>
                        Parrillas Sport 001
                    </h2>
                    <img  class="mas_pequeña" src="parrilla/spart2.jpg" alt="" >
                </div>
            </div>
        </div>
        
    </article>
<br>
<br>
<br>

    <h1 class="titulo">
        ingreso de datos de compra
    </h1>
    <form action="insertar.php" method="POST" name="formDatosPersonales"  >
        <label for="Nombre">Nombre del producto</label>
        <input type="text" name="Nombre_de_producto" id="Nombre_de_p" placeholder="Escribe el nombredel producto"/>
        
       <label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" id="Nombre" placeholder="Escribe el nombredel producto"/>
        
        <label for="Apellidos">Apellidos</label>
        <input type="text" name="Apellidos" id="Apellidos" placeholder="1r Apellido"/>
        
          <label for="Direccion">Dirección</label>
        <input type="text" name="Dirección" id="Dirección" placeholder="Dirección"/>

         <label for="telefono">Telefono</label>
        <input type="text" name="telefono" id="telefono" placeholder="escriba su numero de telefono" />
      
        
        <label for="Email">Email</label>
        <input type="Email" name="Email" id="Email" placeholder="Email" />

            <h3>Modo de pago</h3>
            <label for="Email">tarjeta</label>
            <input class="targeta" type="text" id="cbox2"  name="targeta" placeholder="ponga  si es pago tarjeta"> 
          

          <label for="Email">fisico</label>
        <input class="fisico" type="text" id="cbox2"  name="fisico" placeholder=" ponga  si es pago fisico ">
        <br>

        <br>
        <label for="Codigo_de_producto">Codigo del producto</label>
        <input type ="text" name="Codigo_de_producto" id="Codigo_de_producto" placeholder="titular de la consulta"/>
        <div name="fisico">
             

        </div>
        <label for="fecha">Fecha</label>
        <br/>
        <input type ="date" name="fecha" id="fecha" placeholder="titular de la consulta"/>
        <br>

         

        <label for="cantida">ingrese la cantidad</label>
        <input type="number" id="val2" name="cantida" onkeyup="sumar()" />
       
        <label >total con iva</label>
        <br>
    
       <span id="Display" name="total" ></span>
    <br>
       <label >ingese el valor total a pagar del item total</label>
       <input type="text"  name="total" />
        
        
        <input type="submit" name="Comprar" value="comprar"/>
    




    </form>





    <footer>

        <div class="contenedor">

            <div class="sociales">

                <h2>
                    Siguenos en :
                </h2>

                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-whatsapp"></i>
                <i class="fab fa-instagram"></i>
            </div>
            <div class="contatos">
                <h1>
                    Contáctos
                </h1>
                <p>
                    <i class="fas fa-mobile-alt"> Celular:</i>
                    <p>
                        Darwin Alvarez
                        <br>
                        0979571120
                    </p>

                </p>
                <p>
                    <i class="fas fa-phone-alt"> Telefono</i>
                </p>
                <p>
                    Erika Velastegui
                    <br>
                    (02)364124
                </p>
                <p>
                    <i class="fas fa-envelope-square"> Escribenos</i>
                </p>
                <p>
                    scar_tunnig1177@gmail.com
                </p>

            </div>
            <div class="direccion">

                <h1>
                    Direccion
                </h1>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.763499375169!2d-78.56627758590321!3d-0.3003550354283303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59f5815b08d4d%3A0xdfb4c26a522ec775!2sC.%20S41%2C%20Quito!5e0!3m2!1ses!2sec!4v1611511536061!5m2!1ses!2sec"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                <p>
                    Nos encuentras en la avenida
                    <br>
                    Ciudadela ibarra C. S41, Quito, Pichincha
                </p>
            </div>
        </div>
    </footer>
    <script src="apps.js"></script>


    
</body>

</html>