<?php
session_start();
require 'includes/src/cnf.php';
$user = $_SESSION['AdminUser'];
$activo = $funciones->activo($user);

if ($activo =='valido') {

$smarty->assign("user", $user);	
$smarty->assign("Title", "Inicio");
$smarty->assign("Name", "Bizzarro");
$smarty->display("inicio.tpl");

}else{

	echo$mensaje = '<div class="alert alert-warning"><strongAviso!</strong> Su acceso se encuentra deshabilitado, favor contactar al <a href="mailto:lleon@bzr.com.mx">administrador</a></div>';

}



?>