{include file="header.tpl"}

<div class="container-fluid" id="inicio_formulario" >

	<br>
		<br>

		<div class="row">

			<div class="col-sm-5 cambiarclase">
				<br><br>

					<center><img class="buenfin" src="includes/img/logos/buenfin.png"></center>
					  <br><br>
						 <center>
							<p class="participa" style="text-align: center; ">
								<strong>¡PARTICIPA Y GANA CON NOSOTROS!</strong>
							</p>
							<br>
								<p class="gira_txt">Gira la ruleta BIZZARRO</p>
							<br>
								<p class="obten">y obtén <font color='red'>increíbles descuentos</font> para el Buen Fin. </p>	
						</center>		
						
						 <br><br>
						 <center>
						<form class="formulario" id="form_registrar">
							  <div class="form-row centrar">
							    <div class="form-group col-md-7">
							      <!--<label for="nombre">Nombre</label>-->
							      <input type="text" class="form-control" id="nombre" placeholder="Nombre *" required>
							    </div>
							    <div class="form-group col-md-7">
							      <!--<label for="apellidos">Apellidos</label>-->
							      <input type="text" class="form-control" id="apellidos" placeholder="Apellidos *" required>
							    </div>
							  </div>
							  <div class="form-row centrar">
							  <div class="form-group col-md-7">
							    <!--<label for="inputAddress">Correo Electrónico</label>-->
							    <input type="email" class="form-control" id="correo" placeholder="Correo Electrónico *" required>
							  </div>
							  <div class="form-group col-md-7">
							    <!--<label for="inputAddress2">Teléfono</label>--->
							    <input type="tel" class="form-control" id="telefono" placeholder="Teléfono">
							  </div>
							</div>
							  <div class="form-group col-md-7" >
							    <div class="form-check politicas"><br>
							      <label class="form-check-label" for="politicas" style="margin-left: -50px;">
							        Acepto las políticas de privacidad
							        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="checkbox" id="politicass">
							      </label>
							    </div>
							  </div>
							  <div class="form-group col-md-7" >
							    <div class="form-check politicas"><br>
							      <label class="form-check-label" for="yacliente" style="margin-left: -50px;">
							        Ya soy cliente
							        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="checkbox" id="yacliente" onclick="valida_check_ya_cliente();">
							      </label>
							    </div>
							  </div>
							  <br>
							  <button type="button" class="btn btn_prueba_suerte" onclick="registrar_usuario();">Prueba tu suerte</button>
						</form>
						<br>
						<p><div id="resultado1"></div></p>
						<br>

						<form class="formulario" id="form_valida" style="display: none;">
							  <div class="form-row centrar">
							    <div class="form-group col-md-7">
							      <!--<label for="nombre">Nombre</label>-->
							      <input type="email" class="form-control" id="correo1" placeholder="usuario@dominio.com" required>
							    </div>
							    <div class="form-group col-md-7" >
							    <div class="form-check politicas"><br>
							      <label class="form-check-label" for="politicas1" style="margin-left: -50px;">
							        Acepto las políticas de privacidad
							        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="checkbox" id="politicass1">
							      </label>
							    </div>
							  </div>
							    <div class="form-group col-md-7" >
							    <div class="form-check"><br>
							      <label class="form-check-label" for="nocliente" style="margin-left: -50px;">
							        No soy cliente
							        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="checkbox" id="nocliente" onclick="no_soy_cliente();">
							      </label>
							    </div>
							  </div>
							  <br>
							  <button type="button" class="btn btn_prueba_suerte" onclick="validar_correo();">Validar cliente</button>
						</form>
						<br>
						<center><div id="resultado"></div></center>
						<br>
					</center>
							<br>
							<center>
								<!--<div class="row">
								    <div class="col">
								      <button class="btn facebook"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i> &nbsp;&nbsp;Log in FB</button>
								    </div>
								    <div class="col">
								      <button class="btn google"><i class="fa fa-google fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Log in Google</button>
								    </div>
							  	</div>-->
							</center>
							<br><br>


			</div>

			<div class="col">
				


			</div>
			
		</div>

<style type="text/css" id="estilo1">
.pinta_negro, a{
	color:#ffffff;
	font-weight: bold;
	font-size: 20px;
}
html,body,.navega { 
  background: url(includes/img/background.gif) no-repeat center right fixed !important;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: Calibri;
  width: 100%;
}
.logotipo1,.logotipo1{
	display: block !important;
}

footer
	{
		display: none;
	}

