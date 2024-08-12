<?php
	include('conexion.php');

	$usuar=$_POST['usuario']; 
	$passwo=$_POST['passw'];
	$sql_mod="SELECT COUNT(*) USUA FROM usuarios WHERE usuario ='$usuar' AND pass ='$passwo'";
	$stdi_mod=mysqli_query ($con, $sql_mod);
	$row = mysqli_fetch_array($stdi_mod);
	$usua=$row['USUA'];
	if ($usua >=1) {
		session_start();
		$_SESSION['autentica'] = 'PERMISO';
		$_SESSION['usuarioactual'] = $usuar;
		header("Location:tables_dynamic.php");
	}
	else
	{
		header("Location:login.php?parameter=1");
	}
?>