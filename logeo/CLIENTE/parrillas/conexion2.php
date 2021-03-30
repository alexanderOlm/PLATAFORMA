<?php
$mysqli =new mysqli("localhost", "desarrollo","15092010DE","empresa_scar_tunnig");
if(mysqli_connect_errno()){
    printf("conexion fallida", mysqli_connect_errno());
}