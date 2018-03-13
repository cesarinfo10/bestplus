<?php require_once("conexion.php"); ?>
<?php
@session_start();
$sql="SELECT *FROM usuario WHERE User='".$_GET['User']."' AND Pass='".base64_encode($_GET['password'])."'";
$query= mysqli_query($conexion, $sql) or die(mysqli_error());
$row= mysqli_fetch_assoc($query); 

$_SESSION['User']=$row['User'];
$_SESSION['idUser']=$row['idUser'];

if ($_SESSION['idUser'] > 0){
echo "<script>
window.location='../principal';
</script>";

} else {
	echo "<script> alert('El usuario no existe');</script>";
	echo "<script>
window.location='../index';
</script>";
}
?>