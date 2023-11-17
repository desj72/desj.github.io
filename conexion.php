<?php

$conexion = mysqli_connect("localhost","root","","dr_records");

if(!$conexion)
{
	die("No hay conexion:" .mysqli_connect_error());
}
?>