@media (max-width: 1080px) {
.form_correo
{
 display:block;
 margin:auto;
}
.quitar
{
 display: none !important;
}
 html,body { 
  background: url(includes/img/blanco.png) no-repeat center left fixed !important;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: Calibri;
}
.input_correo
{
 
}
.form_correo
{
 background-color: #ffffff;
}	
}		
</style>
</div>












































<div class="container-fluid instrucciones" id="instrucciones" style="display: none">

<div class="row">

	<div class="container-fluid ambos">

		<div class="row">

			<div class="col-sm-12">
				<br><br><br><br>
				<center><img class="buenfin" src="includes/img/logos/buenfin.png">
					  <br><br>
				<p style="font-size: 26px; font-weight: bold;">¿LISTO PARA ESTRENAR?</p>	
				<br>  
				<p style="font-size: 23px; color: red; ">Nosotros ponemos los descuentos y tú la suerte</p>
				<br>  
				<p style="font-size: 25px; font-weight: bold ">¿Cómo participo?</p></center>

			</div>

			<div class="container-fluid centrar">
				<br><br><br><br>
			<div class="row">
				<div class="col">
					<div class="" style="width: 18rem;">
					  <center><div>
					    <p class="card-text"><img src="includes/img/iconos/datos.png" style="width: 180px"></p>
					  </div></center>
					</div>
				</div>
				<div class="col">
					<div class="" style="width: 18rem;">
					  <center><div>
					    <p class="card-text"><img src="includes/img/iconos/gira.png" style="width: 180px"></p>
					  </div></center>
					</div>
				</div>
				<div class="col">
					<div class="" style="width: 18rem;">
					  <center><div>
					    <p class="card-text"><img src="includes/img/iconos/cupon.png" style="width: 151px"></p>
					  </div></center>
					</div>
				</div>
				<div class="col">
					<div class="" style="width: 18rem;">
					  <center><div>
					    <p class="card-text"><img src="includes/img/iconos/carrito.png" style="width: 151px"></p>
					  </div></center>
					</div>
				</div>
			</div>
		</div>
			
			
		</div>

<br><br><br><br><br><br>
<center><a href="spin.php"><button type="button" class="btn btn-danger" style="font-size: 22px">¡Participar Ahora!</button></a></center>
<br><br><br><br><br><br><br><br>
</div>

	
</div>
	

<style type="text/css">


 .ambos { 
  background:url(includes/img/pleca/plecas.png) center center no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: Calibri;

}	
.card{
	  background-color: transparent;
}


.pinta_negro, a{
	color:#000 !important;/* este hay que eliminar si quieres letras blancas */
	font-weight: bold;
	font-size: 20px;
}
.logotipo1,.logotipo1{
	display: block;
}	
</style>
</div>





{literal}

<script type="text/javascript">
	//document.body.style.background('#ffffff !pink');

function validarEmail(valor) {
  if (/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/.test(valor)){
   var lol ='1';
  } else {
   var lol ='errorn';
   
  }

  return lol;
}


function pasar_a_recursos()
{
	document.getElementById('inicio_formulario').style.display='none';
	document.getElementById('instrucciones').style.display='';
	$('.navega').removeClass("navega").addClass("verde");
	document.getElementById('html').style.setProperty('background-color', '#ffffff', 'important');
	document.getElementById('body').style.setProperty('background-color', '#ffffff', 'important');
	document.getElementById('cambiatext').style.display='none';
	document.getElementById('cambiado').innerHTML ='Inicio';

}

function valida_check_ya_cliente()
{

var checkBox = document.getElementById("yacliente");
var checkBox1 = document.getElementById("nocliente");
checkBox1.checked = false;
 
  if (checkBox.checked == true){
    //alert("checado");
    document.getElementById('form_registrar').style.display='none';
    document.getElementById('form_valida').style.display='';
  } else {
    // alert("no checado");
  }

}

function no_soy_cliente()
{

var checkBox = document.getElementById("nocliente");
var checkBox1 = document.getElementById("yacliente");
checkBox1.checked = false;
  if (checkBox.checked == true){
    //alert("checado");
    document.getElementById('form_registrar').style.display='';
    document.getElementById('form_valida').style.display='none';
  } else {
    // alert("no checado");
  }

}








