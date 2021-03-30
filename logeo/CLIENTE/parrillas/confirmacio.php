<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="stilos.css">
    <title>Confirmar compra</title>
</head>
<body>

    <h1>confirme su compra </h1>
    <form  method="POST" action="enviar.php"    name="formDatosPersonales">
        
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

           
       <label for="cantida">ingrese la cantidad</label>
        <input type="number" id="val2" name="cantida" onkeyup="sumar()" />
       
        <label >total con iva</label>
        <br>
    
       <span id="Display" name="total" ></span>
    <br>
       <label >ingese el valor total  para confirmar</label>
       <input   id="Display" name="total" />
        <input type="submit" name="Enviar" value="enviar"/>
    </form>        




    
</body>
</html>