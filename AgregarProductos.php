<!DOCTYPE html>
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
    
</head>
<body>
	<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <h1 class="navbar-brand" href="#">Web Code</h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Contacto.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br>
    <form class="AgregarProduc" method="POST" action="addproductos.php" enctype="multipart/form-data">
    	<div align="center">   	     		
    		<h1>Imagen del Produbto: </h1>    		
    	    <input type="file"  name="doc" accept="Imagenes/*,.jpg">    	    
    	</div>
    	<br>    		
    	<br>
    	<br>
    	<table align="center">		
    	<tr>
				<td>Clave del producto: </td>
				<td><input type="text" name="txtclave" size=50> </td>
			</tr>
			<tr>
				<td>Nombre: </td>
				<td><input type="text" name="txtnombre" size=50></td>
			</tr>
			<tr>
				<td>Descripcion: </td>
				<td><input type="text" name="txtdescription" size=50></td>
			</tr>
			<tr>
				<td>Descripcion: </td>
				<td><input type="text" name="txtcategoria" size=50></td>
			</tr>
			<tr>
				<td>Precio: </td>
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
</body>
</html>