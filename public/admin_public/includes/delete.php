<?php
require_once('conexion.php');
if(isset($_GET["DeleteUser"])){
	$update="DELETE FROM usuario  WHERE idUser='$_GET[idUser]'";
	$query=mysqli_query($conexion,$update);
	echo 1;
}
?>