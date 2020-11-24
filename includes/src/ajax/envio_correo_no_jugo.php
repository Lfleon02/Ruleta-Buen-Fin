<?php 
include("../cnf.php");
$o=0;
$select = mysqli_query($con,"SELECT * FROM clientes WHERE ip <> '' AND jugo ='0' AND correo ='lleon@bzr.com.mx'");

while ($row = mysqli_fetch_array($select)) {
	$o++;
	$nombre = $row['nombre']." ".$row['apellido'];
	$template='ee2495cf-75e5-39cb-af6d-6271611e4048';
	$lol = $PromosBzr->envio_correo_nojugo($row['correo'],$nombre,$template);

	$act = mysqli_query($con,"UPDATE clientes SET envio_correo_jugo='1' WHERE id = ".$row['id']."");

}

echo"<br>Enviado a ".$o." personas.<br>Estatus del correo: ".$lol;
?>