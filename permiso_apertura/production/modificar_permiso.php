<?php 
  include('conexion.php');
  include('seguridad.php');

  $result_id=$_GET['idbeca'];

  mysqli_set_charset($con,'utf8');
  $sql_centr="SELECT id_permiso ID, identidad IDENT, nombre NOMBR, telefono TEL, ciudad CIUD, link LINK FROM permiso WHERE id_permiso = $result_id";
  $stdi_centr=mysqli_query ($con, $sql_centr);
  $row_centr=mysqli_fetch_array($stdi_centr);
  $id_permiso=$row_centr['ID'];
  $identidad=$row_centr['IDENT'];
  $nombre=$row_centr['NOMBR'];
  $telefono=$row_centr['TEL'];
  $ciudad=$row_centr['CIUD'];
  $link=$row_centr['LINK'];

  $usuario_act=$_SESSION['usuarioactual'];
  $sql_user="SELECT id_usuario ID, pnombre USER, papellido APELL FROM usuarios WHERE usuario='$usuario_act'";
  $stdi_user=mysqli_query($con, $sql_user);
  $row_user=mysqli_fetch_array($stdi_user);
  $user_id=$row_user['ID'];
  $result_user=$row_user['USER'];
  $result_apell=$row_user['APELL'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/faviconp.ico" type="image/ico" />
    <title>Becas 2020 | Permiso</title>
     <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="css/jquery-confirm.css" rel="stylesheet">
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <script src="js/config_validacion.js"></script>
    <script src="js/validar_field_num.js"></script>
    <script src="js/validar_field_char.js"></script>

    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-clipboard"></i> <span>Apert. Cuentas</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/userp.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2><?php echo "$result_user"; ?> <?php echo "$result_apell"; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="salir.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/userp.png" alt=""><?php echo "$result_user"; ?> <?php echo "$result_apell"; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                    <li><a href="salir.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Modificar Apertura de Cuenta <small> Fichosa</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>
      
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listado de becarios administrativas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Listado de becarios para la impresión de solicitud de apertura de cuenta sin LIBRETA en el banco FICOHSA.
                    </p>
					
                    
                    <form action="update_permiso.php" method="post" class="form-horizontal form-label-left" novalidate>
                      <input type="hidden" name="user_id" value="<?php echo "$user_id"; ?>">
                      <input type="hidden" name="result_id" value="<?php echo "$result_id"; ?>">
                      <p>Asegurese de ingresar correctamente la <code> Identidad y Nombre </code>del solicitante para apertura de la cuenta.</p>

                      <span class="section">Datos Personales</span>

                      <div class="field form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="identi">Número de Identidad <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" data-validate-length-range="13,13" id="identidad" name="identidad" required="required" class="form-control col-md-7 col-xs-12" pattern="alphanumeric" value="<?php echo "$identidad"; ?>" onkeypress='return valida(event)'>
                        </div>
                        <div id="resultado"></div>
                      </div>

                      <div class="field form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pnombres">Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="pnombre" name="pnombre" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo "$nombre"; ?>" onkeypress='return val(event)'>
                        </div>
                      </div>

                      <div class="field form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono">Telefono </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel" class='tel form-control col-md-7 col-xs-12' name="telefono"  data-validate-length-range="8,8" value="<?php echo "$telefono"; ?>">
                        </div>
                      </div>

                      <div class="field form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pnombres">Departamento 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="pnombre" name="departamento" class="form-control col-md-7 col-xs-12" value="<?php echo "$ciudad"; ?>" onkeypress='return val(event)'>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" class="btn btn-success">Actualizar</button>
                          <a class="btn btn-primary" href="tables_dynamic.php" title="">Cancelar</a>
                        </div>
                      </div>
                    </form>
                  
					        </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery-1.9.1.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <!-- validator -->
    
    <script src="../vendors/validator-master/multifield.js"></script>
    <script src="../vendors/validator-master/validator.js"></script>


    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script>
    // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
    var validator = new FormValidator({"events" : ['blur', 'input', 'change']}, document.forms[0]);


        // on form "submit" event
    document.forms[0].onsubmit = function(e){
      var submit = true,
        validatorResult = validator.checkAll(this);

      console.log(validatorResult);
      return !!validatorResult.valid;
    };


        // on form "reset" event
        document.forms[0].onreset = function(e){
            validator.reset();
        };

        // stuff related ONLY for this demo page:
    $('.toggleValidationTooltips').change(function(){
      validator.settings.alerts = !this.checked;

      if( this.checked )
        $('form .alert').remove();
    }).prop('checked',false);
  </script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
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
          content: 'Error en la Actualizacion',
      });
      </script>
      <?php
  }
  if ($launch==2)
  {
    ?>
      <script>
        $.alert({
          title: 'Sibecs',
          content: 'Permiso actualizado correctamente',
      });
      </script>
      <?php
  }
?>
<?php 
  mysqli_close($con);
?>
<style>
  /* alerts (when validation fails) */
.field .alert{ float:left; margin:-2px 0 0 20px; padding:3px 10px; color:#FFF; border-radius:3px 4px 4px 3px; background-color:#CE5454; max-width:170px; white-space:pre; position:relative; left:-15px; opacity:0; z-index:1; transition:0.15s ease-out; }
.field .alert::after{ content:''; display:block; height:0; width:0; border-color:transparent #CE5454 transparent transparent; border-style:solid; border-width:11px 7px; position:absolute; left:-13px; top:1px; }
.field.bad .alert{ left:0; opacity:1; }
.bad input,
  .bad select,
  .bad textarea{ border:1px solid #CE5454; box-shadow:0 0 4px -2px #CE5454; position:relative; left:0; -moz-animation:.4s 1 shake ease; -webkit-animation:0.4s 1 shake ease; }

</style>