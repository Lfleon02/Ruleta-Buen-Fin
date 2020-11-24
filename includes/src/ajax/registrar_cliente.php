<?php 
include("../cnf.php");

$redirige="";
$select= mysqli_query($con, "SELECT * FROM clientes WHERE correo = '".$_GET['correo']."'");
$ro = mysqli_fetch_array($select);

if (empty($ro['correo'])) {

//echo"INSERT INTO clientes (nombre,apellido,correo,telefono,nuevo,ip,so,dispositivo,jugo,cupon,fecha) VALUES('".$_GET['nombre']."','".$_GET['apellidos']."','".$_GET['correo']."','".$_GET['telefono']."','1','".$ip."','".$so."','".$dispositivo."','0','0', '".$fecha."')<br>";


  $insrt = mysqli_query($con, "INSERT INTO clientes (nombre,apellido,correo,telefono,nuevo,ip,so,dispositivo,jugo,cupon,fecha) VALUES('".$_GET['nombre']."','".$_GET['apellidos']."','".$_GET['correo']."','".$_GET['telefono']."','1','".$ip."','".$so."','".$dispositivo."','0','0', '".$fecha."')");


//echo"INSERT INTO accesos (nombre,correo,ip,puerto,fecha) VALUES('".$_GET['nombre']."','".$_GET['correo']."','".$ip."','".$puerto."','".$fecha."')<br>";


  $insrt = mysqli_query($con, "INSERT INTO accesos (nombre,correo,ip,puerto,fecha) VALUES('".$_GET['nombre']."','".$_GET['correo']."','".$ip."','".$puerto."','".$fecha."')");

    $usuario_sess = $_GET['nombre'];
    session_start();
    $_SESSION['Buenfin'] = $usuario_sess;
    $sesion_user= $_SESSION["Buenfin"];

    $correo_sess = $_GET['correo'];
    $_SESSION['CORREO'] = $correo_sess;
    $sesion_correo= $_SESSION["CORREO"];

//echo$_SESSION["Buenfin"]." ".$_SESSION["CORREO"];
//exit();
	/*$validado='<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>¡Registrado!</strong> Registro exitoso.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  Redirigiendo...
</div>';*/
$redirige = '<script> setTimeout(window.location = "spin.php", 000);</script>';
$validado='';
}else{
	$validado='<div class="alert alert-warning alert-dismissible fade show col-sm-8" role="alert">
  <strong></strong>Tu correo ya se encuentra registrado.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}

print_r($validado." ".$redirige);
?>