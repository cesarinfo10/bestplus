<?php
require_once('conexion.php');
if(isset($_GET["UpdateUser"])){

$pass=base64_encode($_GET["Pass"]);	
	$update="UPDATE usuario SET User='$_GET[User]',Pass='$pass' WHERE idUser='$_GET[idUser]'";
	$query=mysqli_query($conexion,$update);
	echo 1;

}

if(isset($_GET["InicioUser"])){

	$update="UPDATE inicio SET Titulo='$_GET[Titulo]',Contenido='$_GET[Contenido]',
	Link='$_GET[LinkI]' WHERE idInicio='$_GET[idInicio]'";
	$query=mysqli_query($conexion,$update);
	echo 1;
}

if(isset($_GET["InicioFotos"])){

	$update="UPDATE slider_inicio SET Titulo='$_GET[Titulo]', Link_Foto='$_GET[Link_Foto]',
	Foto='$_GET[Foto]' WHERE idSlider='$_GET[idSlider]'";
	$query=mysqli_query($conexion,$update);
	echo 1;
}

if(isset($_GET["nos_pres"])){

	$update="UPDATE nos_pres SET Titulo='$_GET[Titulo]', Contenido='$_GET[Contenido]', Foto='$_GET[Foto]'
	WHERE idPresNos='$_GET[idPresNos]'";
	$query=mysqli_query($conexion,$update);
	echo 1;
}
if(isset($_GET["nos_press"])){

	$update="UPDATE nosotros SET Titulo='$_GET[Titulo]', Subtitulo='$_GET[Subtitulo]', 
	Contenido='$_GET[Contenido]', Foto='$_GET[Foto]' WHERE id_nos='$_GET[id_nos]'";
	$query=mysqli_query($conexion,$update);
	echo 1;
}
//EDITAR DATOS EMPRESA
if(isset($_GET["DatoEmpre"])){

	$update="UPDATE datos SET direccion='$_GET[direccion]', sucursal='$_GET[sucursal]', 
	telefonos='$_GET[telefonos]', email='$_GET[email]', Horario='$_GET[Horario]', 
	linkFacebook='$_GET[linkFacebook]', linkLinkedin='$_GET[linkLinkedin]',
	linkTwitter='$_GET[linkTwitter]' WHERE idDatos='$_GET[idDatos]'";
	$query=mysqli_query($conexion,$update);
	echo 1;
}
if(isset($_GET["editServ"])){

	$update="UPDATE servicios SET Titulo='$_GET[Titulo]', Subtitulo='$_GET[Subtitulo]', 
	Descripcion='$_GET[Descripcion]'  WHERE idServicios='$_GET[idServicios]'";
	$query=mysqli_query($conexion,$update);
	echo 1;
}
if(isset($_GET["editServFoto"])){

	$update="UPDATE fotosser SET Foto='$_GET[Foto]' WHERE IdFoto='$_GET[IdFoto]'";
	$query=mysqli_query($conexion,$update);
	echo 1;
}
if(isset($_GET["editProvFoto"])){

	$update="UPDATE fotospro SET Foto='$_GET[Foto]' WHERE IdFoto='$_GET[IdFoto]'";
	$query=mysqli_query($conexion,$update);
	echo 1;
}
if(isset($_GET["UpdatetProd"])){

	$update="UPDATE producto SET Titulo='$_GET[Titulo]', Descripcion='$_GET[Descripcion]', 
	Precio='$_GET[Precio]'  WHERE idProducto='$_GET[idProducto]'";
	$query=mysqli_query($conexion,$update);
	echo 1;
}
?>