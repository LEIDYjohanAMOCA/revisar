
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta db</title>
    <style type="text/css">
     
      table {
        border: solid 2px #7e7c7c;
        border-collapse: collapse;
                     
      }
     
      th, h1 {
        background-color: #29e6dc;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
      }


    </style>
    <link rel="icon" type="IMG/favicon" href="/img/favinc.jpeg">
</head>
<body>
    
</body>
</html>


<?php
//se utiliza para llamar al archivo que contiene la conexion a la base de datos
require'conexion.php';


//validamos que el formulario y que el boton registro haya sido presionado
if(isset($_POST['tabla_form'])){

//obtener valores enviados por el formulario

$nombre=$_POST['nombre'];
$Email=$_POST['Email'];
$contraseña=$_POST['contraseña'];


//insertamos datos de la base de datos
$sql="INSERT INTO tabla_form (id,nombre,Email,contraseña) value (null,'$nombre','$Email','$contraseña')";
$resultado= mysql_query($conexion,$sql);
if($resultado){
  //insercion correcta
  echo "¡se ha insertado los datos correctamente";

} else{
  //insercion incorrecta
  echo"¡no se puede insertar la informacion" ."<br>";
  echo"error" . $sql. "<br>" . mysql_error($conexion);

}
}
?>

