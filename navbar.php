<?php
		if (isset($title))
		{
	?>
<nav class="navbar navbar-default ">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><font color="" size="4">FORSA S.A de C.V</font></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?php echo $active_facturas;?>"><a href="inicio.php"><i class='glyphicon glyphicon-home'></i><font color="" size="4"> Inicio </font></a></li>
        <li class="<?php echo $active_facturas;?>"><a href="facturas.php"><i class='glyphicon glyphicon-align-justify'></i><font color="" size="4"> Facturas </font><span class="sr-only">(current)</span></a></li>
        <li class="<?php echo $active_productos;?>"><a href="productos.php"><i class='glyphicon glyphicon-shopping-cart'></i><font color="" size="4"> Productos</font></a></li>
		<li class="<?php echo $active_clientes;?>"><a href="clientes.php"><i class='glyphicon glyphicon-user'></i><font color="" size="4"> Clientes</font></a></li>
		<li class="<?php echo $active_usuarios;?>"><a href="usuarios.php"><i  class='glyphicon glyphicon-lock'></i><font color="" size="4"> Usuarios</font></a></li>
       </ul>
      <ul class="nav navbar-nav navbar-right">
		<li><a href="login.php?logout"><i class='glyphicon glyphicon-off'></i><font color="" size="4"> Salir</font></a></li>
      </ul>
    </div>
  </div>
</nav>
	<?php
		}
	?>