<?php
include('conexion.php');
mysqli_set_charset($con,'utf8');
$id_depto = $_POST["iddepartamento"];
if(isset($id_depto))
	{
		$opciones = '<option value="0"> Elige una Ciudad</option>';
		$strConsulta = "SELECT ID_CIUDAD, CIUDAD FROM ciudad WHERE ID_DEPARTAMENTO = $id_depto ORDER BY ciudad ASC";
		$result = mysqli_query($con, $strConsulta);
		while($fila = mysqli_fetch_array($result))
		{
			$opciones.='<option value="'.$fila["ID_CIUDAD"].'">'.$fila["CIUDAD"].'</option>';
		}
		echo $opciones;
	}
	mysqli_close($con);
?>
