<?php 
	include('conexion.php');
	mysqli_set_charset($con,'utf8');
	$sql_depto = "SELECT ID_DEPARTAMENTO, DEPARTAMENTO FROM DEPARTAMENTOS";
	$stid_depto=mysqli_query( $con, $sql_depto );
	$opciones = '<option value="0"> Elige un Departamento</option>';
    while($fila=mysqli_fetch_array($stid_depto))
    {
    	$opciones.="<option value='".$fila['ID_DEPARTAMENTO']."'>".$fila['DEPARTAMENTO']."</option>";
    }
    mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="../js/config_presta.js"></script>
</head>
<body>
	<div>
          <label>Departamento:</label>
          <select id="departamento" name="departamento" required="">
            <?php echo "$opciones"; ?>
          </select>
        </div>
	<div>
        <label>Ciudad:</label>
        <select id="ciudad" name="ciudad" required="">
        	<option value="">Elige una Ciudad</option>
        </select>
    </div>
</body>
</html>