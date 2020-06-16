<?php //Programa que establece conexion con el servidor
$conexion = mysqli_connect("localhost", "root", "conaleptemixco1", "formulario"); 

if(!$conexion) {
echo"Error al conectar con la base de datos";
}else{
	echo "Conectado:";
}


?>