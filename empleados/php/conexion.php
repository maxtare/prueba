<?php
$servidor="localhost";
$usuario="root";
$clave="";
$bd="empleados";

	
$mysqli =new mysqli("$servidor","$usuario","$clave","$bd");
if($mysqli-> connect_errno){
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}   

?>