<?php
	include('conexion.php');

	$id_beca=$_POST['result_id']; 
	$user_id=$_POST['user_id']; 
	$identidad=$_POST['identidad'];
	$pnombre=$_POST['pnombre'];
	$telefono=$_POST['telefono'];
	$departamento=$_POST['departamento'];

	$sql_upd="UPDATE permiso SET identidad='$identidad',nombre='$pnombre',telefono='$telefono', ciudad='$departamento', modificador='$user_id' WHERE id_permiso =$id_beca";
	$stdi_upd=mysqli_query ($con, $sql_upd);

	if (!$stdi_upd) {
		header("Location:modificar_permiso.php?parameter=1&idbeca=$id_beca");
	}
	else
	{
		header("Location:modificar_permiso.php?parameter=2&idbeca=$id_beca");
	}
?>