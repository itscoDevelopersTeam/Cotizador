<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
  header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
  header("Location:index2.php");
}
?>
<html lang="es">
<head>
	<title>Web Code</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">    
    <script type="text/javascript">
      function hola(){
        <?php

          $nametemporal=$_FILES['doc']['tmp_name'];
          if ($nametemporal!=null) {
              header("Location: AgregarProductos.php?imagen=$nametemporal"); 
          }          
        ?>
        alert("Entro al metodo");
      }
    </script>
</head>
<body>
	<!-- Navigation -->
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
              <a class="nav-link" href="desconectar.php">Cerra Sesion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <form class="AgregarProduc" method="POST" action="addproductos.php" enctype="multipart/form-data" style="background-image: url('img/fondoaddpro.jpg'); height: 900px; font-size: 22px; font-weight: bolder; color: #FFFFFF; ; font-family: 'Comic Sans MS';" >
    	<div align="center"> 
        <?php
        if (isset($_GET['mensaje'])) {
          $mensaje=$_GET['mensaje'];          
          echo ("<h1> " . $mensaje . "</h1> ");                
        }
        
        ?> 
        <br>  	     		
    		<h1>Imagen del Producto: </h1>    
        <br>		
    	    <input type="file"  name="doc" accept="Imagenes/*,.jpg">    	    
    	</div>
    	<br>    		
    	<div align="center">       
      </div>
    	<br>
    	<table align="center" >		
    	<tr>
				<td style="text-align: right;">Clave del producto: </td>
				<td><input type="text" name="txtclave" size=50> </td>
			</tr>
			<tr>
				<td style="text-align: right;">Nombre: </td>
				<td><input type="text" name="txtnombre" size=50></td>
			</tr>
			
			<tr>
				<td style="text-align: right;">Descripcion: </td>
				<td><input type="text" name="txtdecripcion" size=50></td>        
			</tr>
    
       <tr>
         <td style="text-align: right;">Categoria: </td>
         <td>
           <select name="txtcategoria">
          <option value="motherboard"> Motherboard </option>  
          <option value="procesadores"> Procesadores </option>
          <option value="memorias ram"> Memorias </option>
          <option value="tarjetas de red"> Tarjetas de Red </option>   
          <option value="discosduros etc"> Discosduros etc </option>
          <option value="accesorios"> Accesorios </option>
          </select> 
         </td>
       </tr>
			<tr>
				<td style="text-align: right;">Precio: </td>
				<td><input type="number" name="txtprecio" size=50></td>
			</tr>
			</tr>
			<tr>
				<td></td>
				<td>
					<br>
					<input type="Submit" value="Guardar">
					<input type="Reset" value="Limpiar campos">
					<a href="index.php"> <input type="button" value="Cancelar"> </a>  	
				</td>
			</tr>
		</table>
    </form>    
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