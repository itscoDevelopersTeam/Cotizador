<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:Catalogo.php");
}
?>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Panel de Administracion</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a href="#" class="navbar-brand">WEB CODE Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">                    
           <li class="nav-item">
              <a class="nav-link" href="#"> Bienvenido al Panel de Control </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#"> <?php echo($_SESSION['user']); ?> </a>
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

    <!-- Tabla de usuarios-->
    <div style="background-image: url('img/fondopanel.jpg'); height: 800px;">
    	<div align="center" style="padding: 100px;">
    		<h1>Usuarios Registrados:</h1>
    	<br>
    	<?php
				require("connect_db.php");
				$sql=("SELECT * FROM login");	
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);
				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>Usaurio</td>";
						echo "<td>Password</td>";
						echo "<td>Correo</td>";
						echo "<td>Password del administrador</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";

			    
			?>			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";

				    	echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='img/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='admin2.php?id=$arreglo[0]&idborrar=2'><img src='img/eliminar.png' class='img-rounded'/></a></td>";
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM login WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='admin2.php'</script>";
					}
			?>
    	</div>
    </div>
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