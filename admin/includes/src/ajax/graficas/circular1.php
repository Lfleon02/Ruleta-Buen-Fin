<?php
include("../../cnf.php");

$cuatro= mysqli_query($con, "SELECT count(*) as total FROM clientes WHERE valor_cupon = '400'");
$re = mysqli_fetch_array($cuatro);
echo"<input type='hidden' id='cuatro' value='".$re['total']."'>";

$siete = mysqli_query($con, "SELECT count(*) as conteo FROM clientes WHERE valor_cupon = '700'");
$re1 = mysqli_fetch_array($siete);
echo"<input type='hidden' id='siete' value='".$re1['conteo']."'>";

$mil = mysqli_query($con, "SELECT count(*) as conteo1 FROM clientes WHERE valor_cupon = '1000'");
$re2 = mysqli_fetch_array($mil);
echo"<input type='hidden' id='mil' value='".$re2['conteo1']."'>";

?>

<center><canvas id="oilChart1" ></canvas></center>


<script>
var oilCanvas = document.getElementById("oilChart1");

var cuatro = $('#cuatro').val();
var siete = $('#siete').val();
var mil = $('#mil').val();


Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 16;

var oilData1 = {
    labels: [
        "Ganaron  $400",
        "Ganaron  $700",
        "Ganaron  $1000",
    ],
    datasets: [
        {
            data: [cuatro, siete, mil],
            backgroundColor: [
                "#3BAB06",
                "#F5F903",
                "#E33708"
            ]
        }]
};

var pieChart = new Chart(oilCanvas, {
  type: 'pie',
  data: oilData1
});
</script>


	<style type="text/css">
		
		#grafica1{
			margin-left: -42px;
		}

	</style>