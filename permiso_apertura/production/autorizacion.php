
<?php

	//require_once("dompdf/dompdf_config.inc.php");
	require_once('../DOMPDF/dompdf/dompdf_config.inc.php');
	include('conexion.php');
	$fecha=date("Y-m-d");

	$dia=date("d");
	$mesn=date("m");
	$ano=date("Y");

	if ($mesn=="01")
  	{
  		$mes="Enero";
  	}
  	elseif ($mesn=="02")
  	{
  		$mes="Febrero";
  	}
  	elseif ($mesn=="03")
  	{
  		$mes="Marzo";
  	}
  	elseif ($mesn=="04")
  	{
  		$mes="Abril";
  	}
  	elseif ($mesn=="05")
  	{
  		$mes="Mayo";
  	}
  	elseif ($mesn=="06")
  	{
  		$mes="Junio";
  	}
  	elseif ($mesn=="07")
  	{
  		$mes="Julio";
  	}
  	elseif ($mesn=="08")
  	{
  		$mes="Agosto";
  	}
  	elseif ($mesn=="09")
  	{
  		$mes="Septiembre";
  	}
  	elseif ($mesn=="10")
  	{
  		$mes="Octubre";
  	}
  	elseif ($mesn=="11")
  	{
  		$mes="Noviembre";
  	}
  	elseif ($mesn=="12")
  	{
  		$mes="Diciembre";
  	}

	$result_id=$_GET['idbeca'];

	$sql_solicit="SELECT id_permiso ID, identidad IDENT, nombre NOMBR, telefono TEL, ciudad CIUD, link LINK
	FROM permiso WHERE id_permiso = $result_id";
	$stdi_solicit=mysqli_query($con, $sql_solicit);
	$row_solicit=mysqli_fetch_array($stdi_solicit);
	$result_id=$row_solicit['ID'];
	$result_ident=$row_solicit['IDENT'];
	$result_pnombre=$row_solicit['NOMBR'];
	$telefono=$row_solicit['TEL'];
	$ciudad=$row_solicit['CIUD'];
	$link=$row_solicit['LINK'];

	
	ini_set('default_charset','utf-8');

$codigoHTML='
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Becas 2020 | Permiso</title>
	<link rel="icon" href="images/faviconp.ico" type="image/ico" />
</head>
<body>	
	<br><br><br>
		<div id="imag"><img src="images/educredito-becas.jpg" alt=""></div>
		<div id="barra"><img src="images/barra.jpg" alt=""></div>
			<table id="fech">
				<tr>
					<td>Tegucigalpa M.D.C</td>
				</tr>
				<tr>
					<td>'.$dia.' de '.$mes.' de '.$ano.'</td>
				</tr>
			</table>
			<table id="prese">
				<tr>
					<td>Se&ntilde;ores</td>
				</tr>
				<tr>
					<td><div id="neg">BANCO FICOHSA</div></td>
				</tr>
				<tr>
					<td>Presente.</td>
				</tr>
			</table>
			<div id="salud">Estimados Se&ntilde;ores:</div>
			<div id="cont">
				Por medio de la presente se solicita la apertura de cuenta de ahorro sin LIBRETA para el becario del <span>"PROGRAMA PRESIDENCIAL DE BECAS HONDURAS 20/20".</span>
			</div>
			<div id="nota">
				NOTA: LA INCLUSI&Oacute;N AL PLAN SE DEBE SER CON EL NUMERO DE:
				<br><br>
				1. IDENTIDAD       __X__
			</div>
			<table id="datos_b" border="1">
				<tr>
					<td width="50px">No</td>
					<td width="340px">BECARIO</td>
					<td  width="180px">DOCUMENTO DE <br> IDENTIFICACI&Oacute;N</td>
				</tr>
				<tr>
					<td width="50px">'.$result_id.'</td>
					<td width="340px">'.$result_pnombre.'</td>
					<td  width="180px">'.$result_ident.'</td>
				</tr>
			</table>
			<div id="adju">Se adjunta a la solicitud de apertura de cuenta, copia de identidad.</div>
			<div id="atte">Atentamente.</div>
			<div id="firma_adm">
				<img src="images/firma_admin.png" alt="">
			</div>
			<div id="web"><img src="images/Website_icon.png" alt=""> www.becashonduras2020.gob.hn</div>
			<div id="mail"><img src="images/mail.png" alt=""> info@becashonduras2020.gob.hn</div>

			<div id="edi">Edificio Torre Altamira contiguo a Punto Farma</div>
			<div id="ave">Anillo perif&eacute;rico 1.2 km del puente a desnivel, Tegucigalpa.</div>
			<div id="tel1">T&eacute;lefonos: 2221-2006 / 2221-2219</div>
			<div id="tel2">2221-1245 / 2221-1261</div>	
		</body>