function registrar_usuario(){

var checkBox = document.getElementById("politicass");

if (checkBox.checked == true){
    
    var nombre = document.getElementById('nombre').value;
    var apellidos = document.getElementById('apellidos').value;
    var telefono = document.getElementById('telefono').value;
    var correo = document.getElementById('correo').value;


  

    if (validarEmail(correo) =='1') {


    if (nombre=='' || apellidos=='' || telefono =='' || correo == '') {

    $.alert({
	    icon: 'fa fa-warning',
	    title: '<p style="font-size:24px; font-weight:bold;">AVISO</p>',
	    content: '<p style="font-size:20px;">Para continuar por favor no dejes ningún campo vacío.</p><br>',
	    columnClass: 'col-md-6 col-md-offset-4',
	    theme: 'white',
	    /* buttons: {
			formSubmit: {
			 text: 'OK',
			 btnClass: 'btn-red',
			 action: function () {
					               
					 		}
						}	
				},*/
	});

    }else{

    	$.ajax({
            type: "POST",
            url: 'includes/src/ajax/registrar_cliente.php?nombre='+nombre+'&apellidos='+apellidos+'&telefono='+telefono+'&correo='+correo,
            data: $(this).serialize(),
            beforeSend: function() {
            $("#resultado1").html('<center><p><br>Sincronizando... <img src="https://www.buenhotel.com/i/3puntos.png" style="width:80px;"></p></center>');
            },
            success: function(response)
            {
               $("#resultado1").html(response);
               
            }

         });

    }

    }else{


    		 $.confirm({
					    icon: 'fa fa-warning',
					    title: '<p style="font-size:24px; font-weight:bold;">AVISO</p>',
					    columnClass: 'col-md-6 col-md-offset-4',
					    useBootstrap: false,
					    content:'<p style="font-size:24px;">Por favor revisa que tu correo sea correcto.</p>'+
					    '<br>' +
					    '<br>',
					    buttons: {
					        formSubmit: {
					            text: 'OK',
					            btnClass: 'btn-red',
					            action: function () {
					               location.reload();
					            }
					        },
					    },
					    onContentReady: function () {
					        // bind to events
					        var jc = this;
					        this.$content.find('form').on('submit', function (e) {
					            // if the user submits the form by pressing enter in the field.
					            e.preventDefault();
					            jc.$$formSubmit.trigger('click'); // reference the button and click it
					        });
					    }
					});
    		


    }
   


    
  } else {
    $.alert({
	    icon: 'fa fa-warning',
	    title: '<p style="font-size:24px; font-weight:bold;">AVISO</p>',
	    content: '<p style="font-size:20px;">Para participar, porfavor acepta nuestras politicas de privacidad.</p><br>',
	    columnClass: 'col-md-6 col-md-offset-4',
	    theme: 'white',
	    /* buttons: {
			formSubmit: {
			 text: 'OK',
			 btnClass: 'btn-red',
			 action: function () {
					               
					 		}
						}	
				},*/
	});

  }

}





function redireccionar(){
  window.location="spin.php";
} 






function validar_correo(){

var checkBox = document.getElementById("politicass1");

if (checkBox.checked == true){
    
   
    var correo = document.getElementById('correo1').value;

    if (correo=='') {

    	$.alert({
	    icon: 'fa fa-warning',
	    title: '<p style="font-size:24px; font-weight:bold;">AVISO</p>',
	    content: '<p style="font-size:20px;">Profavor, revisa tu correo electronico.</p><br>',
	    columnClass: 'col-md-6 col-md-offset-4',
	    theme: 'white',
	    /* buttons: {
			formSubmit: {
			 text: 'OK',
			 btnClass: 'btn-red',
			 action: function () {
					               
					 		}
						}	
				},*/
	});

    }else{

    	$.ajax({
            type: "POST",
            url: 'includes/src/ajax/valida_correo.php?correo='+correo,
            data: $(this).serialize(),
            beforeSend: function() {
            $("#resultado").html('<center><p><br>Sincronizando... <img src="https://www.buenhotel.com/i/3puntos.png" style="width:80px;"></p></center>');
            },
            success: function(response)
            {
               $("#resultado").html(response);
               
            }

         });

    }

		
    
  } else {
    
  	$.alert({
	    icon: 'fa fa-warning',
	    title: '<p style="font-size:24px; font-weight:bold;">AVISO</p>',
	    content: '<p style="font-size:20px;">Para participar, porfavor acepta nuestras politicas de privacidad.</p><br>',
	    columnClass: 'col-md-6 col-md-offset-4',
	    theme: 'white',
	    /* buttons: {
			formSubmit: {
			 text: 'OK',
			 btnClass: 'btn-red',
			 action: function () {
					               
					 		}
						}	
				},*/
	});

  }

}



/*
    if (screen.width == '1366') {
alert(screen.width);
        var elemento = document.getElementsByClassName("cambiarclase");
        elemento.className += "col-sm-12";
        
    }else{

        var elemento = document.getElementsByClassName("cambiarclase");
        elemento.className += "col-sm-12";
}*/
</script>
{/literal}
{include file="footer.tpl"}