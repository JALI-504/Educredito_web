<?php
?>
	<meta charset="utf-8">
<?php
	include('funcion_mensajes_enviar.php');
	error_reporting(E_ALL ^ E_NOTICE);
	$mensaje=$_GET['mensaje'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<link rel="shortcut icon" type="image/png" href="../images/favicon.png"/>
	<title>Instituto de Credito Educativo | Nosotros</title>
	<link rel="stylesheet" href="../css/style_nosotros.css">
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
	<!--<div class="header"></div>
	<div class="menu">
		<li><a href="#">Inicio</a></li>
		<li><a class="pad" href="pages/nosotros.php">Nosotros</a></li>
		<li><a class="pad" href="pages/financiamiento.php">Financiamiento</a></li>
		<li><a class="pad" href="pages/onadici.php">Control Interno</a></li>
		<li><a class="pad" href="pages/requisitos.php">Requisitos</a></li>
		<li><a class="pad" href="pages/financiamiento.php#calculate">Calcular</a></li>
		<li><a class="pad" href="pages/faqs.php">Faqs</a></li>
		<li><a class="pad" href="#">Convenios</a></li>
		<li><a class="pad" href="#">Becas</a></li>
		<li><a class="pad" href="pages/contactenos.php">Contacto</a></li>
	</div>-->

	<header>
		<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-menu"></span>Menú</a>
		</div>
 
		<nav>
			<div id="mencenter">
				
				<ul>
					<li><a href="../"><span class="icon-home"></span>Inicio</a></li>
					<li><a href="nosotros.php"><span class="icon-point-right"></span>Nosotros</a></li>
					<li><a href="financiamiento.php"><span class="icon-coin-dollar"></span>Financiamiento</a></li>
					<li><a href="#"><span class="icon-point-right"></span>Control Interno</a></li>
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
					<img src="../images/logo_educn3.png" alt="">
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
				CONTROL INTERNO
			</div>
			<p>Es el Comité de Control Interno Institucional nombrado por la Máxima Autoridad de EDUCREDITO, cuyo objetivo principal es contribuir a la eficaz y eficiente implementación, mantenimiento y mejora continua del control interno institucional; siendo para ello una importante instancia de coordinación, asesoramiento, consulta y seguimiento oportuno.</p>
			<div id="img_edu_2">
				<img src="../images/juram_cocoin2.png" alt="">
				<img src="../images/juram_cocoin1.png" alt="">
			</div>
		</section>
		<section id="cont_inter">
			<div id="info_inter">
				<div id="contenido_inter">
					<div id="titu_3">
						Misión
					</div>
					<p>Somos una Institución del Estado Descentralizada con Recursos Propios que provee créditos y becas educativas a ultimo año de nivel medio , nivel superior y educación no formal contribuyendo al desarrollo profesional de los hondureños que permitan el mejoramiento de la calidad de vida, fomento de valores éticos, espirituales, morales y profesionales.</p>
					<div id="titu_3">
						Visión
					</div>
					<p>Ser la institución estatal auto sostenible, modelo de crédito educativo y líder en brindar soluciones financieras para la educación formal y no formal de los hondureños; que contribuya al alcance del desarrollo económico, social y a la reducción de la pobreza del país.</p>
				</div>
			</div>
		</section>
		<section id="productos">
			<div id="titu_4">
				Nuestra Institución
			</div>
			<div id="info_produc">
				<div id="cont_fidu">
					<div id="titu_prod">
						Organigrama
					</div>
					<div id="fidu">
						<p>Representación gráfica de la estructura de la institución, en la cual se muestran las relaciones entre sus diferentes partes y la función de cada una de ellas, así como de las personas que trabajan en las misma.</p>
					</div>
					<a href="../documents/Organigrama EDUCREDITO.pdf" title="">
						<div id="boton_req">
							Ver
						</div>
					</a>
				</div>
				<div id="cont_hipo">
					<div id="titu_prod">
						Ley de Educrédito
					</div>
					<div id="hipo">
						<p>Son los fines y objetivos principales del Instituto de crédito educativo desde 1976.</p>
					</div>
					<a href="../documents/ley_educredito.pdf" target="_blank" title="">
						<div id="boton_req">
							Ver
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
						Reseña Histórica Institucional
					</div>
					<p>El Fondo Académico fue creado el 22 de julio de 1968 gracias a la iniciativa de dos destacados hondureños: el Ingeniero Benjamín Membreño y la Señora Dorcas de Gónzales.<br>
					 Nace en el seno del Centro Cooperativo Técnico Industrial (CCTI) como fondo de préstamos a estudiantes e inicia su labor con un modesto capital, aportado por personas e instituciones interesadas en apoyar el estudio y la capacitación. Poco tiempo después el fondo resultó insuficiente para atender la demanda de crédito educativo.<br> 
					 Durante sus tres primeros años, FONDO recibió dos préstamos iniciales del Gobierno Central, y es en 1971, después de separarse del CCTI, que se inician las relaciones con el AID y el BID.<br>
					 En el período comprendido entre 1971 y 1976 se suscribieron contratos con Organismos Internacionales para la obtención de recursos financieros para un total de L. 25.5 millones de Lempiras, que fueron asignados en desembolsos parciales; asimismo se firmaron convenios para la administración de fondos de becas para empleados de instituciones del Estado.<br>
					 En fondo de préstamos a estudiantes cambia su denominación jurídica al crearse el Instituto de Crédito Educativo (EDUCREDITO) como un Organismo Autónomo del Estado con personería Jurídica y patrimonio propio, a través del Decreto Ley No. 397 emitido el 08 de Noviembre de 1975.<br> 
					 Desde entonces el Instituto ha presentado cambios sustanciales en su administración igual la Adquisición de su propio edificio en la ciudad de Tegucigalpa; y la actualización en montos para las becas a estudiantes.</p>
				</div>
			
			<div id="respo">
						<div id="titu_desc">
							Descarga tu documentación
						</div>
						<div id="info_niveles">
							<ul>
								<li>
							    	<a href="../documents/Boletin_Informativo.pdf" title="" target="_blank">Boletin Informativo COCOIN (I Trimestre) (Descargar) </a>
							    </li>
							    					    
								</ul>	
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
						<input type="hidden" name="parameter" value="200">
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
						Más sobre Educrédito
					</div>
					<ul>
					    <li><a href="../" title="">Inicio</a></li>
					    <li><a href="#" title="">Nosotros</a></li>
					    <li><a href="financiamiento.php" title="">Financiamiento</a></li>
					    <li><a href="requisitos.php" title="">Requisitos</a></li>
					    <li><a href="faqs.php" title="">Faqs</a></li>
					    <li><a href="#" title="">Convenios</a></li>
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
					Design by TIC´S Educrédito.
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