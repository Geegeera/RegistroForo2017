<?php
require('connection.php');

$reg_name= $_POST['valorBusqueda'];
$reg_mail=$_POST['valorBusqueda1'];
$reg_marca=$_POST['valorBusqueda2'];
$reg_agencia=$_POST['valorBusqueda3'];


 $reg_mail = test_input($_POST['valorBusqueda1']);

		if (!filter_var($reg_mail, FILTER_VALIDATE_EMAIL)) {
  				$mensaje= 'Correo electrónico inválido'; 
		}else{
				$registro="INSERT INTO `mmv10`(`Nombre`, `A_Paterno`, `A_Materno`,`Email`, `Marca`, `Agencia`) VALUES ('$reg_name','$reg_name','$reg_name','$reg_mail','$reg_marca','$reg_agencia')";

				$query=mysqli_query($connection,$registro);

				$mensaje='Su registro se ha realizado con éxito.';
	
		}

	function test_input($data) {
  			$data = trim($data);
  			$data = stripslashes($data);
  			$data = htmlspecialchars($data);
  			return $data;
	}

	echo $mensaje;

?>