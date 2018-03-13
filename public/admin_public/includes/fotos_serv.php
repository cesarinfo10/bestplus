 <?php
 require_once('../includes/conexion.php');

 if (isset($_GET['cargarFotoServicios'])){
       
        $fotosser="SELECT *FROM fotosser WHERE idServicios= '".$_GET['idServicios']."'";
        $query_fotosser=mysqli_query($conexion,$fotosser) or die(mysqli_error());
        $fila_fotosser=mysqli_fetch_assoc($query_fotosser);
?>

          <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Fotos de Servicios</h2>
            </div>
            <form class="form-inline" name="formregistro" id="formregistro">
            <?php do { ?>
            <div class="col-md-4 col-sm-6">
                    <a href="cambiar_foto?IdFoto=<?php echo $fila_fotosser['IdFoto'] ?>&idServicios=<?php echo $fila_fotosser['idServicios'] ?>"><img class="img-responsive img-portfolio img-hover" style="margin-top:2%" src="../images/servicios/<?php echo $fila_fotosser['Foto'] ?>" alt=""> </a>  
            </div>
 </form>
  

            <?php } while ($fila_fotosser=mysqli_fetch_assoc($query_fotosser));?>
        </div>
     <!-- /.row -->
<?php } ?> 