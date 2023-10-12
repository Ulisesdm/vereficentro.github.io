<?php include("../../conexion.php"); 

if (isset( $_GET['txtID'])){
    $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";
    $sentencia=$conexion->prepare("DELETE * FROM `empleado` WHERE id=:id");
    $sentencia->bind_param(":id",$txtID);
    $sentencia->execute();


    header("location:home.php");

}

'$sentencia=$conexion->prepare("SELECT * FROM `empleado`");
$sentencia->execute();
$lista_empleado=$sentencia-> fetchAll(PDO::FETCH_ASSOC);
'


?>


<?php include("../../templates/header.php"); ?>

<br/>

<div class="card">
    <div class="card-header">
        
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar Registro</a>
    </div>
    <div class="card-body">
        
    <div class="table-responsive-sm">
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Dirección</th> 
                    <th scope="col">Departamento</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($lista_empleado as $registro){?>
                
                <tr class="">
                    <td scope="row"><?php echo $registro['nombre'];?></td>
                    <td><?php echo $registro['apellidos'];?></td>
                    <td><?php echo $registro['telefono'];?></td>
                    <td><?php echo $registro['direccion'];?></td>
                    <td><?php echo $registro['departamento'];?></td>
                    <td>
                    
                          <a name="" id="" class="btn btn-primary" href="#" role="button">Carta</a>|
                          <a class="btn btn-info" href="editar.php?txtID" role="button">Editar</a>|
                          <a class="btn btn-danger" href="home.php?txtID" role="button">Eliminar</a></td>
                     
                    </td>
                
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
    </div>
</div>








<?php include("../../templates/footer.php"); ?>