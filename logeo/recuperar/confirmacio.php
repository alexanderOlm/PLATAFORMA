<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="stilos/estilos.css">
    <title>Confirmar compra</title>
</head>
<body>
   <div class="form-container">
        <h1>
            confirmar canbio de usuario
        </h1>
        <h3>
            Ingrese sus usuario antiguo
        </h3>
        <form action="enviar.php" method="POST" id="formulario" onsubmit="return validar()">
            <div class="control">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="usuario"  >

       
          
                <label for="psw">Apellido</label>
                <input type="text" name="apellido" id="contraseña"  >

                <label for="psw">Correo</label>
                <input type="email" name="Correo" id="contraseña"  >

                <label for="name">Usuario</label>
                <input type="text" name="name" id="usuario"  >


                <label for="psw">Contraseña</label>
                <input type="password" name="pws" id="contraseña"  >

                <h3>
                    Ingrese su nuevo usuario y contraseña
                </h3>  
                <div class="control">
                    <label for="name">Nombre</label>
                    <input type="text" name="N_name" id="usuario"  >
    
           
              
                    <label for="psw">Contraseña</label>
                    <input type="password" name="N_pws" id="contraseña"  >
                    
                   
                        <input type="submit" value="Recuperar Cuenta" id="registrarse">
                    
          
              
                    
                   
                    <a href="../index.html" target="_blank">
                        <input type="button" value="salir" id="salir>
                    </a>
                    
                </div>
                

        </form>
        
    </div>
</section>
<script src="apps.js"></script>
    
</body>
</html>