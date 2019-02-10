<?php
	session_start();
	if (@!$_SESSION['user']) {
	  header("Location:Catalogo.php");	}
	include("conexion.php");
	$total= (double)$_REQUEST['txttotal'];
	$name=$_SESSION['user'];
	$fechacom=$_REQUEST['txtfecha'];

	$query="insert into ventas(usuario,fecha,total) values('$name','$fechacom',$total);";	
	$querydel="delete from carrito where email='$name';";
	$link=mysqli_query($conexion,$query);

	if ($link) {		
		$link2=mysqli_query($conexion,$querydel);
		if($link2)
		{
		header("Location: listcarrito.php?mensaje=Compra realizada Con exito & reg=borrados conexito");}
		else{
			header("Location: listcarrito.php?mensaje=Compra realizada Con exito & reg=Error al borrar los registos");
		}

	}
	else{
		header("Location: listcarrito.php?mensaje=Error al Realizar la Venta");
	}


?>