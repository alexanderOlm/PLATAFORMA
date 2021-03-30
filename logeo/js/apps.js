function validar(){

    var nombre,contraseña,formulario;
 nombre =document.getElementById("usuario").value;
 contraseña =document.getElementById("contraseña").value;
 formulario =document.getElementById("formulario").value;

if(nombre ==="" || contraseña==="" ){
    alert('los campo nombre o contraseña estan vacíos');
    return false;
}

 
 else if(nombre.length>=12  ){
    alert("el usuario es muy largo  o debe ingresar letras");
    return false;

}

else if(isNaN(contraseña)){
    alert("Solo debe ingresar numeros en la contraseña");
    return false;
}
}