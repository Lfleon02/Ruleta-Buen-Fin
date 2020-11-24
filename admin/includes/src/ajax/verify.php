<?php
include("../cnf.php");

 
if ($_GET['user'] == "" || empty($_GET['user']) || $_GET['pass'] == "" || empty($_GET['pass'])) {
	echo$mensaje = '<div class="alert alert-danger"><strong>Error!</strong> "Favor de no dejar ning&uacute;n campo vacio"</div>';
}else{

$selec = mysqli_query($con, "SELECT * FROM usuarios WHERE usuario = '".$_GET['user']."' AND pass = '".$_GET['pass']."' ");
$ro = mysqli_fetch_array($selec);

if (empty($ro['correo'])) {
	echo$mensaje = '<div class="alert alert-danger"><strong>Error!</strong> "Usuario o contraseña incorrectos"</div>';
	$insrt = mysqli_query($con, "INSERT INTO ingreso_admin (usuario,fecha,ip,descripcion) VALUES ('".$_GET['user']."|".$_GET['pass']."','".$fecha."','".$ip."','datos ingresados incorrectos user=".$_GET['user']." | pass=".$_GET['pass']."')");
}else{

	  $usuario_sess = $_GET['user'];
	  session_start();
	  $_SESSION['AdminUser'] = $usuario_sess;
	  $sesion_user= $_SESSION["AdminUser"];
	  echo$mensaje = '<div class="alert alert-success"><strong>Bienvenido! '.$_GET['user'].'</strong></div>';
	  $insrt = mysqli_query($con, "INSERT INTO ingreso_admin (usuario,fecha,ip,descripcion) VALUES ('".$sesion_user."','".$fecha."','".$ip."','ingreso correcto')");
	  echo'<script>window.location.replace("inicio.php");</script>';
}


}




?>
