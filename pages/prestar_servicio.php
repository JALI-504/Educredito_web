<?php
	require_once('../nusoap/lib/nusoap.php');
	$soapclient = new soap_server;

	function valCertif($usuario, $password)
	{
		$con = mysqli_connect('162.251.80.12', 'becas4u2_bhondur', 'becas2020', 'becas4u2_beca_internacional', 3306);
		if (!$con)
		{
		  	echo"error de conexion";
		  	
		}
		$sql_cont="SELECT COUNT(*) NUSER FROM datos_personales WHERE identidad='$usuario' AND password = '$password'";
		$result_cont = mysqli_query ($con, $sql_cont);
		$row_cont = mysqli_fetch_array($result_cont);
		$cont=$row_cont['NUSER'];
		if ($cont >=1)
		{
			return $cont;
		}
		else
		{
			return 0;
		}

		
	}
	/*function mostrarMensaje($mensaje)
	{
		if($mensaje == "")
		{
			return new soap_fault('Client',"","Ingrese un numero válido");
		} 
		return "Hola ".$mensaje;
	}*/
	//Luego vamos a crear nuestro namespace este va a ser usado al momento de configurar el WSDL:
	$ns="http://myUrl/server";
	//Luego procedemos a configurar el WSDL de nuestro web server:
	$soapclient->configureWSDL('AplicacionDeServicios', $ns);
	$soapclient->wsdl->schemaTargetNamespace=$ns;
	//Después procedemos a registrar todas las funciones creadas en nuestro archivo, aclarando el nombre, los datos de entrada y los datos de salida:
	$soapclient->register('valCertif',
	array('usuario' => 'xsd:string', 'password'=>'xsd:string' ),
	array('return' => 'xsd:int'),
	$ns);


	/*$soapclient->register('mostrarMensaje',
	array('mensaje' => 'xsd:string'),
	array('return' => 'xsd:string'),
	$ns);*/
	//Por último mandamos llamar al lisener del web service y terminamos el procesamiento:
	if (isset($HTTP_RAW_POST_DATA))
	{
		$input = $HTTP_RAW_POST_DATA;
	}
	else
	{
		$input = implode("\r\n", file('php://input'));
	}
	$soapclient->service($input);
	exit;
?>