	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<link rel="shortcut icon" type="image/png" href="../images/favicon.png"/>
	<title>Instituto de Credito Educativo | Requisitos</title>
	<link rel="stylesheet" href="../css/style_requisitos.css">
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
					<img src="../images/logo_educr.png" alt="">
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
				Requisitos
			</div>
			<div id="titu_prod">
				Requisitos Personales
			</div>
			<div id="info_niveles">
				<ul>
					 <li>Deberá llenar la solicitud con sus datos personales y un
					 padre de familia lo representara y responsable.</li>
					 <li>Solicitud del crédito con fotografía de tamaño carnet (Solicitarla en EDUCREDITO).</li>
					 <li>Copia Tarjeta de Identidad y R.T.N Numérico.</li>
					 
					 <li>Constancia de Trabajo reciente, con las respectivas deducciones de ley.</li>
					 <li>Croquis del lugar de residencia (1 copia elaborada a mano y 1 copia descargada por Google Maps).</li>
					 
					 <li>Croquis del lugar de Trabajo (1 copia elaborada a mano y 1 copia descargada por Google Maps).</li>
					 
					 <li>Recibo de Servicio Público reciente (Agua, Luz, Teléfono).</li>
					 <li>Cuenta Bancaria en Bac- Credomatic del Solicitante del Crédito</li>
					 <li>En caso que el Solicitante del Crédito alquile residencia, presentara copia de Contrato de
					 Arrendamiento.</li>
					
					 <li>Presentar Poder General de Administración y Representación (debidamente inscrito en el Instituto de
					 la Propiedad) en caso que estudien fuera del pais.</li>
					 
				</ul>
			</div>
			<hr>
			<a name="req_fid"></a>
			<div id="titu_prod">
				Requisitos Académicos
			</div>
			<div id="info_niveles">
				<ul>
					<li>Copia del Título Académico: Educación Básica, Media, y/o Superior según el caso.</li>
					<li>Copia del Historial Académico.</li>
					<li>Constancia de Aceptación o Matricula de la Institución Académica donde estudiara dentro o fuera del país.</li>
					<li>Plan de Estudios de la carrera a cursar.</li>
					<li>Constancia de Costos de la carrera de la Institución Académica.</li>
				</ul>
			</div>
			</br>
			<div id="titu_prod">
				Responsable Solidario
			</div>
			<div id="info_niveles">
				<ul>
					
					<li>Copia Tarjeta de Identidad y R.T.N Numérico.</li>
					<li>Constancia de Trabajo reciente con las respectivas deducciones de ley (antiguedad laboral 1 año en empresas publicas o privadas).</li>
					<li>Croquis del lugar de residencia (1 copia elaborada a mano y 1 copia descargada por Google Maps).</li>
				
					<li>Croquis del lugar de Trabajo (1 copia elaborada a mano y 1 copia descargada por Google Maps).</li>
				
					<li>Copia de un Recibo de Servicio Público reciente (Agua, Luz, Teléfono).</li>
					<li>En caso de que el Aval alquile residencia, debe presentar copia del Contrato de Arrendamiento.</li>
				</ul>
			</div>
			</br>
		</section>
		<section id="cont_inter">
			<div id="info_inter">
				<div id="contenido_inter">
					<div id="titu_aval">
						Requisitos del Aval (Garantía Fiduciaria)
					</div>
					<div id="info_niveles">
						<ul>
							
							<li>Copia de Tarjeta de Identidad y R.T.N Numérico.</li>
							<li>Constancia de Trabajo con sus respectivas deducciones.</li>
							<li>Croquis del lugar de residencia (1 copia elaborada a mano y 1 copia descargada por Google Maps).</li>
							
							<li>Croquis del lugar de Trabajo (1 copia elaborada a mano y 1 copia descargada por Google Maps).</li>
						
							<li>Copia de un recibo de Servicios Públicos (Agua, Luz, Teléfono) reciente.</li>
							<li>En caso de que el Aval alquile residencia, debe presentar copia del Contrato de Arrendamiento.</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<a name="req_hipot"></a>
		<section id="productos">
			<div id="respo">
				<div id="titu_hipo">
					Para los Hipotecarios
				</div>
				<div id="info_niveles">
				<ul>
					
					<li>Tarjeta de Identidad y R.T.N del propietario del bien inmueble.</li>
					<li>Escritura Pública del propietario del bien inmueble.</li>
					<li>Certificación de Libertad de Gravamen del bien inmueble.</li>
					<li>Informe de Avaluó del Bien Inmueble con fotografías (realizado por Perito reconocido por la Comisión
					Nacional de Banca y Seguros (CNBS)).</li>
					<li>Una vez que se le haya aprobado el crédito hipotecario, presentará el bien inmueble e inscribirá la
					hipoteca a favor de EDUCREDITO en la oficina del Instituto de la Propiedad (IP) donde este localizado el
					bien inmueble.</li>
					<li>Aprobado el crédito hipotecario, debe de adquirir un Seguro contra Daños para el bien inmueble en la
					Aseguradora de su elección mientras esté vigente el crédito educativo (presentar copia de la Poliza).</li>
				</ul>	
			</div>
			<div id="titu_hipo">
				Tasa de Interés
			</div>
			<div id="info_niveles">
				<ul>
					<li>Tasa de interés en Periodo de Estudios: 12% anual sobre los desembolsos otorgados.</li>
					<li>Tasa de interés en Periodo de Amortización: 12% anual.</li>
					<li>Nota: El prestatario está en la obligación de pagar los intereses generados sobre los desembolsos
					otorgados durante el periodo de desembolso, finalizado este periodo, iniciara a pagar el plan de
					amortización sobre el monto de capital que tenga a la fecha de finalizado el periodo de gracia (solo si
					cuenta con periodo de gracia).</li>
				</ul>
			</div>
			<div id="titu_hipo">
				Pagos a Realizar
			</div>
			<div id="info_niveles">
				<ul>
					<li>Pago por Derecho de Trámite y revision central de riesgos.</li>
					
				</ul>
			</div>
			</br>		
		</section>
		<section id="cont_inter2">
			<div id="info_inter2">
				<div id="contenido_inter2">
					<div id="titu_4">
						Garantias de los Créditos
					</div>
					<p>Los créditos educativos se garantizarán de la forma siguiente:</p>
					<table class="table-fill">
						<thead>
							<tr>
								<th class="text-left">Monto</th>
								<th class="text-left">Requisitos</th>
							</tr>
						</thead>
						<tbody class="table-hover">
							<tr>
								<td class="text-monto">L.15,000.00 a L.100, 000.00</td>
								<td class="text-left">1 Aval o Prenda Hipotecaria</td>
							</tr>
							<tr>
								<td class="text-monto">L.100, 001.00 a L.500, 000.00</td>
								<td class="text-left">2 Avales o Prenda Hipotecaria</td>
							</tr>
							<tr>
								<td class="text-monto">L.500, 001.00 a L.1, 000,000.00</td>
								<td class="text-left">Prenda Hipotecaria</td>
							</tr>
						</tbody>
					</table>
					<div id="respo">
						<div id="titu_desc">
							Descarga tu documentación
						</div>
						<div id="info_niveles">
							<ul>
								<li>
							    	<a href="../documents/FORMULARIO SOLICITUD DE CREDITO FAE 2024.pdf" title="" target="_blank">Solicitud de crédito FAE (Descargar) </a>
							    </li>
							    <li>
							    	<a href="../documents/FORMULARIO SOLICITUD DE CREDITO FONDOS PROPIOS 2024.pdf" title="" target="_blank">Solicitud de crédito Fondos Propios (Descargar) </a>
							    </li>
								<li>
									<a href="../documents/Folleto Brochure PRESTAMOS EDUCATIVOS.pdf" title="" target="_blank">Brochure Informativo (Descargar)</a>
								</li>
								<li>
							    	<a href="../documents/AUTORIZACION IRREVOCABLE PRESTATARIO.pdf" title="" target="_blank">Autorización Irrevocable Prestatario(a) (Descargar) </a>
							    </li>
								<li>
									<a href="../documents/AUTORIZACION IRREVOCABLE AVAL 2024.pdf" title="" target="_blank">Autorización Irrevocable Aval (Descargar)</a>
								</li>
								<li>
									<a href="../documents/AUTORIZACION DEDUCCION DE INTERESES PERIODO DESEMBOLSO 2019.pdf" title="" target="_blank">Autorización Deducción de Intereses (Descargar)</a>
								</li>
								<li>
									<a href="../documents/AUTORIZACION VERIFICACION BURO DE CREDITO (CENTRAL DE RIESGO).pdf" title="" target="_blank">Autorización Verificación en Buró de Crédito (Descargar)</a>
								</li>
								<li>
									<a href="../documents/Compromiso de pago 2024.pdf" title="" target="_blank">Compromiso de Pago (Descargar)</a>
								</li>								
							
								<li>
									<a href="../documents/FORMATO PLAN DE DESEMBOLSO 2019.pdf" title="" target="_blank">Formato Plan de Desembolsos (Descargar)</a>								    
								</ul>	
						</div>
					</div>
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
					    <li><a href="#" title="">Requisitos</a></li>
					    <li><a href="faqs.php" title="">Faqs</a></li>
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