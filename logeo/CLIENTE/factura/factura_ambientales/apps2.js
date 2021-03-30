function retorno(){
    var element =document .forms["formDatosPersonales"]["targeta"].checked;
    var element2 =document .forms["formDatosPersonales"]["fisico"].checked;
    if(elemnt == true){
        document.getElementById("targeta").innerHTML="uste alegido targeta"
        return false;
    }else if(elemnt2 == true){

        document.getElementById("fisico").innerHTML="uste alegido targeta"
        return false;
    }
}


 function sumar()
 {
 var total = 0;
 var valor1 =2.50;
 var valor2 = document.getElementById("val2").value;
 
 total = (valor1 * valor2)+(0.12);

 var displaTotalInput = document.getElementById("displaTotal");
 displaTotalInput.value = total;

 }