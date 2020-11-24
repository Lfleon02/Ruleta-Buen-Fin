<?php 
require 'includes/src/cnf.php';

$mensaje="";

if(isset($_POST['import_data'])){

$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$file_mimes)){
if(is_uploaded_file($_FILES['file']['tmp_name'])){
$csv_file = fopen($_FILES['file']['tmp_name'], 'r');



while(($rw = fgetcsv($csv_file)) !== FALSE){

$rw[0]; //nombre
$rw[1]; //apepat
$rw[2]; //email



 $o++;
 $sql_query = mysqli_query($con, "SELECT * FROM clientes WHERE correo = '".$rw[2]."'");
 $row = mysqli_fetch_array($sql_query);




if (empty($row['correo'])) {

	echo"INSERT INTO clientes (nombre,apellido,correo,telefono,nuevo,ip,so,dispositivo,jugo,cupon,valor_cupon,fecha,cancel) VALUES ('".$rw[0]."', '".$rw[1]."', '".$rw[2]."','','0','','','','0','','','".$fecha."','')<br><br>";
	
	$inserta = mysqli_query($con, "INSERT INTO clientes (nombre,apellido,correo,telefono,nuevo,ip,so,dispositivo,jugo,cupon,valor_cupon,fecha,cancel) VALUES ('".$rw[0]."', '".$rw[1]."', '".$rw[2]."','','0','','','','0','','','".$fecha."','')");
	echo"insertado ".$rw[0];

 }else{

 	echo "<br>".$rw[2]." Ya registrado anteriormente<br>";

 }


}
fclose($csv_file);
$import_status = '?import_status=success';
} else {
$import_status = '?import_status=error';
}
} else {
$import_status = '?import_status=invalid_file';
}


}

$smarty->assign("Title", "carga");
$smarty->assign("Name", "base");
$smarty->display("carga.tpl");
?>