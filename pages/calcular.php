<?php 
	$cant_mensual = $_POST['cant_mensual'];
	$meses = $_POST['meses'];

	$meses_neg = $meses*(-1);
	$interes=0.12/((360*12)/365);
	$interespow = 1-(pow((1+$interes), $meses_neg));
	$intentreinte = $interespow/$interes;
	$cuota = $cant_mensual/$intentreinte;
	$cuota_red = round($cuota, 2);
	
	echo "$cuota_red";
	header("Location:financiamiento.php?cuota=$cuota_red&mess=2");
?>