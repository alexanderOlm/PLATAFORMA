function validar(){
    var nombre,apellido,direccion,fecha,email,telefono,usuario,clav,expresion;
    nombre= document.getElementById("nombre").value;
   apellido= document.getElementById("Apellidos").value;
   direccion= document.getElementById("Direccion").value;
   fecha= document.getElementById("Fecha").value;
   telefono= document.getElementById("Telefono").value;
   email= document.getElementById("Email").value;
   usuario= document.getElementById("Usuario").value;
   clave= document.getElementById("clave").value;
   expresion:/\W+@\w+\.+[a-z]/;
  

    if (nombre===""  || apellido==="" || direccion==="" || fecha==="" || telefono==="" || email==="" || usuario==="" || clave==="" 
    ){
      alert('los campos estan vacíos');  
      return false;
    }
    else if(nombre.length>11){
      alert('ingrese su nombre corretamente');
      return false;
  
    }
    else if (!expresiones.test(nombre) ){
    alert('ingrese solo letras');
    return false;
  }
 
    //apellido

    
    else if(apellido.length>11){
      alert('ingrese su apellido corretamente');
      return false;

    }
  

  else if(direccion.length<20){
    alert('ingrese su direcion en 20 letras');
    return false;

  }
  if(fecha.length>20){
    alert('ingrese solo numeros');
    return false;
  
  }
  if(isNaN(telefono) ){
    alert('ingrese solo numeros de telefono empezando desde el 09');
    return false;
  }
  
  
  if(email.length>10 ){
    alert('ingrese solo numeros de telefono empezando desde el 09');
    return false;
  }
  
  else if(!expresion.test(email)){
    alert('ingrese el correo corretamente');
    return false;
  }
 else if(usuario.length>12){
   alert('sus usuario debe tener un minimo de 6 letras');
  return false;
  }
  else if(isNaN("clave")){
    alert('ingrese solo numero');
    return false;
  }

}     








