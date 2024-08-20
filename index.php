<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUCREDITO</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(16, 100, 179);">
        <a class="navbar-brand" href="#">EDUCREDITO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto d-lg-none">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/financiamiento.html">Financiamiento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Comites</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ's</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contactanos</a>
                </li>
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
                    </form>
                </li>
            </ul>
        </div>
        <div class="d-none d-lg-flex">
            <skew-nav bgcolor="rgb(16, 100, 179)" textcolor="white" align="center">
                <skew-link url="#" textcolor="white" hovercolor="rgb(7, 88, 194)"
                    skewcolor="rgb(69, 172, 219)">Inicio</skew-link>
                <skew-link url="#" textcolor="white" hovercolor="rgb(7, 88, 194)"
                    skewcolor="rgb(69, 172, 219)">Nosotros</skew-link>
                <skew-link url="pages/financiamiento.html" textcolor="white" hovercolor="rgb(7, 88, 194)"
                    skewcolor="rgb(69, 172, 219)">Financiamiento</skew-link>
                <skew-link url="#" textcolor="white" hovercolor="rgb(7, 88, 194)"
                    skewcolor="rgb(69, 172, 219)">Comites</skew-link>
                <skew-link url="#" textcolor="white" hovercolor="rgb(7, 88, 194)"
                    skewcolor="rgb(69, 172, 219)">FAQ´s</skew-link>
                <skew-link url="#" textcolor="white" hovercolor="rgb(7, 88, 194)"
                    skewcolor="rgb(69, 172, 219)">Contactanos</skew-link>
                <skew-link url="#" textcolor="white" hovercolor="rgb(7, 88, 194)" skewcolor="rgb(69, 172, 219)">
                    <input type="text" placeholder="Buscar...">
                </skew-link>
            </skew-nav>
        </div>
    </nav>
    <!-- Fin Navbar -->

    <div class="container-fluid content-wrapper">
        <div class="row align-items-center text-center mt-3">
            <div class="col-md-6 text-white d-flex flex-column justify-content-center align-items-center text-center">
                <div class="text-center">
                    <h1 class="text-bordered">FINANCIAMOS TU<br>EDUCACIÓN UNIVERSITARIA</h1>
                    <h4 class="text-bordered">Tenemos las soluciones que los estudiantes necesitan para <br>no abandonar
                        sus estudios y metas profesionales.</h4>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <img src="images/logo_educ.png" class="img-fluid ml-auto" alt="Financiamiento">
            </div>
        </div>
    </div>

    <!-- Carrusel -->
    <div class="container mt-4">
        <div id="carouselExampleIndicators" class="carousel slide custom-carousel" data-ride="carousel">
            <ol class="carousel-indicators custom-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/your-image1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/your-image2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/your-image3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- Fin del Carrusel -->

    <!-- Sección uno -->
    <section id="cont_med" class="container mt-5">
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title" id="titu_2">Instituto de Crédito Educativo</h4>
                    <p class="card-text">La Presidenta Iris Xiomara Castro Sarmiento y EDUCRÉDITO se preocupan por tus
                        estudios y capacitación, a través del Crédito Educativo, cubrimos total o parcialmente los
                        costos académicos de diversos programas en los niveles de:</p>
                    <ul class="custom-list">
                        <li>Capacitación Técnica</li>
                        <li>Estudios de Pre - Grado, Post - Grado y Doctorados</li>
                        <li>Diplomados y Giras de Estudio</li>
                        <li>Otros de similar naturaleza</li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title" id="titu_2">Nuestro Objetivo y Meta</h4>
                    <p class="card-text">Es ofrecer financiamiento educativo a quienes buscan recursos para continuar su
                        educación en Honduras o en el extranjero. Con nuestro financiamiento educativo puedes pagar
                        desde matriculas, transportes, materiales, útiles y gastos de graduación hasta una carrera
                        universitaria en el extranjero.</p>
                    <p class="card-text">Conoce más sobre el financiamiento que se adapta a tus necesidades</p>
                    <div id="btn_conoce">
                        <a href="pages/financiamiento.php" class="btn btn-primary">Conoce más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la seccion uno -->

    <!-- Sección dos -->
    <section id="cont_med" class="container mt-5">
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <h3>EDUCREDITO</h3>
                    <p>Nuestra finalidad es proporcionar financiamiento a las personas hondureñas que desean realizar
                        estudios dentro o fuera del territorio nacional.</p>
                    <a class="jms-link" href="pages/nosotros.php">Leer Más</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la seccion dos -->

    <!-- Sección tres -->
    <section id="cont_med" class="container mt-5">
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <h4>
                        Beneficios de nuestros créditos educativos
                    </h4>
                    <p>Esta forma de financiamiento ofrece ventajas como la posibilidad de pagar hasta por muchos años
                        la educación, mensualidades ajustables a la capacidad económica y facilidades para liquidar los
                        saldos pendientes.</p>
                    <div id="test" class="d-flex align-items-center">
                        <img src="images/agrad.png" alt="" class="mr-3">
                        <div id="grax" class="font-italic">
                            Los créditos son sustentables gracias a que, cada alumno que liquida su préstamo permite que
                            otro estudiante pueda acceder al financiamiento.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la seccion tres -->

    <!-- Seccion cuatro -->

    <section id="cont_med" class="container mt-5">
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <h4>
                        Tipos de creditos a los que puedes acceder
                    </h4>
                    <p id="parrafo">Estos créditos son a corto plazo, el cual se entrega en solo desembolso, destinado a
                        contribuir en la formación y capacitación profesional de hondureños, financiando la realización
                        de estudios dentro y fuera del territorio.</p>
                    <div id="info_produc">
                        <div id="cont_fidu">
                            <div id="titu_prod">
                                Fiduciario
                            </div>
                            <div id="fidu">
                                <p>Es el que se otorga con uno o más fiadores y se comprometen ante EDUCRÉDITO a cumplir
                                    determinada obligación, en garantía de una obligación ajena si esta no es cumplida
                                    por el prestatario deudor principal.</p>
                            </div>
                            <br>
                            <div class="text-center">
                                <button href="pages/requisitos.php#req_fid" class="btn btn-outline-success">Ver Requisitos</button>
                            </div>
                            
                        </div>
                        <div id="cont_hipo">
                            <div id="titu_prod">
                                Hipotecario
                            </div>
                            <div id="hipo">
                                <p>Hipotecario es un crédito garantizado por un bien inmueble o terreno.
                                    Si el prestatario no cumple con el contrato, la entidad prestamista, EDUCRÉDITO, puede vender el 
                                    bien hipotecado para recuperar el monto del crédito.
                                </p>
                            </div>
                            <br>
                            <div class="text-center">
                                <button href="pages/requisitos.php#req_hipot" class="btn btn-outline-success">Ver Requisitos</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

     <!-- Fin de la seccion cuatro -->

       <!-- Sección cinco -->
       <section id="cont_med" class="container mt-5">
        <div class="card-deck">
            <div class="card section-card">
                <div class="card-body">
                    <div id="info_inter2">
                        <div id="contenido_inter2">
                            <h4>
                                Modalidad de los créditos
                            </h4>
                            <p class="bold-paragraph">Los créditos educativos otorgados por EDUCREDITO tendrán como finalidad financiar estudios del prestatario en los siguientes rubros.</p>
                            <div id="info_niveles" class="row">
                                <div id="col1" class="col-md-6">
                                    <ul class="custom-list">
                                        <li>Matrícula o colegiatura</li>
                                        <li>Sostenimiento mensual</li>
                                        <li>Libros, material y equipo de estudio</li>
                                        <li>Gastos de grado y tesis</li>
                                        <li>Seguro de salud</li>
                                        <li>Transporte</li>
                                        <li>Giras de estudio</li>
                                    </ul>
                                </div>
                                <div id="col2" class="col-md-6">
                                    <ul class="custom-list">
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
                </div>
            </div>
        </div>
    </section>
    
    <!-- Fin de la seccion cinco -->

    <!-- seccion 6 -->

     <!-- seccion 6 -->
     <section id="info_footer" class="container-fluid bg-dark text-white mt-5 py-4">
        <div id="con_footer" class="row">
            <div id="col1_footer" class="col-md-4">
                <h5><img src="../images/phone-call.png" alt=""> Teléfono</h5>
                <a href="tel:+504-2239-4300" target="_top">+504-2239-4300/0439/5844</a>
                <h5><img src="../images/phone-call.png" alt=""> Teléfono</h5>
                <a href="tel:+504-2239-8648" target="_top">+504-2239-8648/4299/4311</a>
                <h5><img src="../images/placeholder.png" alt=""> Ubicación</h5>
                <a href="https://www.google.hn/maps/place/EDUCREDITO/@14.0865673,-87.1824749,17z/data=!3m1!4b1!4m5!3m4!1s0x8f6fa32af7e729b9:0x70f0e233535c310e!8m2!3d14.0865673!4d-87.1802862"
                    title="" target="_blank">
                    Colonia Florencia Norte
                    <br>
                    Contiguo al Colegio de Ingenieros Civiles de Honduras
                    <br>
                    Tegucigalpa, Honduras.
                </a>
            </div>
            <div id="col2_footer" class="col-md-4">
                <h5><img src="../images/mail.png" alt=""> E·mail</h5>
                <a href="mailto:info@educredito.gob.hn" target="_top">info@educredito.gob.hn</a>
                <h5><img src="../images/face.png" alt=""> Facebook</h5>
                <a href="https://www.facebook.com/profile.php?id=100087402691701" target="_blank">fb.com/educreditohn</a>
                <h5><img src="../images/brochure-folded.png" alt=""> Información</h5>

                <form  action="https://formspree.io/f/xkgwzpkg" method="POST" accept-charset="utf-8">
                <input type="hidden" name="parameter" value="100">
                    <input type="email" name="email" placeholder="Ingresa tu Email" required="">
                    <div>
                        <label>
                            Tu Mensaje
                          </label>
                    </div>
                    <div>
                        <textarea name="message" placeholder="Ingresa tu mensaje"></textarea>
                    </div>
                    <div id="boton_enviar" class="mt-2">
                        <input type="submit" value="Enviar" class="btn btn-success">
                    </div>
                </form>           

                <div>
                    <form action="pages/enviar_info.php" method="post" accept-charset="utf-8">
						<input type="hidden" name="parameter" value="100">
						<input type="email" name="mail" value="" placeholder="Tu email para enviarte la información" required="">
						<div id="boton_enviar">
							<input type="submit" name="" value="Enviar">
						</div>
					</form>
                </div>

            </div>
            <div id="col3_footer" class="col-md-4">
                <h5>Nuestro Compromiso</h5>
                <p>Fomentamos la educación con financiamiento educativo para miles de jóvenes que quieren estudiar en Honduras y en el extranjero.</p>
                <p>Queremos que todos puedan acceder a la educación nacional e internacional con la que siempre han soñado.</p>
                <h5>Más sobre Educredito</h5>
                <ul class="custom-list two-columns">
                    <li><a href="#" class="text-white">Inicio</a></li>
                    <li><a href="pages/nosotros.php" class="text-white">Nosotros</a></li>
                    <li><a href="pages/financiamiento.php" class="text-white">Financiamiento</a></li>
                    <li><a href="pages/requisitos.php" class="text-white">Requisitos</a></li>
                    <li><a href="#" class="text-white">Convenios</a></li>
                    <li><a href="pages/contactenos.php" class="text-white">Contacto</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- fin seccion 6 -->

    <hr class="custom-hr">
    <!-- Footer -->
    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            <div id="cont_footer">
                <div id="copy">© Educredito 2024. Todos los derechos reservados.</div>
                <div id="aviso">
                    <a href="#" class="text-white">Aviso de privacidad</a>&nbsp;&nbsp;&nbsp;<a href="#" class="text-white">Atención a Usuarios</a>
                </div>
                <div id="desing">Design by TIC´S Educredito.</div>
            </div>
        </div>
    </footer>
    
    <!-- Fin Footer -->

    <script src="js/script.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>