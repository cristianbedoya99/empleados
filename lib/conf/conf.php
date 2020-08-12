<?php
$servidor="127.0.0.1";
$usuario="root";
$clave="";
$puerto=3306;
$baseDatos="empleados";

$con = mysqli_connect($servidor,$usuario,$clave,$baseDatos);

if(mysqli_connect_errno())
{
 echo "error con la conexion" . mysqli_connect_errno();
}








?>