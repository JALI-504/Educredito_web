<?php
?>
	<meta charset="utf-8">
<?php
	include('funcion_mensajes_enviar.php');
	error_reporting(E_ALL ^ E_NOTICE);
	$mensaje=$_GET['mensaje'];
	$cuota=$_GET['cuota'];
	$msj_couta=$_GET['mess'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<link rel="shortcut icon" type="image/png" href="../images/favicon.png"/>
	<title>Instituto de Credito Educativo | Requisitos</title>
	<link rel="stylesheet" href="../css/estilos_confirmar.css">
	<link rel="stylesheet" href="../css/style_financiamiento.css">
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
					<li><a href="nosotros.php"><span class="icon-point-right"></span>Nosotros</a></li>
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
					<img src="../images/logo_educf.png" alt="">
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
				El financiamiento educativo es para que continúes tus estudios, úsalo para:
			</div>
			<div id="inter_local">
				<div id="inter">
					<a href="#internati">Educación Internacional</a>
				</div>
				<div id="local">
					<a href="#national">Educación Nacional</a>
				</div>
			</div>
			<div id="titu_2">
				¿Qué es un financiamiento educativo?
			</div>
			<div id="cont_financ">
				<div>Un financiamiento educativo es la alternativa que ofrecen instituciones financieras para que todos aquellos alumnos que cursen cualquier nivel académico; puedan iniciar, continuar o concluir sus estudios.
				Al solicitar un crédito y cumplir con tus pagos en tiempo y forma te ayudará a construir un buen historial crediticio, lo que te ayudará en el futuro a recibir nuevos préstamos y servicios.</div>
			</div>
			<div id="cont_glos">
				<div id="glos_titu">
					Terminología Financiera
				</div>
				<div id="col2_glos">
					<span>Garantía:</span>
					<div id="text_finan">
						Es un bien tangible, propiedad de la persona que solicita un crédito que se deja como respaldo del repago del crédito.
					</div>
					<span>Deuda académica:</span>
					<div id="text_finan">
						Deuda que el (la) educando(a) está en obligación de pagar, honrar, devolver, o cancelar a la institución educativa o formativa.
					</div>
					<span>Mora:</span>
					<div id="text_finan">
						Consiste en el retraso, dilación o tardanza en el cumplimiento de la obligación crediticia, por lo común, la de no pagar en el tiempo establecido una cantidad económica, liquidada y vencida.
					</div>
				</div>
				<div id="col1_glos">
					<span>Tasa de interés:</span>
					<div id="text_finan">
						Es el costo del crédito en porcentaje del monto prestado, puede ser variable o fijo.
					</div>
					<span>Mensualidades:</span>
					<div id="text_finan">
						Las mensualidades son los pagos que se harán cada mes para pagar los intereses y comisiones.
					</div>
					<span>Plazo:</span>
					<div id="text_finan">
						Es el período de tiempo en el que se termina el crédito y deberá estar pagado en su totalidad.
					</div>
				</div>
			</div>
		</section>
		<section id="cont_inter">
			<div id="info_inter">
				<div id="titu_2">
					El proceso es de 4 etapas y es muy simple
				</div>
				<div id="estapas">
					<div id="etapa1">
						<a href="contactenos.php#contac">
							<div id="img_etapa1">
							 	<img src="../images/meeting.png" alt="">
							</div>
							<div id="text_etapa1">
								Contacta a un asesor
							</div> 
						</a>
					</div>
					<div id="etapa2">
						<a href="#calculate"> 
							<div id="img_etapa2">
							 	<img src="../images/calcu.png" alt="">
							</div>
							<div id="text_etapa2">
								Cotiza tu financiamiento
							</div> 
						</a>	
					</div>
					<div id="etapa3">
						<a href="requisitos.php"> 
							<div id="img_etapa3">
							 	<img src="../images/docs.png" alt="">
							</div>
							<div id="text_etapa3">
								Entrega tus documentos
							</div> 
						</a>		
					</div>
					<div id="etapa4"> 
						<div id="img_etapa4">
						 	<img src="../images/gradu.png" alt="">
						</div>
						<div id="text_etapa4">
							Concéntrate en estudiar
						</div> 
					</div>	
				</div>
			</div>
		</section>
		<a name="internati"></a>
		<section id="productos">
			<div id="respo">
				<div id="titu_2">
					Educación Internacional
				</div>
				<p id="descr">
					Los fondos educativos de EDUCREDITO se concederán en las modalidades presenciales, a distancia y virtual para realizar estudios en educación formal y no formal en el exterior de la siguiente manera.
				</p>
				<div id="educ_formal">
					<div id="tit_formal">
						Educación Sistemática Formal
					</div>
					<ul>
						<li>Estudios de especialización en el área técnicas, necesarias para impulsar el desarrollo socio económico, salud, científico, tecnológico, cultural del país.</li>
						<li>Estudios de Grado, Postgrado y Doctorado.</li>
					</ul>
					
				</div>
				<div id="educ_nformal">
					<div id="tit_formal">
						Educación No Formal
					</div>
					<div id="nformal">
						<div>Cursos libres, conferencias, pasantías, seminarios, intercambio cultural, talleres, viajes académicos, entrenamientos y otras formas que contribuyan a la difusión general de la cultura, a la investigación científica, humanística y tecnológica.</div>
					</div>
				
				</div>
				<a name="national"></a>
				<div id="titu_2">
					Educación Nacional
				</div>
				<p id="descr">
					Los fondos educativos de EDUCREDITO se concederán en las modalidades presenciales, a distancia y virtual para realizar estudios en educación formal y no formal en Honduras de la siguiente manera.
				</p>
				<div id="educ_formal">
					<div id="tit_formal">
						Educación Sistemática Formal
					</div>
					<ul>
						<li>Estudios de especialización en el área técnicas de Educación Media y Superior.</li>
						<li>Estudios de Grado, Postgrado y Doctorado.</li>
						<li>Estudio de educación Media.</li>
					</ul>
				
				</div>
				<div id="educ_nformal">
					<div id="tit_formal">
						Educación No Formal
					</div>
					<div id="nformal">
						<div>Cursos libres, conferencias, pasantías, seminarios, intercambio cultural, talleres, viajes académicos, entrenamientos y otras formas que contribuyan a la difusión general de la cultura, a la investigación científica, humanística, tecnológica y al estudio de los problemas nacionales.</div>
					</div>
				</div>
			</div>
		</section>
		<a name="calculate"></a>
		<section id="cont_inter2">
			<div id="info_inter2">
				<div id="contenido_inter2">
					<div id="titu_4">
						Calcula aproximadamente tus mensualidades
					</div>
					<form action="calcular.php" method="post" accept-charset="utf-8">
						<div id="cant_mens">
							<label>Cantidad a Financiar</label>
							<input type="number" name="cant_mensual" min="15000" max="1000000"  value="" placeholder="Ingrese la cantidad en Lps." required="">
						</div>
						<div id="plazo">
							<label>Plazo en Meses</label>
							<select name="meses" required="">
								<option value="6">6</option>
								<option value="9">9</option>
								<option value="12">12</option>
								<option value="18">18</option>
								<option value="24">24</option>
								<option value="30">30</option>
								<option value="36">36</option>
								<option value="48">48</option>
								<option value="60">60</option>
								<option value="96">96</option>
							</select>
						</div>
						<div id="btn_calc">
							<input type="submit" name="" value="Calcular">
						</div>
					</form>
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
						<input type="hidden" name="parameter" value="300">
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
					    <li><a href="nosotros.php" title="">Nosotros</a></li>
					    <li><a href="#" title="">Financiamiento</a></li>
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
					© Educrédito 2017. Todos los derechos reservados.
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
	<div id="openModalmc" class="modalDialogom">
		<div>
			<a href="#closem" title="cerrar" class="cerrarm">X</a>
			<section class="logm">
				<div id="titulo_vent">
					Cálculo Aproximado de las Cuotas
				</div>
				<div id="mensaje">
					<p>Pago Mensual L. <?php echo "$cuota"; ?></p>
					<p>NOTA: La presente información es únicamente para efectos ilustrativos, no representa ningún ofrecimiento formal por parte de Educrédito.</p>
				</div>
				<div id="btnsalir">
					<a href="#closem" class="btTxtm">Aceptar</a>	
				</div>	
			</section>
		</div>
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
	if ($msj_couta==2)
	{
		?>
			<script>
				window.location="#openModalmc";
			</script>
		<?php
	}
?>