<?php
// definimos las credenciales de la basededatos
$servidor ="localhost"; //servidor de la base de datos
$usuario ="tabla_form"; //usuario de la base de datos
$contraseña="";//contraseña de la base de datos
$base_de_datos="dbformulario";//nombre de la basede datos

//creamos la conexion a la base de datos utilizanso la funcion mysqli_conexiones
$conexion =mysqli_connect($servidor,$usuario,$contraseña,$base_de_datos);

//verificamos si la conexion fue exitosa

if (!$conexion) {
    die ("conexion fallida:" . mysql_connect_error()); //si laconexion falla se muestra un mensaje de error y se termina la ejecucion del servidor

}
// cerramos la conexion a la base de datos utilizando la funcion mysqli_close
//mysqli_close($conexion);
?>