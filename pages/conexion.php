<?php
/******** CONECTAR CON BASE DE DATOS **************** */
   $con = mysqli_connect('localhost', 'educrswr_dbeducr', 'edu2017');
   if (!$con){die('ERROR DE CONEXION CON MYSQL: ' . mysqli_error());}
/* ********************************************** */
/********* CONECTA CON LA BASE DE DATOS  **************** */
   $database = mysqli_select_db($con,'educrswr_educredito');
   if (!$database){die('ERROR CONEXION CON BD: '.mysqli_error());}
/* ********************************************** */
?>
