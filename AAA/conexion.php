<?php
$host="localhost";
$user="root";
$past="";
$bd="pasteleria_loic";

$con=new mysqli($host, $user, $past, $bd);
if ($con ->connect_error) {
    echo "Error de conexion";
    // code...

}else{
    echo"conexion exitosa";

}
?>