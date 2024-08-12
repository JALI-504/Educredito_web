	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<link rel="shortcut icon" type="image/png" href="../images/favicon.png"/>
	<title>Instituto de Credito Educativo | Requisitos</title>
	<link rel="stylesheet" href="../css/style_faqs.css">
	<link rel="stylesheet" href="../css/fonts.css">
	<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(main);
 
		var contador = 1;
		 
		function main () {
			$('.menu_bar').click(function(){
				if (contador == 1) {
					$('nav').animate({
						left: '0'
					});
					contador = 0;
				} else {
					contador = 1;
					$('nav').animate({
						left: '-150%'
					});
				}
			});
		 
			// Mostramos y ocultamos submenus
			$('.submenu').click(function(){
				$(this).children('.children').slideToggle();
			});
		}

	</script>
</head>
<body>
	<header>
		<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-menu"></span>Menú</a>
		</div>
 
		<nav>
			<div id="mencenter">
				
				<ul>
					<li><a href="../"><span class="icon-home"></span>Inicio</a></li>
					<li><a href="#"><span class="icon-point-right"></span>Nosotros</a></li>
					<li><a href="financiamiento.php"><span class="icon-coin-dollar"></span>Financiamiento</a></li>
					<li><a href="requisitos.php"><span class="icon-files-empty"></span>Requisitos</a></li>
					<li><a href="financiamiento.php#calculate"><span class="icon-calculator"></span>Calcular</a></li>
					<li><a href="faqs.php"><span class="icon-question"></span>Faqs</a></li>
					<li><a href="#"><span class="icon-library"></span>Convenios</a></li>
					<li><a href="#"><span class="icon-profile"></span>Becas</a></li>
					<li><a href="contactenos.php"><span class="icon-phone"></span>Contacto</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<div class="wrapper">
		<section id="portada">
			<div id="bienvenida">
				<div id="contenido">
					<div id="titulos">
						<div id="titu">
							FINANCIAMOS TU EDUCACIÓN UNIVERSITARIA
						</div>
						<p>Tenemos las soluciones que los estudiantes necesitan para no abandonar sus estudios y metas profesionales.</p>
					</div>
					<div id="btn_email">
						<a href="../webmail" target="_blank" title="">Email de Empleados</a>
					</div>
				</div>
				<div id="img_edu">
					<img src="../images/logo_educfq.png" alt="">
				</div>
			</div>
		</section>
		<article id="intituciones">
			<div id="info_instit">
				<a href="https://portalunico.iaip.gob.hn/#/portal=409" target="_blank" title="Instituto de Acceso a la Información Pública"><img src="../images/iap2.png" alt=""></a>
				<a href="#" target="_blank" title="Programa Presidencial de Becas"><img id="img_becas" src="../images/20202.png" alt=""></a>
				<a href="#" target="_blank" title="Comité de Control Interno"><img id="img_comite" src="../images/comite2.png" alt=""></a>
				<a href="#" target="_blank" title="Comité de Probidad y Ética"><img id="img_etica" src="../images/etica2.png" alt=""></a>
				<a href="https://www.onadici.gob.hn/" target="_blank" title="ONADICI"><img id="img_onadici" src="../images/onadici.png" alt=""></a>
			</div>
		</article>
		<section id="cont_med">
			<div id="titu_2">
				Conoce las preguntas mas frecuentes.
			</div>
			<p>Si tienes preguntas sobre tu financiamiento educativo, aquí respondemos las más comunes.</p>
			<div id="preg_faqs">
				<div id="cuestion">
					¿Puedo obtener un financiamiento educativo si mi promedio es menor a 70?
				</div>
				<div id="resp">
					Sí. Puedes obtener un financiamiento educativo siempre y cuando tu promedio no sea menor de 60.
				</div>
				<div id="cuestion">
					¿El financiamiento educativo es sólo para universidad?
				</div>
				<div id="resp">
					Sí.<br>solo es para universidades que incluyen pasantias, diplomado, Estudios de Pre - Grado, Post - Grado y Doctorados.
				</div>
				<div id="cuestion">
					¿En qué puedo usar mi financiamiento educativo?
				</div>
				<div id="resp">
					En cualquier gasto relacionado con tu educación.<br>Para tu educación nacional, o internacional, inscripciones, gastos escolares, y/o titulaciones.
				</div>
				<div id="cuestion">
					¿Un financiamiento es lo mismo que una beca?
				</div>
				<div id="resp">
					No.<br>Una beca consiste en un apoyo económico que se otorga para realizar estudios, previo cumplimiento de determinados requisitos, y puede ser otorgado por organismos públicos o privados, asociaciones civiles o personas.<br>Un Crédito es un beneficio del estado que se otorga a estudiantes de probado mérito académico que necesitan apoyo financiero para iniciar o continuar una carrera en alguna de las instituciones de educación superior acreditadas que forman parte del sistema de crédito con garantía estatal.<br><br>Es importante reconocer la diferencia que existe entre una beca y un crédito educativo: Y esta es básicamente que una beca no lleva la obligación de regresar los recursos a la institución que la otorgó, en cambio el crédito educativo es un préstamo que sí se tiene que regresar, para que otro estudiante pueda participar también de este beneficio.
				</div>
				<div id="cuestion">
					¿Qué tasa de interés manejan?
				</div>
				<div id="resp">
					La tasa es variable.<br>Se calcula con base en tu perfil, la institución y cantidad a financiar, y el plazo a pagar. Aún así, puedes obtener un <a href="financiamiento.php#calculate" title="">cálculo aproximado</a> de tus mensualidades.
				</div>
				<div id="cuestion">
					¿Qué necesito para obtener un financiamiento de estudios en el extranjero?
				</div>
				<div id="resp">
					Cumplir con los <a href="requisitos.php" title="">requisitos</a> y aplicar para alguna Universidad.
				</div>
				<div id="cuestion">
					¿Puedo estudiar cualquier carrera con un financiamiento educativo?
				</div>
				<div id="resp">
					Sí.<br>Puedes usar el <a href="financiamiento.php" title="">financiamiento</a> educativo para cualquier carrera, en cualquier universidad de Honduras o el extranjero.
				</div>
				<div id="cuestion">
					¿Puedo solicitar un financiamiento si soy menor de edad?
				</div>
				<div id="resp">
					Si el solicitante del crédito es menor de edad, deberá llenar la solicitud con sus datos personales y un padre de familia deberá representarlo.
				</div>
				<div id="cuestion">
					¿Qué pasa si me atraso con mis pagos?
				</div>
				<div id="resp">
					Se aplicarán los cargos moratorios que se hayan pactado en el contrato.
				</div>
				<div id="cuestion">
					¿En qué universidades puedo estudiar con el crédito financiero?
				</div>
				<div id="resp">
					Tenemos convenios con las principales universidades.<br>Aún así podemos financiar tus estudios con cualquier institución educativa del país, aunque no tengamos un convenio previo con ellos.
				</div>
			</div>
		</section>
		<section id="cont_inter">
			<div id="cont_noticias">
				<div id="noti_col1">
					<a href="financiamiento.php" title="">
						<img src="../images/finanzas.jpg" alt="">
						<div id="link">
							Financiamiento
						</div>
					</a>
				</div>
				<div id="noti_col2">
					<a href="#" title="">
						<img src="../images/convenios.png" alt="">
						<div id="link">
							Convenios
						</div>
					</a>
				</div>
				<div id="noti_col3">
					<a href="contactenos.php" title="">
						<img src="../images/masinfo.jpg" alt="">
						<div id="link">
							Mas Información
						</div>
					</a>
				</div>
			</div>
		</section>
		<div id="info_footer">
			<div id="con_footer">
				<div id="col1_footer">
					<div>
						<img src="../images/phone-call.png" alt=""> Teléfono
					</div>
					<a href="tel:+504-2239-4300" target="_top">+504-2239-4300/0439/5844</a>
					<div>
						<img src="../images/phone-call.png" alt=""> Teléfono
					</div>
					<a href="tel:+504-2239-8648" target="_top">+504-2239-8648/4299/4311</a>
					<div>
						<img src="../images/placeholder.png" alt=""> Ubicación
					</div>
					<a href="https://www.google.hn/maps/place/EDUCREDITO/@14.0865673,-87.1824749,17z/data=!3m1!4b1!4m5!3m4!1s0x8f6fa32af7e729b9:0x70f0e233535c310e!8m2!3d14.0865673!4d-87.1802862" title="" target="_blank">
						Colonia Florencia Norte
						<br>
						Contiguo al Colegio de Ingenieros Civiles de Honduras
						<br>
						Tegucigalpa, Honduras.
					</a>
				</div>
				<div id="col2_footer">
					<div>
						<img src="../images/mail.png" alt=""> E·mail
					</div>
					<a href="mailto:info@educredito.gob.hn" target="_top">info@educredito.gob.hn</a>
					<div>
						<img src="../images/face.png" alt=""> Facebook
					</div>
					<a href="http://www.facebook.com/educreditohonduras" target="_blank">fb.com/educreditohn</a>
					<div>
						<img src="../images/brochure-folded.png" alt=""> Información
					</div>
					<form action="enviar_info.php" method="post" accept-charset="utf-8">
						<input type="hidden" name="parameter" value="400">
						<input type="email" name="mail" value="" placeholder="Tu email para enviarte la información" required="">
						<div id="boton_enviar">
							<input type="submit" name="" value="Enviar">
						</div>
					</form>
				</div>
				<div id="col3_footer">
					<div>
						Nuestro Compromiso
					</div>
					<p>
						Fomentamos la educación con financiamiento educativo para miles de jóvenes que quieren estudiar en Honduras y en el extranjero.
					</p>
					<p>
						Queremos que todos puedan acceder a la educación nacional e internacional con la que siempre han soñado. 
					</p>
					<div>
						Más sobre Educredito
					</div>
					<ul>
					    <li><a href="../" title="">Inicio</a></li>
					    <li><a href="nosotros.php" title="">Nosotros</a></li>
					    <li><a href="financiamiento.php" title="">Financiamiento</a></li>
					    <li><a href="requisitos.php" title="">Requisitos</a></li>
					    <li><a href="#" title="">Faqs</a></li>
					    <li><a href="" title="">Convenios</a></li>
					    <li><a href="#" title="">Becas</a></li>
					    <li><a href="contactenos.php" title="">Contacto</a></li>
					</ul><br>
				</div>
			</div>
		</div>
		<footer>
			<div id="cont_footer">
				<div id="copy">
					© Educredito 2017. Todos los derechos reservados.
				</div>
				<div id="aviso">
					<a href="">Aviso de privacidad.</a>&nbsp;&nbsp;&nbsp;<a href="">Atención a Usuarios.</a>
				</div>
				<div id="desing">
					Design by TIC´S Educredito.
				</div>
				
			</div>
		</footer>
	</div>
</body>
</html>
<?php 
include('funcion_mensajes_enviar.php');
	error_reporting(E_ALL ^ E_NOTICE);
	$mensaje=$_GET['mensaje'];
	if ($mensaje==1)
	{
		?>
			<script>
				window.location="#openModalm";
			</script>
		<?php
	}
?>