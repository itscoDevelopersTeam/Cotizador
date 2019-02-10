<?php	
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==2) {
		header("Location:index2.php");
	}
	
	include("conexion.php");

	$clave=$_REQUEST['txtclave'];
	$mail=$_SESSION['user'];
	$cantidad=(int)$_REQUEST['txtcantidad'];
	$nombre=$_REQUEST['txtnombre'];
	$precio=(double)$_REQUEST['txtprecio'];	
	$total=$cantidad*$precio;

	
	$query="insert into carrito(idproducto,email,cantidad,nombre,precio,total) values('$clave','$mail',$cantidad,'$nombre',$precio,$total)";
	$link=mysqli_query($conexion,$query);

	if ($link) {
		header("Location: Catalogo.php? msn=Carrito agregado con exito");
	}
	else{ header("Location: Catalogo.php? msn=Error al agregar el carrito"); }
	
	
?>