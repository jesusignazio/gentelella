<?php
require_once 'config.php';

//** Obtener localizaciones **//

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $password, $db) 
    or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//Generamos la consulta
$sql = "SELECT * FROM san_localizaciones";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($conexion, $sql)) die();

$clientes = array(); //Creamos un array

while($row = mysqli_fetch_array($result)) 
{ 
    $id=$row['id'];
    $nombre=$row['nombre'];
    $color=$row['color'];

    $localizaciones[] = array('id'=> $id, 'nombre'=> $nombre, 'color'=> $color);

}

//Desconectamos la base de datos
$close = mysqli_close($conexion) 
    or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


//Creamos el JSON
$json_string = json_encode($localizaciones);
echo $json_string;

?>
