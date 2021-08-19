<?php
$conexion = mysqli_connect("", "", "" , "");

if(!$conexion){
	echo 'Erro ao conectar a base de dados';
}
else{
	echo'Conectado a base de dados';
}
?>