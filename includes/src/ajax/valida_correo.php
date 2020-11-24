<?php 
include("../cnf.php");

$redirige='';
$select= mysqli_query($con, "SELECT * FROM clientes WHERE correo = '".$_GET['correo']."' AND (jugo='0') OR (jugo IS NULL) ");
$ro = mysqli_fetch_array($select);

if (empty($ro['correo'])) {
	$validado='<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>¡Error!</strong> Tu correo ya se encuentra registrado.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}else{

     $insrt = mysqli_query($con, "INSERT INTO accesos (nombre,correo,ip,puerto,fecha) VALUES('".$ro['nombre']."','".$_GET['correo']."','".$ip."','".$puerto."','".$fecha."')");

    $usuario_sess = $ro['nombre'];
    session_start();
    $_SESSION['Buenfin'] = $usuario_sess;
    $sesion_user= $_SESSION["Buenfin"];

     $correo_sess = $_GET['correo'];
    $_SESSION['CORREO'] = $correo_sess;
    $sesion_correo= $_SESSION["CORREO"];
$validado="";
	/*$validado='<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>¡Válido!</strong> Correo vlidado con éxito, Diviértete '.$ro['nombre'].'.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';*/
$redirige = '<script> setTimeout(window.location = "spin.php", 5000);</script>';
}
//echo"<script>alert('".$sesion_user."');</script>"
print_r($validado." ".$redirige);
?>