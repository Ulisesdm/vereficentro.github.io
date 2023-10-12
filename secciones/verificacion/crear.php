<?php 
include("../../conexion.php"); 
if($_POST){
 print_r($_POST);

 $nombre=(isset($_POST["nombre"])?$_POST["nombre"]:"");
 $apellidos=(isset($_POST["apellidos"])?$_POST["apellidos"]:"");
 $telefono=(isset($_POST["telefono"])?$_POST["telefono"]:"");
 $direccion=(isset($_POST["direccion"])?$_POST["direccion"]:"");
 $tipo=(isset($_POST["tipo"])?$_POST["tipo"]:"");

 $sentencia=$conexion->prepare("INSERT INTO `verificacion`(id,nombre,apellidos,telefono,direccion,tipo)
 VALUES(NULL,:nombre,:apellidos,:telefono,:direccion,:tipo)");

 $sentencia->bind_param(":nombre",$nombre);
 $sentencia->bind_param(":apellidos",$apellidos);
 $sentencia->bind_param(":telefono",$telefono);
 $sentencia->bind_param(":direccion",$direccion);
 $sentencia->bind_param(":tipo",$tipo);
 $sentencia->execute();
 header("location:home.php");

}


?>
<?php include("../../templates/header.php"); ?>


<div class="card">
    <div class="card-header">
        Datos de la Verificacion
    </div>
    <div class="card-body">
     
    <form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
      <label for="Nombre" class="form-label">Nombre</label>
      <input type="text"
        class="form-control" name="Nombre" id="Nombre" aria-describedby="helpId" placeholder="Nombre">
      
    </div>

    <div class="mb-3">
      <label for="Apellido" class="form-label">Apellido</label>
      <input type="text"
        class="form-control" name="Apellido" id="Apellido" aria-describedby="helpId" placeholder="Apellido">
      
    </div>

    <div class="mb-3">
      <label for="Telefono" class="form-label">Telefono</label>
      <input type="text"
        class="form-control" name="Telefono" id="Telefono" aria-describedby="helpId" placeholder="Telefono">
      
    </div>

    <div class="mb-3">
      <label for="Dirección" class="form-label">Dirección</label>
      <input type="text"
        class="form-control" name="Dirección" id="Dirección" aria-describedby="helpId" placeholder="Dirección">
      
    </div>

   <div class="mb-3">
    <label for="idtipo" class="form-label">Tipo</label>
    <select class="form-select form-select-lg" name="idtipo" id="idtipo">
        <option selected>Seleccione uno</option>
        <option value="">MOTRIZ</option>
        <option value="">ARRASTRE</option>
        
    </select>
   </div>

    <ta><button type="submit" class="btn btn-success">Agregar Registro</button>
    <a name="" id="" class="btn btn-primary" href="home.php" role="button">Cancelar</a>

    
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>








<?php include("../../templates/footer.php"); ?>