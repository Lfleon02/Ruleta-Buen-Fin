<?php 
require 'includes/src/cnf.php';

//echo$envia = $PromosBzr->envio_correo('lleon@bzr.com.mx', 'Prueba', 'Mensaje');
//echo !extension_loaded('openssl')?"Not Available":"Available";




$smarty->assign("Title", "Gana en");
$smarty->assign("Name", "Bizzarro");
$smarty->display("index.tpl");
?>