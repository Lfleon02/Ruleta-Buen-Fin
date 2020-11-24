<?php
session_start();
if(!$_SESSION['AdminUser']==''){


include("../cnf.php");
$output = '';
$o=0;
setlocale(LC_TIME, "spanish");


if(isset($_POST["query"]))
{
	$search = mysqli_escape_string($con, $_POST["query"]);
	$query1 = "
	SELECT * FROM clientes WHERE nombre LIKE '%".$search."%' 
	OR (apellido LIKE '%".$search."%')
	OR (correo LIKE '%".$search."%' )
	OR (telefono LIKE '%".$search."%' )
	OR (so LIKE '%".$search."%')
	OR (valor_cupon LIKE '%".$search."%')
	OR (dispositivo LIKE '%".$search."%')
	ORDER BY fecha DESC 
	";
}
else
{
	$query1 = "SELECT * FROM clientes ORDER BY fecha DESC ";
}



$result = mysqli_query($con, $query1);

if(mysqli_num_rows($result) > 0)
{


	$output .= '<div class="table-responsive">
					<table class="table" id="todos">
					<thead class="thead-dark">
						<tr>
						<th>No.</th>
							<th>Nombre</th>
							<th>Correo</th>
							<th>Teléfono</th>
							<th>Dispositivo:</th>
							<th>Tipo</th>
							<th>Giró ruleta</th>
							<th>Cupón</th>
							<th>Valor</th>
							<th>Acción</th>
							<th>Fecha</th>
						</tr>
						</thead>';
	while($row = mysqli_fetch_array($result))
	{

if ($row['jugo']=='1') {$giroruleta = 'Si';}else{$giroruleta='No';}
if ($row['cancel']=='cancelo') {$accion = 'Clic en botón enviar';}else{$accion='Clic en botón ir  tienda';}
if ($row['cupon']=='0' || $row['cupon']=='') {$accion = 'No ha jugado';}

		$o++;
		$output .= '
			<tr id="coloor">
				<td>'.$o.'</td>
				<td>'.htmlentities($row['nombre']).' '.htmlentities($row['apellido']).'</td>
				<td>'.$row['correo'].'</td>
				<td>'.$row['telefono'].'</td>
				<td>'.$row['dispositivo'].'</td>
				<td>'.$row['so'].'</td>
				<td>'.$giroruleta.'</td>
				<td>'.$row['cupon'].'</td>
				<td>'.$row['valor_cupon'].'</td>
				<td>'.$accion.'</td>
				<td>'.$row['fecha'].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}

?>

<button onclick="ExportToExcel(jQuery('#todos').prop('outerHTML'))">Exportar</button>


<script type="text/javascript">
	  function ExportToExcel(htmlExport) {
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");
    
    //other browser not tested on IE 11
    // If Internet Explorer
    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))
    {
        jQuery('body').append(" <iframe id=\"iframeExport\" style=\"display:none\"></iframe>");
        iframeExport.document.open("txt/html", "replace");
        iframeExport.document.write(htmlExport);
        iframeExport.document.close();
        iframeExport.focus();
        sa = iframeExport.document.execCommand("SaveAs", true, "pedidos.xls");
    }
    else {      
        var link = document.createElement('a');
    
        document.body.appendChild(link); // Firefox requires the link to be in the body
        link.download = "List.xls";
        link.href = 'data:application/vnd.ms-excel,' + escape(htmlExport);
        link.click();
        document.body.removeChild(link);
    }
}	


  function ejecuta(pedido)
  {

 var parametros = {"pedido" : pedido};
        $.ajax({
                data:  parametros,
                url:   'includes/php/ajax/actualiz.php',
                type:  'post',
                beforeSend: function () {
                        $("#"+pedido).html("<center><p><br><img src='https://www.buenhotel.com/i/3puntos.png' style='width:25px;'></p></center>");
                           },
                success:  function (response) {
                        $("#"+pedido).html(response);
                }
        });



  }


  function ver_comment(pedido_usr, pedido_bke){


$('#pedido').html(pedido_usr);

 $.ajax({
                  type: "POST",
                  url: 'includes/php/ajax/vercomentario.php?pedido_user='+pedido_usr+'&pedido_bkend='+pedido_bke,
                  data: $(this).serialize(),
                  beforeSend: function() {
                  
                   $("#comentarios").html('<center><p><br>Notificando<img src="https://www.buenhotel.com/i/3puntos.png" style="width:70px;"></p></center>');
                  },
                  success: function(response)
                  {
                     $("#comentarios").html(response);
                  }

               });


  }



</script>
<div id="act"></div>


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Comentarios en pedido: <strong><label id="pedido"></label></strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <div class="modal-body">

       	<P id='comentarios'></P>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <!--<button type="button" class="btn btn-primary">guardar</button>-->
      </div>
    </div>
  </div>
</div>

<?php	

}else{
	echo '<div style="background-color:red; color:#ffffff; font-size:18px;"><center><strong>No tiene permiso para acceder a este m&oacute;dulo</strong> <br> <a href="../../../index.php" style="color:#ffffff;"> Regresar</a></center></div>';
}


 
?>


<style>

.table td, .table th {
    padding: 0.25rem;
    vertical-align: middle;
    border-top: 1px solid #dee2e6;
    text-align:center;
    font-size:15px;
}   
    
    
</style>