</html>
<style>
#edi{
	position: absolute;
	top: 950px;
  	left: 470px;
  	font-family: Arial, Helvetica, sans-serif;
  	font-size:14px;
}

#ave{
	position: absolute;
	top: 970px;
  	left: 398px;
  	font-family: Arial, Helvetica, sans-serif;
  	font-size:14px;
}
#tel1{
	position: absolute;
	top: 990px;
  	left: 545px;
  	font-family: Arial, Helvetica, sans-serif;
  	font-size:14px;
}
#tel2{
	position: absolute;
	top: 1010px;
  	left: 615px;
  	font-family: Arial, Helvetica, sans-serif;
  	font-size:14px;
}
#mail{
	position: absolute;
	top: 1000px;
  	left: 60px;
  	font-family: Arial, Helvetica, sans-serif;
  	font-size:14px;
}
#web{
	position: absolute;
	top: 970px;
  	left: 60px;
  	font-family: Arial, Helvetica, sans-serif;
  	font-size:14px;
}
#barra{
	position: absolute;
	top: 940px;
  	left: 60px;
}
#ron1{
	position: absolute;
	top: 680px;
  	left: 25px;
	width: 13px; 
     height: 20px; 
     background: #0e2577;
     -webkit-transform: rotate(45deg) skew(15deg, 15deg);
     -moz-transform: rotate(45deg) skew(15deg, 15deg);
     -ms-transform: rotate(45deg) skew(15deg, 15deg);
     -o-transform: rotate(45deg) skew(15deg, 15deg);
     transform: rotate(165deg) skew(-15deg, -15deg);
}
#ron2{
	position: absolute;
	top: 710px;
  	left: 25px;
	width: 13px; 
     height: 20px; 
     background: #0e2577;
     -webkit-transform: rotate(45deg) skew(15deg, 15deg);
     -moz-transform: rotate(45deg) skew(15deg, 15deg);
     -ms-transform: rotate(45deg) skew(15deg, 15deg);
     -o-transform: rotate(45deg) skew(15deg, 15deg);
     transform: rotate(165deg) skew(-15deg, -15deg);
}
#ron3{
	position: absolute;
	top: 1030px;
  	left: 25px;
	width: 13px; 
     height: 300px; 
     background: #0e2577;
     -webkit-transform: rotate(45deg) skew(15deg, 15deg);
     -moz-transform: rotate(45deg) skew(15deg, 15deg);
     -ms-transform: rotate(45deg) skew(15deg, 15deg);
     -o-transform: rotate(45deg) skew(15deg, 15deg);
     transform: rotate(165deg) skew(-15deg, -15deg);
}

