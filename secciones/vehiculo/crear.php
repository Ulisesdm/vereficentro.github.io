<?php 
include("../../conexion.php"); 
if($_POST){
 print_r($_POST);

 $modelo=(isset($_POST["modelo"])?$_POST["modelo"]:"");
 $marca=(isset($_POST["marca"])?$_POST["marca"]:"");
 $placas=(isset($_POST["placas"])?$_POST["placas"]:"");
 $nombre=(isset($_POST["nombre"])?$_POST["nombre"]:"");
 $tipo=(isset($_POST["tipo"])?$_POST["tipo"]:"");

 $sentencia=$conexion->prepare("INSERT INTO `vehiculo` (id,modelo,marca,placas,nombre,tipo) VALUES(NULL,:modelo,:marca,:placas,:nombre,:tipo)");

 $sentencia->bind_param(":modelo",$modelo);
 $sentencia->bind_param(":marca",$marca);
 $sentencia->bind_param(":placas",$placas);
 $sentencia->bind_param(":nombre",$nombre);
 $sentencia->bind_param(":tipo",$tipo);
 $sentencia->execute();
 //header("location:home.php");

}

?>
<?php include("../../templates/header.php"); ?>

<div class="card">
    <div class="card-header">
        Datos del Vehiculo
    </div>
    <div class="card-body">
     
    <form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
    <label for="idmodelo" class="form-label">Modelo</label>
    <select class="form-select form-select-lg" name="idmodelo" id="idmodelo">
        <option selected>Seleccione un Modelo</option>
        <option value="">2003</option>
        <option value="">2004</option>
        <option value="">2005</option>
        <option value="">2006</option>
        <option selected>2007</option>
        <option value="">2008</option>
        <option value="">2009</option>
        <option value="">2010</option>
        <option value="">2011</option>
        <option selected>2012</option>
        <option value="">2013</option>
        <option value="">2014</option>
        <option value="">2015</option>
        <option value="">2016</option>
        <option selected>2017</option>
        <option value="">2018</option>
        <option value="">2019</option>
        <option value="">2020</option>
        <option value="">2021</option>
    </select>
   </div>

   <div class="mb-3">
    <label for="idmarca" class="form-label">Marca de Carro</label>
    <select class="form-select form-select-lg" name="idmarca" id="marca">
        <option selected>Seleccione uno</option>
        <option value="">BMW</option>
        <option value="">MERCEDES-BENZ</option>
        <option value="">AUDI</option>
        <option value="">FORD</option>
        <option value="">HONDA</option>
        <option value="">LEXUS</option>
        <option value="">SEAT</option>
        <option value="">RENAULT</option>
    </select>
   </div>

    <div class="mb-3">
      <label for="Placas" class="form-label">Placas</label>
      <input type="text"
        class="form-control" name="Placas" id="Placas" aria-describedby="helpId" placeholder="Placas">
      
    </div>

    <div class="mb-3">
      <label for="Nombre" class="form-label">Nombre</label>
      <input type="text"
        class="form-control" name="Nombre" id="Nombre" aria-describedby="helpId" placeholder="Nombre">
      
    </div>

    <div class="mb-3">
      <label for="tipo" class="form-label">=tipo</label>
      <input type="text"
        class="form-control" name="tipo" id="tipo" aria-describedby="tipo" placeholder="tipo">
      
    </div>

   <ta/> <button type="submit" class="btn btn-success">Agregar Registro</button>
    <a name="" id="" class="btn btn-primary" href="home.php" role="button">Cancelar</a>

    
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>








<?php include("../../templates/footer.php"); ?>