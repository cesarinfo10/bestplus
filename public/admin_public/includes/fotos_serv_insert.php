 <?php
 require_once('../includes/conexion.php');

 if (isset($_GET['cargarFotoServicios'])){
       
        $fotosser="SELECT *FROM fotosser WHERE idServicios= '".$_GET['idServicios']."'";
        $query_fotosser=mysqli_query($conexion,$fotosser) or die(mysqli_error());
        $fila_fotosser=mysqli_fetch_assoc($query_fotosser);
?>

            <?php do { ?>
            <div class="col-md-4 col-sm-6" >
             <img class="img-responsive img-portfolio img-hover" style="margin-top:30%" src="../images/servicios/<?php echo $fila_fotosser['Foto'] ?>" alt=""> 
            </div>

  

            <?php } while ($fila_fotosser=mysqli_fetch_assoc($query_fotosser));?>
        </div>
     <!-- /.row -->
<?php } ?> 