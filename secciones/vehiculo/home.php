<?php include("../../conexion.php"); 

if (isset( $_GET['txtID'])){
    $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";
    $sentencia=$conexion->prepare("DELETE * FROM `vehiculo` WHERE id=:id");
    $sentencia->bind_param(":id",$txtID);
    $sentencia->execute();


    header("location:home.php");

}

'$sentencia=$conexion->prepare("SELECT * FROM `empleado`");
$sentencia->execute();
$_=$sentencia-> fetchAll(PDO::FETCH_ASSOC);
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
                    <th scope="col">Modelo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Placas</th>
                    <th scope="col">Nombre</th> 
                    <th scope="col">Tipo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($lista_vehiculo as $registro){?>


                <tr class="">
                <td scope="row"><?php echo $registro['modelo'];?></td>
                    <td><?php echo $registro['marca'];?></td>
                    <td><?php echo $registro['placas'];?></td>
                    <td><?php echo $registro['nombre'];?></td>
                    <td><?php echo $registro['tipo'];?></td>
                    <td>
                          <a class="btn btn-info" href="editar.php?txtID" role="button">Editar</a>|
                          <a class="btn btn-danger" href="home.php?txtID" role="button">Eliminar</a></td>
                </tr>
                
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>








<?php include("../../templates/footer.php"); ?>