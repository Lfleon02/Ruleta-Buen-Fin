<?php 
include("../cnf.php");

$template='';

$insert = mysqli_query($con, "UPDATE clientes SET jugo = '1', cupon='".$_GET['cupon']."', valor_cupon = '".$_GET['valorcupon']."' WHERE correo = '".$_GET['correo']."'");

$mensaje = '

Hola '.$_GET['usuario'].', gracias por haber jugado a la ruleta, has recibido un cup&oacute;n con el valor de $'.$_GET['valorcupon'].' <br>Tu cup&oacute;n: <br><strong>'.$_GET['cupon'].'</strong>).
<br><br>
Gracias por su preferencia.

';

switch ($_GET['valorcupon']) {
	case '1000':
		$template="01ebe807-71c2-3df7-a99e-a59108850ec9";
		break;
	case '700':
		$template="51481466-5038-3096-870c-56603ca4ea5e";
		break;
	case '400':
		$template="500b1085-0aea-3700-9e76-52894185cbaf";
		break;		
}


$envia = $PromosBzr->envio_correo($_GET['correo'],$_GET['usuario'],$_GET['valorcupon'],$template);

print_r($envia);

session_start();
session_destroy();
?>