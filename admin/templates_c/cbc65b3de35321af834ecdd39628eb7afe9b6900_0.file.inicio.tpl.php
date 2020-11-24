<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-10 09:22:34
  from '/home/sqygyv8xg2vi/public_html/admin/templates/inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5faab03a60e6a4_42073771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbc65b3de35321af834ecdd39628eb7afe9b6900' => 
    array (
      0 => '/home/sqygyv8xg2vi/public_html/admin/templates/inicio.tpl',
      1 => 1605021752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5faab03a60e6a4_42073771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<p>
<center><h2>Estadísticas de usuarios</h2></center>
</p>

<br>


<center><!--<center><button onclick="actualizar();">Actualizar información</button></center>--></center>


<div class="container-fluid">	 
				
				

					<div class="row" id="ocultauno">
					  <div class="col-3">
					    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Global</a>
					      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Cupones</a>
					      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"></a>
					      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"></a>
					    </div>
					  </div>
					  <div class="col-6">
					    <div class="tab-content" id="v-pills-tabContent">
					      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
					      	
					      	
								<div class="card">
								  <h5 class="card-header">Global</h5>
								  <div class="card-body">
								    <center><div id="circular"></div></center>
								    <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
								  </div>
								</div>
							

					      </div>
					      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
					      	
					      		<div class="card">
								  <h5 class="card-header">Cupones</h5>
								  <div class="card-body">
								    <center><div id="circular1"></div></center>
								    <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
								  </div>
								</div>

					      </div>
					      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
					      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
					    </div>
					  </div>
					</div>

					<div class="container-fluid" id="registros" style="display: none">
							<br>
							<center><h3><p>Registros</p></h3></center>
							<div class="form-group">
							        <div class="input-group">
							          <span class="input-group-addon">Buscar:</span>
							         <!-- <form method="post">-->
							          <input type="text" name="search_text" id="search_text" placeholder="Buscar" class="form-control" value=""/>
							          <input type="hidden" id="coll" value="" name="id_del_nombre">
							            <!--</form>-->
							                  
							        </div>
							      </div>
							      <br />
							      <form method="post">
							      <div id="result"></div>
							      <div style="clear:both"></div>
							      </form>
							</div>

					<div class="form-control">
						<label for="ver_registros">Mostrar registros</label>
						<input type="checkbox" id="ver_registros" onclick="mostrar_registros();">
					</div>

					



<?php echo '<script'; ?>
 type="text/javascript">

 $.ajax({
        type: "POST",
        url: "includes/src/ajax/graficas/circular.php",
        data: {dato: '36'},
        success: function(respuesta){
			$('#circular').html(respuesta);
	   	}});

 $.ajax({
        type: "POST",
        url: "includes/src/ajax/graficas/circular1.php",
        data: {dato: '36'},
        success: function(respuesta){
			$('#circular1').html(respuesta);
	   	}});


function mostrar_registros(){

var checkBox = document.getElementById("ver_registros");


  if (checkBox.checked == true){
    //alert("checado");
    document.getElementById('ocultauno').style.display='none';
    document.getElementById('registros').style.display='';
  } else {
    document.getElementById('ocultauno').style.display='';
    document.getElementById('registros').style.display='none';
  }

}


 $(document).ready(function(){
  load_data();
  function load_data(query)
  {
    $.ajax({
      url:"includes/src/ajax/search.php",
      method:"post",
      data:{query:query},
      success:function(data)
      {
        $('#result').html(data);

        
      }
    });
  }
  
  $('#search_text').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
      load_data(search);
      //alert(search);
    }
    else
    {
      load_data();      
    }
  });
});


<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
