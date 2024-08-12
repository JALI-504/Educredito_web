<?php
	include('conexion.php');

	$usuar=$_POST['usuario']; 
	$passwo=$_POST['passw'];
	$sql_mod="SELECT COUNT(*) USUA FROM usuarios WHERE usuario ='$usuar' AND pass ='$passwo'";
	$stdi_mod=mysqli_query ($con, $sql_mod);
	$row = mysqli_fetch_array($stdi_mod);
	$usua=$row['USUA'];
	if ($usua >=1) {
		$sql_tuser="SELECT id_tipo_usuario TUSER FROM usuarios WHERE usuario = '$usuar'";
		$stdi_tuser=mysqli_query ($con, $sql_tuser);
		$row_tuser = mysqli_fetch_array($stdi_tuser);
		$tuser=$row_tuser['TUSER'];
		if ($tuser==3) {
			session_start();
			$_SESSION['autentica'] = 'PERMISO';
			$_SESSION['usuarioactual'] = $usuar;
			header("Location:tables_dynamic.php");
		}
		else
		{
			session_start();
			$_SESSION['autentica'] = 'PERMISO';
			$_SESSION['usuarioactual'] = $usuar;
			header("Location:table_gestores.php");
		}
	}
	else
	{
		header("Location:login.php?parameter=1");
	}
?>