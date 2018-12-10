<?php
	$clave= $_REQUEST['txtclave'];
	$nombre= $_REQUEST['txtnombre'];
	$descripcion = $_REQUEST['txtdescription'];
	$categoria=$_REQUEST['txtcategoria'];
	$precio= $_REQUEST['txtprecio'];
	$query="Insert into productos values('$clave','$nombre','$descripcion','$categoria','$precio')";	
	if ($clave!="" and $nombre!="") {
		include("conexion.php");
		$link=mysqli_query($conexion,$query);
		if ($link) {			
			$carpeta="img/catalogoimg/";
			opendir($carpeta);
			$destino=$carpeta. $clave.".jpg";
			copy($_FILES['doc']['tmp_name'],$destino);	
			$nombre=$_FILES['doc']['name'];	
			header("Location: AgregarProductos.php?mensaje=Datos Almacendados Correctamente");
			
		}	
		else{
			 header("Location: AgregarProductos.php?mensaje=Error al guardar los datos en el servidor");
		}
		
		
	}
	else{
		header("Location: AgregarProductos.php?mensaje=Rellene los campos");
	}
?>

