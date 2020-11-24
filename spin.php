<?php
session_start();
if(!$_SESSION["Buenfin"]==''){
require 'includes/src/cnf.php';

$user = $_SESSION["Buenfin"];
$corr = $_SESSION["CORREO"];
$permiso = $PromosBzr->permiso($corr,$user);


if ($permiso=='si') {

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

$cupon = substr(str_shuffle($permitted_chars), 0, 8);

$smarty->assign("cupon", $cupon);
$smarty->assign("user", $user);
$smarty->assign("corr", $corr);
$smarty->assign("Title", "Gira en");
$smarty->assign("Name", "Bizzarro.");
$smarty->display("spin.tpl");
}else{

echo"<strong>NO TIENE MAS TIROS</strong>";
echo '<script> window.location = "index.php";</script>';
}



}else{
	echo '<script> window.location = "index.php";</script>';
}	

?>