<?php
?>
	<meta charset="utf-8">
<?php
	include('funcion_mensajes_enviar.php');
	include('funcion_listbox.php');
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
	<title>Instituto de Credito Educativo | Contactenos</title>
	<link rel="stylesheet" href="../css/style_contactenos.css">
	<link rel="stylesheet" href="../css/fonts.css">
	<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../js/config_presta.js"></script>
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
					<img src="../images/logo_educc2.png" alt="">
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
		<a name="contac"></a>
		<section id="cont_med">
			<div id="titu_2">
				Déjanos tus datos para que uno de nuestros asesores se ponga en contacto contigo.
			</div>
			<section id="form_cont">
				<div id="formu_enviar">
					<form action="enviar_gestor.php" method="post" accept-charset="utf-8">
						<div id="info_pers">
							<label>Nombres</label>
							<label>Apellidos</label>
							<label>Sexo</label>
							<label>Correo</label>
							<label>Telefono</label>
							<label id="progr">Optar</label>
							<label id="proocu">Que Quieres Optar</label>
							<label>Departamento</label>
							<label>Municipio</label>
							<label>Comentario</label>
						</div>
						<div id="inputs">
							<input type="text" name="nombres" value="" placeholder="Ingrese un Nombre" required="">
							<input type="text" name="apellidos" value="" placeholder="Ingrese un Apellido" required="">
							<?php genera_sexo(); ?>
							<input type="email" name="correo" value="" placeholder="Ingrese el Correo electrónico" required="">
							<input type="tel" name="telefono" value="" placeholder="Ingrese el Teléfono" required="">
							<?php genera_producto(); ?>
							<select id="departamento" name="departamento" required="">
				            	<?php echo "$opciones"; ?>
				          	</select>
				          	<select id="ciudad" name="ciudad" required="">
				        		<option value="">Elige una Ciudad</option>
				        	</select>
							<textarea name="comentario" placeholder="Escribenos tus consultas, dudas...etc" required=""></textarea>
						</div>
						<div id="btn_calc">
							<input type="submit" name="" value="Enviar">
						</div>
					</form>
				</div>
				</br>
			</section>
		</section>
		<section id="cont_inter">
			<div id="info_inter">
				<div id="contenido_inter">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9204.10395009407!2d-87.18100963853468!3d14.086089112001828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6fa32af7e729b9%3A0x70f0e233535c310e!2sEDUCREDITO!5e0!3m2!1ses-419!2shn!4v1496177894541" frameborder="0" style="border:0" allowfullscreen></iframe>
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
						<input type="hidden" name="parameter" value="600">
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
					    <li><a href="faqs.php" title="">Faqs</a></li>
					    <li><a href="#" title="">Convenios</a></li>
					    <li><a href="#" title="">Becas</a></li>
					    <li><a href="#" title="">Contacto</a></li>
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