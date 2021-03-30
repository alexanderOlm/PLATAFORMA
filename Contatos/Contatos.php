<?php 
require_once "stylos_c/mysql.php";


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas_auto_lujos _ABC_Prototype </title>
    <link rel="shortcut icon" href="imagenes/favicon.png" />
    <script src="https://kit.fontawesome.com/521dc7195c.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="Stylos_c/estilos.css">
</head>
<body >
    <header>    
            <nav  class="menu-main">
                <div>
                    <ul>
                        <img class="lojo_laterales" src="imagenes/Captura (4).png" alt="">
                        <li>
                            <a href="../index.html">
                                <i class="fas fa-house-user"> Inicio</i>
                            </a>
                        </li>
                        <li>
                            <a href="../Sobre_Nosotros/Sobre_Nosotros.html" >
                                <i class="fas fa-users"> Nosotros</i>
                            </a>
                        </li>    
                        <li> 
                            <a href="../Productos/Productos.html">
                                <i class="fab fa-product-hunt"> Productos</i>
                            </a>
                        </li> 
                        <li> 
                            <a href="../Contatos/Contatos.php">
                                <i class="fas fa-address-book"> Contáctos</i>
                            </a>
                        </li>
                         <li> 
                            <a href="../logeo/logeo.html">
                                <i class="fas fa-sign-in-alt"> Logeo</i>
                            
                            </a> 
                        
                    </ul>
                </div>    
            </nav>     
      
        </header>
        
        <form  method="POST" action="correo/enviar.php"    name="formDatosPersonales">
        
            <label for="Nombre">Nombre</label>
            <input  type="text"  name="Nombre" id="Nombre" placeholder="Escribe tu nombre"/>
        
            <label for="Apellidos">Apellidos</label>
            <input type="text" name="Apellidos" id="Apellidos" placeholder="1r Apellido"/>

            <label for="telefon">Telefono</label>
            <input type="text" name="telefono" id="telefono" placeholder="escriba su numero de telefono" />

            <label for="Direccion">Dirección</label>
            <input type="text" name="Dirección" id="Dirección" placeholder="Dirección"/>
     
            <label for="Email" />Email</label>
            <input type="Email" name="Email" id="Email" placeholder="Email" />
        
            <label for="Asunto">Asunto</label>
            <input type ="text" name="Asunto" id="Asunto" placeholder="titular de la consulta"/>
        
            <label for="Mensaje">Mensaje</label>
            <textarea name="Mensaje" for="Mensaje" placeholder="descripción" maxlength="300" ></textarea>

            <input type="submit" name="Enviar" value="enviar"/>
        </form>        





    

        <footer >
    
            <div class="footer">
                <img  class="footer1" src="imagenes/Captura (4).png" alt="">
                <h2>
                    <h2>
                        Siguenos en :
                    </h2>
                </h2>
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-whatsapp"></i>
                <i class="fab fa-instagram"></i>
            </div>
            <div class="footer">
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
            <div class="footer">
                <h1>
                    Direccion
                </h1>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.763499375169!2d-78.56627758590321!3d-0.3003550354283303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59f5815b08d4d%3A0xdfb4c26a522ec775!2sC.%20S41%2C%20Quito!5e0!3m2!1ses!2sec!4v1611511536061!5m2!1ses!2sec" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <p>
                    Nos encuentras en la avenida 
                    <br>
                    Ciudadela ibarra C. S41, Quito, Pichincha
                </p>
            </div>
                </footer>

        
        </body>
        </html>
        