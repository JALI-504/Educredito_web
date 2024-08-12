<?php
  function genera_sexo()
  {
    include('conexion.php');
    mysqli_set_charset($con,'utf8');
    $sql_sexo="SELECT ID_SEXO, SEXO FROM sexo";
    $result_sexo = mysqli_query ($con, $sql_sexo);
    echo "<select name='sexo' id='sexo'  required>";
    echo "<option value=''>....Seleccione....</option>";
    while($registro=mysqli_fetch_row($result_sexo))
    {
      echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
    }
    echo "</select>";
    mysqli_close($con);
  }
  function genera_producto()
  {
    include('conexion.php');
    mysqli_set_charset($con,'utf8');
    $sql_product="SELECT ID_PRODUCTO, PRODUCTO FROM productos";
    $result_product = mysqli_query ($con, $sql_product);
    echo "<select name='product' id='product'  required>";
    echo "<option value=''>....Seleccione....</option>";
    while($registro=mysqli_fetch_row($result_product))
    {
      echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
    }
    echo "</select>";
    mysqli_close($con);
  }
  include('conexion.php');
  mysqli_set_charset($con,'utf8');
  $sql_depto = "SELECT ID_DEPARTAMENTO, DEPARTAMENTO FROM departamentos";
  $stid_depto=mysqli_query($con, $sql_depto);
  $opciones = '<option value="0">Elige un Departamento</option>';
  while($fila=mysqli_fetch_array($stid_depto))
  {
    $opciones.="<option value='".$fila['ID_DEPARTAMENTO']."'>".$fila['DEPARTAMENTO']."</option>";
  }
  mysqli_close($con);
?> 