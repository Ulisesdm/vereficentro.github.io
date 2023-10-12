<?php include("../../templates/header.php"); ?>

<div class="card">
    <div class="card-header">
        Datos del Empleado
    </div>
    <div class="card-body">
     
    <form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text"
        class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre">
      
    </div>

    <div class="mb-3">
      <label for="apellido" class="form-label">Apellido</label>
      <input type="text"
        class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Apellido">
      
    </div>

    <div class="mb-3">
      <label for="telefono" class="form-label">Telefono</label>
      <input type="text"
        class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Telefono">
      
    </div>

    <div class="mb-3">
      <label for="dirección" class="form-label">Dirección</label>
      <input type="text"
        class="form-control" name="dirección" id="dirección" aria-describedby="helpId" placeholder="Dirección">
      
    </div>

   <div class="mb-3">
    <label for="departamento" class="form-label">Departamento</label>
    <select class="form-select form-select-lg" name="ddepartamento" id="iddepartamento">
        <option selected>Seleccione uno</option>
        <option value="">Director General</option>
        <option value="">Gerente Tecnico</option>
        <option value="">Gerente Sutituto</option>
        <option value="">Tecnicos Verificadores</option>
    </select>
   </div>

    <button type="submit" class="btn btn-success">Agregar Registro</button>
    <a name="" id="" class="btn btn-primary" href="home.php" role="button">Cancelar</a>

    
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>









<?php include("../../templates/footer.php"); ?>