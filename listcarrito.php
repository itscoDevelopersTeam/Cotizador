<!DOCTYPE html>
<?php
$total=0;
session_start();
if (@!$_SESSION['user']) {
  header("Location:Catalogo.php");
}

?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Carrito de Compras</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
	
</head>
<body>

	<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a href="#" class="navbar-brand">WEB CODE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Tu carrito <?php echo($_SESSION['user']); ?>
              	<span class="sr-only">(current)</span>
              </a>
            </li>            
            <li class="nav-item">
              <a class="nav-link" href="Catalogo.php">Inicio                
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="Contacto.php">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="desconectar.php">Cerra Sesion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <form  class="AgregarProduc" method="POST" action="addventa.php" style="background-image: url('img/fondoaddpro.jpg'); font-size: 22px; font-weight: bolder; color: #FFFFFF; ; font-family: 'Comic Sans MS';">
	 	<!-- com4ienza la lista de carrito del usuario -->

		<div align="center">
			<h2>Este es tu carrito de compras</h2> 
			<p>Fecha Actual: <input type="date" name="txtfecha" step="1" value="<?php echo date("Y-m-d"); ?>" readonly></p>
		
	<div class="well well-small">
		<hr class="soft"/>
		<h4>Tabla de Usuarios</h4>
		<div class="row-fluid" style="height: 500px;">
			
			<?php				
				$user=$_SESSION['user'];
				require("connect_db.php");
				$sql="select *from carrito where email='$user';";
			
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Folio</td>";
						echo "<td>Idproducto</td>";
						echo "<td>Email</td>";
						echo "<td>Cantidad</td>";
						echo "<td>Nombre</td>";
						echo "<td>Precio</td>";
						echo "<td>Total</td>";
						echo "<td>Eliminar</td>";
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
				    	echo "<td>$arreglo[5]</td>";
				    	echo "<td>$arreglo[6]</td>";
				    	$total=$total+$arreglo[6];
						echo "<td><a href='listcarrito.php?id=$arreglo[0] & subtotal=$arreglo[6]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";					
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
						$total=$total-$subtotal;
						$sqlborrar="DELETE FROM carrito WHERE folio=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);

						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='listcarrito.php'</script>";
					}

			?>
			<?php 	
			 echo("<p>Total: <input type=\"text\" name=\"txttotal\" value=\"$total\"style=\"width:200px;\" readonly> </p>");
			?> 		
			<input type="Submit" value="Guardar Venta">			
			<a href="#"> <input type="button" value="Cancelar Venta"> </a> 
		</div>
	 </form>
	 <br>
	 
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