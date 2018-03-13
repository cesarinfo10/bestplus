<?php
require_once('conexion.php');
//INSERTAR USUARIOS
if(isset($_GET["InsertUser"])){
$usser="SELECT *FROM usuario WHERE User='".$_GET['User']."'";
$queryU=mysqli_query($conexion,$usser) or die(mysqli_error());
$fila=mysqli_fetch_assoc($queryU);
$totalFilas=mysqli_num_rows($queryU);

if ($totalFilas==0){
$pass=md5($_GET["Pass"]);	
	$update="UPDATE usuario SET User='$_GET[User]', Pass='$pass' WHERE = ";
	$query=mysqli_query($conexion,$update);
	echo 1;
}else {
	echo 2;
}
}
?>