<?php
include("../../cnf.php");

$selec= mysqli_query($con, "SELECT count(*) as total FROM clientes WHERE jugo = '0' AND ip <> ''");
$re = mysqli_fetch_array($selec);
echo"<input type='hidden' id='no_reg' value='".$re['total']."'>";

$registradas = mysqli_query($con, "SELECT count(*) as conteo1 FROM clientes WHERE jugo = '1'");
$regsi = mysqli_fetch_array($registradas);
echo"<input type='hidden' id='si_reg' value='".$regsi['conteo1']."'>";


$cancelo = mysqli_query($con, "SELECT count(*) as conteo2 FROM clientes WHERE cancel = 'cancelo'");
$can = mysqli_fetch_array($cancelo);
echo"<input type='hidden' id='cancelo' value='".$can['conteo2']."'>";

$tienda = mysqli_query($con, "SELECT count(*) as conteo3 FROM clientes WHERE  jugo = '1'  and ((cancel <>'cancelo') OR (cancel is NULL))");
$tien = mysqli_fetch_array($tienda);
echo"<input type='hidden' id='tienda' value='".$tien['conteo3']."'>";

?>

<center><canvas id="oilChart" ></canvas></center>


<script>
var oilCanvas = document.getElementById("oilChart");

var no_reg = $('#no_reg').val();
var si_reg = $('#si_reg').val();
var cancelo = $('#cancelo').val();
var tienda = $('#tienda').val();


Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 16;

var oilData = {
    labels: [
        "Personas Registradas sin jugar",
        "Personas Registradas que jugaron",
        "Personas que no fueron a tienda",
        "Personas que fueron a tienda",
    ],
    datasets: [
        {
            data: [no_reg, si_reg, cancelo, tienda],
            backgroundColor: [
                "#D087F7",
                "#F7EF87",
                "#FF5733",
                "#87F7B5"
            ]
        }]
};

var pieChart = new Chart(oilCanvas, {
  type: 'pie',
  data: oilData
});
</script>


	<style type="text/css">
		
		#grafica1{
			margin-left: -42px;
		}

	</style>