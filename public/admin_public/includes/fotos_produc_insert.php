 <?php
 require_once('../includes/conexion.php');

 if (isset($_GET['cargarFotoProducto'])){
       
        $fotospro="SELECT *FROM fotospro WHERE idProducto= '".$_GET['idProducto']."'";
        $query_fotospro=mysqli_query($conexion,$fotospro) or die(mysqli_error());
        $fila_fotospro=mysqli_fetch_assoc($query_fotospro);
?>

            <?php do { ?>
            <div class="col-md-4 col-sm-6" >
             <img class="img-responsive img-portfolio img-hover" style="margin-top:30%" src="../images/productos/<?php echo $fila_fotospro['Foto'] ?>" alt=""> 
            </div>
            <?php } while ($fila_fotospro=mysqli_fetch_assoc($query_fotospro));?>
<?php } ?> 