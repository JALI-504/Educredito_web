<?php
error_reporting(E_ALL ^ E_NOTICE);
@session_start();
if($_SESSION['autentica'] != 'PERMISO'){
	?>
		<script>
			top.location.href="login.html"
		</script>
	<?php
	//header('Location:login.php');
	exit();
}
?>