#imag{
	text-align:center;
}
#marco1{
	position: absolute;
	top: 20px;
  	left: 420px;
	height: 25px;
  	width: 370px;
	background: #0e2577;
}
#inclina {
    width: 40px;
    height: 0px;
    position: absolute;
	top: 20px;
  	left: 380px;
    border-right: 0px solid transparent;
    border-left: 20px solid transparent;
    border-top: 25px solid #0e2577;
}
#marco2{
	position: absolute;
	top: 20px;
  	left: 780px;
	height: 500px;
  	width: 13px;
	background: #0e2577;
}
#inclina2{
	width: 20px;
    height: 0px;
    position: absolute;
	top: 510px;
  	left: 767px;
  	transform: rotate(270deg);
  	-webkit-transform: rotate(270deg);
    -moz-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    -o-transform: rotate(270deg);
    border-right: 0px solid transparent;
    border-left: 19px solid transparent;
    border-top: 13px solid #0e2577;
}
#paralelogramo {
	position: absolute;
	top: 50px;
  	left: 67px;
    width: 26px; 
    height: 13px; 
    background: #428bca;
    -webkit-transform: skew(20deg);
    -moz-transform: skew(20deg);
    -ms-transform: skew(20deg);
    -o-transform: skew(20deg);
    transform: skew(40deg);
}
#fech{
	font-family: Arial, Helvetica, sans-serif;
  	font-size:14px;
	position: absolute;
	top: 200px;
  	left: 570px;
}
#prese{
	font-family: Arial, Helvetica, sans-serif;
  	font-size:14px;
	position: absolute;
	top: 260px;
  	left: 120px;
}
#neg{
	font-weight:bold;	
}
#salud{
	font-family: Arial, Helvetica, sans-serif;
  	font-size:14px;
	position: absolute;
	top: 340px;
  	left: 123px;
}
#cont{
	width:570px;
	text-align:justify;
	font-family: Arial, Helvetica, sans-serif;
  	font-size:14px;
	position: absolute;
	top: 380px;
  	left: 123px;
}
#cont span{
	font-weight:bold;
}
#nota{
	font-weight:bold;
	width:570px;
	text-align:justify;
	font-family: Arial, Helvetica, sans-serif;
  	font-size:14px;
	position: absolute;
	top: 440px;
  	left: 123px;
}
#datos_b{
	width:570px;
	border-style:solid;
	border-width: 1px;
	font-family: Arial, Helvetica, sans-serif;
  	font-size:14px;
	border-collapse: collapse;
	position: absolute;
	top: 530px;
  	left: 123px;
}
#adju{
	font-family: Arial, Helvetica, sans-serif;
  	font-size:14px;
	position: absolute;
	top: 620px;
  	left: 123px;
}
#atte{
	font-family: Arial, Helvetica, sans-serif;
  	font-size:14px;
	position: absolute;
	top: 660px;
  	left: 123px;
}
#firma_adm img{
	position: absolute;
	top: 680px;
  	left: 240px;
}
body{
	
}
@page {
    margin-top: 0em;
    margin-left: 0em;
    margin-bottom: 0em;
    margin-right: 0em;
}
	#nombre{
		position: absolute;
		top: 471px;
  		left: 210px;
	}
	#inden{
		position: absolute;
		top: 492px;
  		left: 195px;
	}
	#correo{
		position: absolute;
		top: 512px;
  		left: 200px;
	}
	#cel{
		position: absolute;
		top: 512px;
  		left: 690px;
	}
	#direcc{
		position: absolute;
		top: 533px;
  		left: 190px;
	}
	#deptomuni{
		position: absolute;
		top: 554px;
  		left: 247px;
	}
	#centro{
		position: absolute;
		top: 631px;
  		left: 290px;
	}
	#depto_munic{
		position: absolute;
		top: 651px;
  		left: 180px;
	}
	#carrera{
		position: absolute;
		top: 671px;
  		left: 130px;
	}
	#cuenta{
		position: absolute;
		top: 672px;
  		left: 610px;
	}
</style>';
$codigosHTML=utf8_encode($codigoHTML);
$dompdf->set_option('enable_html5_parser', TRUE);
$dompdf=new DOMPDF();
$dompdf->set_paper('letter', 'portrait');
$dompdf->load_html($codigosHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("permiso_apertura.pdf", array("Attachment" => false));

exit(0);
//$dompdf->stream("Reporte_tabla_usuarios.pdf");
mysqli_close($con);
?>