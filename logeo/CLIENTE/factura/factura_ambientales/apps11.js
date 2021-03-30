

 function sumar()
 {
 var total = 0;
 var valor1 =2.50;
 var valor2 = document.getElementById("val2").value;
 
 total = (valor1 * valor2)+(0.12);

 var displaTotalInput = document.getElementById("displaTotal");
 displaTotalInput.value = total;

 }