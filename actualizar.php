<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>		
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Acutualizar Usuarios</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
</header>

  <!-- Navbar
    ================================================== -->


<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a href="#" class="navbar-brand">WEB CODE Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">                    
           <li class="nav-item">
              <a class="nav-link" href="#"> Bienbenido al Panel de Control </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#"> <?php echo($_SESSION['user']); ?> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin2.php"> Usuarios Registrados </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="AgregarProductos.php"> Agregar Productos </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="desconectar.php">Cerra Sesion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!-- ======================================================================================================================== -->
<div align="center" style="height: 700px;">
	<br>
	<br>
	<h4>Edición de usuarios</h4>
	<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM login WHERE id=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$user=$row[1];
		    	$pass=$row[2];
		    	$email=$row[3];
		    	$pasadmin=$row[4];
		    }
		?>
		<form action="ejecutaactualizar.php" method="post" style="">
				Id<br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
				Usuario<br> <input type="text" name="user" value="<?php echo $user?>"><br>
				Password usuario<br> <input type="text" name="pass" value="<?php echo $pass?>"><br>
				Correo usuario<br> <input type="text" name="email" value="<?php echo $email?>"><br>
				Pssword administrador<br> <input type="text" name="pasadmin" value="<?php echo $pasadmin?>"><br>
				
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>
</div>
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		
	<footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Web Code 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>


