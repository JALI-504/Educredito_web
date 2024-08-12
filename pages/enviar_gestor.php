<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
</body>
</html>
<?php
	include('conexion.php');
	mysqli_set_charset($con,'utf8');

	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$sexo = $_POST['sexo'];
	$correo = $_POST['correo'];
	$telefono = $_POST['telefono'];
	$product = $_POST['product'];
	$depto = $_POST['departamento'];
	$ciudad = $_POST['ciudad'];
	$comentario = $_POST['comentario'];
	$fecha = date("Y-m-d H:i:s");
	

	$sql_product="SELECT producto from productos where id_producto = $product";
    $result_product = mysqli_query ($con, $sql_product);
    $row_product=mysqli_fetch_array($result_product);
    $producto=$row_product['producto'];
	
    
    $sql_sexo="SELECT sexo from sexo where id_sexo = $sexo";
    $result_sexo = mysqli_query ($con, $sql_sexo);
    $row_sexo=mysqli_fetch_array($result_sexo);
    $genero=$row_sexo['sexo'];
	

    $sql_query="SELECT b.departamento depto, a.ciudad ciudad from ciudad a, departamentos b where a.id_departamento = 
    b.id_departamento and a.id_ciudad = $ciudad";
    $result_query = mysqli_query ($con, $sql_query);
    $row_query=mysqli_fetch_array($result_query);
    $departamento=$row_query['depto'];
	$city=$row_query['ciudad'];
		
    
    if ($product==1) {
    	$n_email = "info@educredito.gob.hn";
		$emailinfo=$correo;
		$subject = "Correo desde Sitio Web de Educredito en Contactenos";
		$headers="From:".$emailinfo. "\r\n";
		$headers.="MIME-Version: 1.0" . "\r\n";
		$headers.="Content-type: text/html; charset=iso-8859-1" . "\r\n";
		$message = '
		<html>
			<head>
				<meta charset="utf-8">
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
				<title>Envio de correo</title>
			</head>
			<p>Una persona busca contactarnos desde la secci&oacute;n de Cont&aacute;tenos de nuestro sitio web. </p>
			<body>
				<table>
					<tr>
						<td>Correo:</td>
						<td>'.$correo.'</td>
					</tr>
					<tr>
						<td>Nombre:</td>
						<td>'.$nombres.'</td>
					</tr>
					<tr>
						<td>Apellidos:</td>
						<td>'.$apellidos.'</td>
					</tr>
					<tr>
						<td>Telefono:</td>
						<td>'.$genero.'</td>
					</tr>
					<tr>
						<td>Telefono:</td>
						<td>'.$telefono.'</td>
					</tr>
					<tr>
						<td>Departamento:</td>
						<td>'.$departamento.'</td>
					</tr>
					<tr>
						<td>Municipio:</td>
						<td>'.$city.'</td>
					</tr>
				</table>
				<br>
				<table>
					<tr>
						<td>Mensaje:</td>
					</tr>
					<tr>
						<td>'.wordwrap($comentario, 70, "\r\n").'</td>
					</tr>
				</table>
				<br>
				<br>
				<br>
			</body>
		</html>';
		mail($n_email,utf8_decode($subject),utf8_decode($message),utf8_decode($headers));
		//mail($n_email,$subject,$message,$headers);
		header("Location:contactenos.php?mensaje=1");
    }
    else
    {
    	$nb_email = "camilo.osmary@gmail.com";
		$emailinfo=$correo;
		$subject = "Correo desde Sitio Web de Educredito en Contactenos";
		$headers="From:".$emailinfo. "\r\n";
		$headers.="MIME-Version: 1.0" . "\r\n";
		$headers.="Content-type: text/html; charset=iso-8859-1" . "\r\n";
		$message = '
		<html>
			<head>
				<meta charset="utf-8">
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
				<title>Envio de correo</title>
			</head>
			<p>Una persona busca contactarnos desde la secci&oacute;n de Cont&aacute;tenos del sitio web de Educredito. </p>
			<body>
				<table>
					<tr>
						<td>Correo:</td>
						<td>'.$correo.'</td>
					</tr>
					<tr>
						<td>Nombre:</td>
						<td>'.$nombres.'</td>
					</tr>
					<tr>
						<td>Apellidos:</td>
						<td>'.$apellidos.'</td>
					</tr>
					<tr>
						<td>Sexo:</td>
						<td>'.$genero.'</td>
					</tr>
					<tr>
						<td>Telefono:</td>
						<td>'.$telefono.'</td>
					</tr>
					<tr>
						<td>Departamento:</td>
						<td>'.$departamento.'</td>
					</tr>
					<tr>
						<td>Municipio:</td>
						<td>'.$city.'</td>
					</tr>
				</table>
				<br>
				<table>
					<tr>
						<td>Mensaje:</td>
					</tr>
					<tr>
						<td>'.wordwrap($comentario, 70, "\r\n").'</td>
					</tr>
				</table>
				<br>
				<br>
				<br>
			</body>
		</html>';
		mail($nb_email ,utf8_decode($subject),utf8_decode($message),utf8_decode($headers));
		header("Location:contactenos.php?mensaje=1");
    }
    mysqli_close($con);
?>