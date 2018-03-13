<?php
require_once('conexion.php');
//INSERTAR USUARIOS
if(isset($_GET["InsertUser"])){
$usser="SELECT *FROM usuario WHERE User='".$_GET['User']."'";
$queryU=mysqli_query($conexion,$usser) or die(mysqli_error());
$fila=mysqli_fetch_assoc($queryU);
$totalFilas=mysqli_num_rows($queryU);

if ($totalFilas==0){
$pass=base64_encode($_GET["Pass"]);	
	$insertar="INSERT INTO usuario (User,Pass) VALUES ('$_GET[User]','$pass') ";
	$query=mysqli_query($conexion,$insertar);
	echo 1;
}else {
	echo 2;
}
}

if(isset($_GET["InsertServ"])){
	$insertar="INSERT INTO servicios (Titulo, Subtitulo, Descripcion)
	 VALUES ('$_GET[Titulo]','$_GET[Subtitulo]','$_GET[Descripcion]') ";
	$query=mysqli_query($conexion,$insertar);
	echo 1;
}

if(isset($_GET["InsertServFoto"])){
	$insertar="INSERT INTO fotosser (Foto, idServicios)
	 VALUES ('$_GET[Foto]','$_GET[idServicios]') ";
	$query=mysqli_query($conexion,$insertar);
	echo 1;
}

if(isset($_GET["InsertProduct"])){
	$insertar="INSERT INTO producto (Titulo, Precio, Descripcion, Activo)
	 VALUES ('$_GET[Titulo]','$_GET[Precio]','$_GET[Descripcion]',0) ";
	$query=mysqli_query($conexion,$insertar);
	echo 1;
}

if(isset($_GET["InsertProFoto"])){
	$insertar="INSERT INTO fotospro (Foto, idProducto)
	 VALUES ('$_GET[Foto]','$_GET[idProducto]') ";
	$query=mysqli_query($conexion,$insertar);
	echo 1;
}
if(isset($_GET["InsertFotosInicio"])){

	$insertar="INSERT INTO slider_inicio (Titulo, Link_Foto,Foto)
	VALUES('$_GET[Titulo]', '$_GET[Link_Foto]','$_GET[Foto]')";
	$query=mysqli_query($conexion,$insertar);
	echo 1;
}
?>