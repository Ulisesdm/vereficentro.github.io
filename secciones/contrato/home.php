
<?php include("../../conexion.php"); 

if (isset( $_GET['txtID'])){
       $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";
       $sentencia=$conexion->prepare("DELETE * FROM `contrato` WHERE id=:id");
       $sentencia->bind_param(":id",$txtID);
       $sentencia->execute();


       header("location:home.php");

}

$sentencia=$conexion->prepare("SELECT * FROM `contrato`");
$sentencia->execute();
$lista_contrato=$sentencia->fetchAll(PDO::FETCH_ASSOC);



?>
<?php include("../../templates/header.php"); ?>

<br/>

<div class="card">
    <div class="card-header">
        
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar Contrato</a>
    </div>
    <div class="card-body">
        
    <div class="table-responsive-sm">
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Costo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($lista_contrato as $registro){?>

                <tr class="">
                    <td scope="row"><?php echo $registro['fecha'];?></td>
                    <td><?php echo $registro['costo'];?></td>
                    <td>
                          
                          <a class="btn btn-info" href="editar.php?txtID" role="button">Editar</a>|
                          <a class="btn btn-danger" href="home.php?txtID" role="button">Eliminar</a></td>
                
                    </td>
                
                </tr>
                
                
                <?php } ?>
                  
            
            </tbody>
        </table>
    </div>
        </div>







<?php include("../../templates/footer.php"); ?>