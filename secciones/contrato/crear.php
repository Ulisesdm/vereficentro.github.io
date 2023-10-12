
<?php 
include("../../conexion.php"); 
if($_POST){
 print_r($_POST);

 $fecha=(isset($_POST["fecha"])?$_POST["fecha"]:"");
 $costo=(isset($_POST["costo"])?$_POST["costo"]:"");
 

 $sentencia=$conexion->prepare("INSERT INTO `contrato` (id,fecha,costo)
 VALUES(NULL,:fecha,:costo)");

 $sentencia->bind_param(":fecha",$fecha);
 $sentencia->bind_param(":costo",$costo);

 $sentencia->execute();
 //header("location:home.php");

}


?>
<?php include("../../templates/header.php"); ?>

<div class="card">
    <div class="card-header">
        Contrato
    </div>
    <div class="card-body">
     
    <form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
      <label for="dechadeingreso" class="form-label">Fecha de Ingreso</label>
      <input type="date" class="form-control" name="fechadeingreso" id="fechadeingreso" aria-describedby="emailHelpId" placeholder="Fecha de ingreso">
      
    </div>

    <div class="mb-3">
      <label for="Costo" class="form-label">Costo</label>
      <input type="float"
        class="form-control" name="Costo" id="Costo" aria-describedby="helpId" placeholder="Costo">
      
    </div>

    
    <button type="submit" class="btn btn-success">Agregar Contrato</button>
    <a name="" id="" class="btn btn-primary" href="home.php" role="button">Cancelar</a>

    
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>








<?php include("../../templates/footer.php"); ?>