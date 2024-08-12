<?php
	include('conexion.php');

	$id_use=$_POST['id_use']; 
	$identidad=$_POST['identidad']; 
	$pnombre=$_POST['pnombre'];
	$nombre = strtoupper($pnombre); 
	if (empty($_POST['telefono'])) {
		$telefono=NULL;
	}
	else
	{
		$telefono=$_POST['telefono'];
	}
	if (empty($_POST['departamento'])) {
		$departamento=NULL;
	}
	else
	{
		$pdepartamento=$_POST['departamento'];
		$departamento = strtoupper($pdepartamento);
	}
	$tipo_beca=$_POST['tipo_beca'];

	$sql_centr="SELECT COUNT(*) CONT FROM permiso WHERE identidad ='$identidad'";
	$stdi_centr=mysqli_query ($con, $sql_centr);
	$row_centr=mysqli_fetch_array($stdi_centr);
	$exist=$row_centr['CONT'];

	if ($exist >0)
	{
		header("Location:agregar_permiso.php?parameter=1");
	}
	else
	{
		$sql_upd="INSERT INTO permiso(identidad, nombre, telefono, ciudad, id_tipo_beca, modificador)
		VALUES ('$identidad', '$nombre', '$telefono', '$departamento', '$tipo_beca', '$id_use')";
		$stdi_upd=mysqli_query ($con, $sql_upd);
		if (!$stdi_upd) {
			header("Location:agregar_permiso.php?parameter=2");
		}
		else
		{
			header("Location:agregar_permiso.php?parameter=3");
		}
	}
?>

