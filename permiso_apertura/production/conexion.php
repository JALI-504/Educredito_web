<?php 
	$con = mysqli_connect('localhost', 'educrswr_permiso', 'operaciones2018', 'educrswr_permisos');
	//$con = mysqli_connect('localhost', 'becas4u2_becas', 'programa', 'becas4u2_binternacional');
    if (!$con)
    {
    	die('ERROR DE CONEXION CON MYSQL: ' . mysqli_error());
    }
?>