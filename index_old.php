<?php
?>
	<meta charset="utf-8">
<?php
	include('pages/funcion_mensajes_enviar.php');
	error_reporting(E_ALL ^ E_NOTICE);
	$mensaje=$_GET['mensaje'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
	<title>Instituto de Credito Educativo | EDUCREDITO</title>
	<link rel="stylesheet" href="css/style_index.css">
	<link rel="stylesheet" href="css/fonts.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jmpress.min.js"></script>
	<script type="text/javascript" src="js/jquery.jmslideshow.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.48780.js"></script>
	<noscript>
		<style>
			.step {
				width: 100%;
				position: relative;
			}
			.step:not(.active) {
				opacity: 1;
				filter: alpha(opacity=99);
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(opacity=99)";
			}
			.step:not(.active) a.jms-link{
				opacity: 1;
				margin-top: 40px;
			}
		</style>
	</noscript>
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
	<!--<div class="header"></div>
	<div class="menu">
		<li><a href="#">Inicio</a></li>
		<li><a class="pad" href="pages/nosotros.php">Nosotros</a></li>
		<li><a class="pad" href="pages/financiamiento.php">Financiamiento</a></li>
		<li><a class="pad" href="pages/requisitos.php">Requisitos</a></li>
		<li><a class="pad" href="pages/financiamiento.php#calculate">Calcular</a></li>
		<li><a class="pad" href="pages/faqs.php">Faqs</a></li>
		<li><a class="pad" href="#">Convenios</a></li>
		<li><a class="pad" href="#">Becas</a></li>
		<li><a class="pad" href="pages/contactenos.php">Contacto</a></li>
	</div> 
    <div id="aviso" class="modal">
      	<div class="modal-contenido">
        	<a style="color:#fff;font-family: 'Josefin Sans', sans-serif;float: right;font-size: 20px;" href="#" title="Cerrar">X</a>
        	<br>
     		<div id="avis">
     			Comunicado <strong>IMPORTANTE</strong> de parte de la gerencia de créditos y recuperaciones
     			<br><br><br>
     			<a style="text-decoration: none;" href="documents/COMUNICADO.pdf" target="_blank" title="">Ver Comunicado</a>
     			<br><br>
     		</div>
    	</div> 
    </div>
    <script>
    	 window.location="#aviso";
    </script>-->
	<header>
		<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-menu"></span>Menú</a>
		</div>
 
		<nav>
			<div id="mencenter">
				
				<ul>
					<li><a href="#"><span class="icon-home"></span>Inicio</a></li>
					<li><a href="pages/nosotros.php"><span class="icon-point-right"></span>Nosotros</a></li>
					<li><a href="pages/financiamiento.php"><span class="icon-coin-dollar"></span>Financiamiento</a></li>
					<li><a href="pages/requisitos.php"><span class="icon-files-empty"></span>Requisitos</a></li>
					<li><a href="pages/financiamiento.php#calculate"><span class="icon-calculator"></span>Calcular</a></li>
					<li><a href="pages/faqs.php"><span class="icon-question"></span>Faqs</a></li>
					<li><a href="#"><span class="icon-library"></span>Convenios</a></li>
					<li><a href="#"><span class="icon-profile"></span>Becas</a></li>
					<li><a href="pages/contactenos.php"><span class="icon-phone"></span>Contacto</a></li>
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
						<a href="webmail" target="_blank" title="">Email de Empleados</a>
					</div>
				</div>
				<div id="img_edu">
					<img src="images/logo_educ.png" alt="">
				</div>
			</div>
		</section>
		<article id="intituciones">
			<div id="info_instit">
				<a href="http://portalunico.iaip.gob.hn/portal/index.php?portal=409" target="_blank" title="Instituto de Acceso a la Información Pública"><img id="img_iap" src="images/iap2.png" alt=""></a>
				<a href="#" target="_blank" title="Programa Presidencial de Becas"><img id="img_becas" src="images/20202.png" alt=""></a>
				<a href="#" target="_blank" title="Comité de Control Interno"><img id="img_comite" src="images/comite2.png" alt=""></a>
				<a href="#" target="_blank" title="Comité de Probidad y Ética"><img id="img_etica" src="images/etica2.png" alt=""></a>
			</div>
		</article>
		<section id="cont_med">
			<div id="titu_2">
				Instituto de Crédito Educativo
			</div>
			<p>El Presidente Juan Orlando Hernandez y EDUCRÉDITO se preocupan por tus estudios y capacitación, a través del Crédito Educativo, cubrimos total o parcialmente los costos académicos de diversos programas en los niveles de:</p>
			<div id="col1">
				<ul>
				    <li>Capacitación Técnica</li>
					<li>Estudios de Pre - Grado, Post - Grado y Doctorados</li>
					<li>Diplomados y Giras de Estudio</li>
					<li>Otros de similar naturaleza</li>
				</ul>
			</div>
			<div id="titu_2">
				Nuestro Objetivo y Meta
			</div>
			<p>Es ofrecer financiamiento educativo a quienes buscan recursos para continuar su educación en Honduras o en el extranjero. Con nuestro financiamiento educativo puedes pagar desde matriculas, transportes, materiales, útiles y gastos de graduación hasta una carrera universitaria en el extranjero.</p>
			<p>Conoce más sobre el financiamiento que se adapta a tus necesidades</p>
			<div id="btn_conoce">
				<a href="pages/financiamiento.php">Conoce más</a>
			</div>
		</section>
		<section id="slider_not">
			<div class="container">
				<section id="jms-slideshow" class="jms-slideshow">
					<div class="step" data-color="color-2">
						<div class="jms-content">
							<h3>EDUCREDITO</h3>
							<p>Nuestra finalidad es proporcionar financiamiento a las personas hondureñas que desean realizar estudios dentro o fuera del territorio nacional.</p>
							<a class="jms-link" href="pages/nosotros.php">Leer Más</a>
						</div>
						<img src="images/Slider/10.png" />
					</div>
					<div class="step" data-color="color-3" data-y="900" data-rotate-x="80">
						<div class="jms-content">
							<h3>Internacional</h3>
							<p>Fondos para las modalidades presenciales, a distancia y virtual para realizar estudios en educación formal y no formal en el exterior</p>
							<a class="jms-link" href="pages/financiamiento.php#internati">Leer Más</a>
						</div>
						<img src="images/Slider/7.png" />
					</div>
					<div class="step" data-color="color-4" data-x="-100" data-z="1500" data-rotate="170">
						<div class="jms-content">
							<h3>Nacional</h3>
							<p>Fondos para todas las modalidades para realizar estudios en educación formal y no formal a nivel Nacional</p>
							<a class="jms-link" href="pages/financiamiento.php#national">Leer Más</a>
						</div>
						<img src="images/Slider/8.png" />
					</div>
					<div class="step" data-color="color-5" data-x="3000">
						<div class="jms-content">
							<h3>Becas!</h3>
							<p>El Programa Presidencial de Becas beneficiará a miles de estudiantes de escasos recursos económicos de los 18 departamentos del país.</p>
							<a class="jms-link" href="#">Leer Más</a>
						</div>
						<img src="images/Slider/6.png" />
					</div>
					<div class="step" data-color="color-1" data-x="4500" data-z="1000" data-rotate-y="45">
						<div class="jms-content">
							<h3>Financiamiento rápido y accesible</h3>
							<p>Sabemos que tus metas académicas son muy importantes y requieren una pronta respuesta. Aquí encontrarás los requisitos que necesitas</p>
							<a class="jms-link" href="pages/requisitos.php">Leer Más</a>
						</div>
						<img src="images/Slider/9.png" />
					</div>
					<div class="step" data-color="color-2">
						<div class="jms-content">
							<h3>COMUNICADO</h3>
							<p>Por este medio la Gerencia de Créditos y Recuperaciones del Instituto de Crédito Educativo (EDUCREDITO), informa a sus Prestatarios...</p>
							<a class="jms-link" href="documents/COMUNICADO.pdf" target="_blank">Leer Más</a>
						</div>
						<img src="images/Slider/11.png" />
					</div>
				</section>
        	</div>
			<script type="text/javascript">
				$(function() {
					var jmpressOpts	= {
					animation		: { transitionDuration : '6s' }
				};
				$( '#jms-slideshow' ).jmslideshow( $.extend( true, { jmpressOpts : jmpressOpts }, {
					autoplay	: true,
					bgColorSpeed: '0.8s',
					arrows		: false
					}));
				});
			</script>
		</section>
		<section id="cont_inter">
			<div id="info_inter">
				<div id="contenido_inter">
					<div id="titu_3">
						Beneficios de nuestros créditos educativos
					</div>
					<p>Esta forma de financiamiento ofrece ventajas como la posibilidad de pagar hasta por muchos años la educación, mensualidades ajustables a la capacidad económica y facilidades para liquidar los saldos pendientes.</p>
					<div id="test">
						<img src="images/agrad.png" alt="">
						<div id="grax">
							Los créditos son sustentables gracias a que, cada alumno que liquida su préstamo permite que otro estudiante pueda acceder al financiamiento.
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="productos">
			<div id="titu_4">
				Tipos de creditos a los que puedes acceder
			</div>
			<p id="parrafo">Estos créditos son a corto plazo, el cual se entrega en solo desembolso, destinado a contribuir en la formación y capacitación profesional de hondureños, financiando la realización de estudios dentro y fuera del territorio.</p>
			<div id="info_produc">
				<div id="cont_fidu">
					<div id="titu_prod">
						Fiduciario
					</div>
					<div id="fidu">
						<p>Es el que se otorga con uno o más fiadores y se comprometen ante EDUCRÉDITO a cumplir determinada obligación, en garantía de una obligación ajena si esta no es cumplida por el prestatario deudor principal.</p>
					</div>
					<a href="pages/requisitos.php#req_fid" title="">
						<div id="boton_req">
							Ver Requisitos
						</div>
					</a>
				</div>
				<div id="cont_hipo">
					<div id="titu_prod">
						Hipotecario
					</div>
					<div id="hipo">
						<p>Es el crédito que se otorga con garantía de un bien inmueble o terreno por la que se concede a EDUCRÉDITO la seguridad a cerca del cumplimiento de una obligación mediante la constitución de un a primera y especial hipoteca que grave dicho bien inmueble, la cual será realizable si el prestatario no cumple con su parte del contrato.</p>
					</div>
					<a href="pages/requisitos.php#req_hipot" title="">
						<div id="boton_req">
							Ver Requisitos
						</div>
					</a>
				</div>
			</div>
			<br><br><br>
		</section>
		<section id="cont_inter2">
			<div id="info_inter2">
				<div id="contenido_inter2">
					<div id="titu_4">
						Modalidad de los créditos
					</div>
					<p>Los creditos educativos otorgados por EDUCREDITO tendran como finalidad financiar estudios del prestatario en los siguientes rubros.</p>
					<div id="info_niveles">
						<div id="col1">
							<ul>
							    <li>Matrícula o colegiatura</li>
								<li>Sostenimiento mensual</li>
								<li>Libros, material y equipo de estudio</li>
								<li>Gastos de grado y tesis</li>
								<li>Seguro de salud</li>
								<li>Transporte</li>
								<li>Giras de estudio</li>
							</ul>
						</div>
						<div id="col2">
							<ul>
							    <li>Gastos de graduación</li>
								<li>Práctica Profesional</li>
								<li>Laboratorios</li>
								<li>Pago de equivalencias</li>
								<li>Gastos del seguro del crédito</li>
								<li>Gastos de escrituración</li>
								<li>Otros de similar naturaleza</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="cont_inter3">
			<div id="info_inter3">
				<div id="titu_4">
					Noticias
				</div>
				<div id="cont_noticias">
					<div id="noti_col1">
						<img src="images/img_noti1.jpg" alt="">
						<div id="descrip_noti1">
							El Presidente Juan Orlando Hernández participó en la firma de un convenio entre Educrédito y la Escuela de Hostelería Los Sauces y en el marco del marco del Programa de Becas 20/20 que busca fortalecer seis ejes de la economía nacional.
						</div>
					</div>
					<div id="noti_col2">
						<img src="images/img_noti2.jpg" alt="">
						<div id="descrip_noti2">
							“Mi sueño es que esto siga creciendo y siga adelante. Esta es una oportunidad única”, apuntó Hernández. “Jóvenes, nunca habíamos un esfuerzo tan importante como este; aprovéchenlo”.
						</div>
					</div>
					<div id="noti_col3">
						<img src="images/img_noti3.jpg" alt="">
						<div id="descrip_noti3">
							El Instituto Nacional de Crédito Educativo (EDUCREDITO) ya comenzó con el pago de Becas que estaba atrasado desde hace unos meses.
						</div>
					</div>
				</div>
				<div id="btn_conoce">
					<a href="#">Leer más</a>
				</div>
			</div>
		</section>
		<div id="info_footer">
			<div id="con_footer">
				<div id="col1_footer">
					<div>
						<img src="images/phone-call.png" alt=""> Teléfono
					</div>
					<a href="tel:+504-2239-4300" target="_top">+504-2239-4300/0439/5844</a>
					<div>
						<img src="images/phone-call.png" alt=""> Teléfono
					</div>
					<a href="tel:+504-2239-8648" target="_top">+504-2239-8648/4299/4311</a>
					<div>
						<img src="images/placeholder.png" alt=""> Ubicación
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
						<img src="images/mail.png" alt=""> E·mail
					</div>
					<a href="mailto:info@educredito.gob.hn" target="_top">info@educredito.gob.hn</a>
					<div>
						<img src="images/face.png" alt=""> Facebook
					</div>
					<a href="http://www.facebook.com/educreditohonduras" target="_blank">fb.com/educreditohn</a>
					<div>
						<img src="images/brochure-folded.png" alt=""> Información
					</div>
					<form action="pages/enviar_info.php" method="post" accept-charset="utf-8">
						<input type="hidden" name="parameter" value="100">
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
					    <li><a href="#" title="">Inicio</a></li>
					    <li><a href="pages/nosotros.php" title="">Nosotros</a></li>
					    <li><a href="pages/financiamiento.php" title="">Financiamiento</a></li>
					    <li><a href="pages/requisitos.php" title="">Requisitos</a></li>
					    <li><a href="" title="">Convenios</a></li>
					    <li><a href="pages/contactenos.php" title="">Contacto</a></li>
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
	if ($mensaje==1)
	{
		?>
			<script>
				window.location="#openModalm";
			</script>
		<?php
	}
?>