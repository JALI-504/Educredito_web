<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Becas 2020 | Login</title>
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link href="css/jquery-confirm.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="ingresar.php" method="post" accept-charset="utf-8">
              
              <h1>Iniciar Sesion</h1>
              <div>
                <input type="text" class="form-control" name="usuario" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="passw" placeholder="Password" required="" />
              </div>
              <div>
                <input lass="btn btn-default submit" type="submit" name="" value="Iniciar">
                
                <a class="reset_pass" href="#">Perdio su password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Es usuario nuevo?
                  <a href="#" class="to_register"> Crear Cuenta </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-strikethrough"></i> Sibecs</h1>
                  <p>©2018 All Rights Reserved. Educredito departamento de desarrollo. Terminos y Privacidad</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    <script src="js/jquery-confirm.js"></script>
  </body>
</html>
<?php
  error_reporting(E_ALL ^ E_NOTICE);
  $launch =$_GET['parameter'];
  if ($launch==1)
  {
    ?>
      <script>
        $.alert({
          title: 'Sibecs',
          content: 'Usuario o contraseña incorrectos o no esta registrado',
      });
      </script>
      <?php
  }
?>
