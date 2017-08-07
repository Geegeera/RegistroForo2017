<?php
// Carga la configuración 
$config = parse_ini_file('config.ini');

// Conexión con los datos del 'config.ini' 
$connection = mysqli_connect('localhost',$config['username'],$config['password'],$config['dbname']);
// Si la conexión falla, aparece el error 
if($connection === false) { 
 echo 'Ha habido un error <br>'.mysqli_connect_error(); 
} else {
 echo '';
}
?>