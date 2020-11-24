{include file="header.tpl"}


<div class="container-fluid ruleta_gira fondo" id="ruleta_gira">
<br><br>
<div class="gira_escritorio"><img src="includes/img/nuevo/clic.png" width="380px"  ></div>
<div class="row">
<input type="hidden" id="usuario" value="{$user}">
<input type="hidden" id="correo_sess" value="{$corr}">
<input type="hidden" id="cupon_" value="{$cupon}">
<div id="premio">
		<table style="margin: 0 auto;">
			<tr><th></th></tr>

			<tr>
				<td><p class="elije"></p></td>
				<!--<td><img src="image/cortesia.png" class="imgSorpresa"></td>-->
					
			</tr>

			<tr><td><p class="contador"></p></td></tr>

		</table>

	</div>	
	<img src="includes/img/nuevo/clic1.png" class="grira_movil">
	<div class="vara"></div>
	<div class="img_rulett">
	<img  src="includes/img/imagen.png" id="ruleta" style="width: 100%;">
    </div>
    <div>
		<div id="sonido" style="display: none;">	
			<iframe id="audio" src="./includes/sonido/ruleta.mp3">
			</iframe> 
			 
		</div>
	</div>




</div>
	
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.14.4/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<style type="text/css">

	* {
	padding: 0px;
	margin: 0px;
	text-align: center;
}

html,body { 
  background:url(includes/img/nuevo/fondo_ruleta.png) center center no-repeat !important;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: Calibri;
    

}

.navega{
  height: 5px;
  background-color: transparent;
}

.logotipo
{
display: none;
}

.logotipo1
{
 background:url(includes/img/logos/bzr1.png) center center no-repeat !important;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: Calibri;
  height: 50px;
  /*border:10px solid #ffffff;*/
  padding: 30px;
  }

.pleca{
	display: none;
}
.navega{
	color:#ffffff;
}
.pinta_negro, a{
	color:#ffffff;
}

.vara{

}

img {
	
    
	z-index: 100;
	transition: all 5s

}

#premio{
	color: white;
	position: absolute;
	font-size: 30px;
	font-weight: bold;
	padding-top: 20px;
	padding: 20px;
	
}

#giros{
	position: absolute;
	font-size: 20px;
	padding: 20px;
}
.grira_movil{
	display: none;
}
.gira_escritorio{
	margin-left: -554px;
}

input[type=text]
	{
	  
	  margin-left: .5px !important;
	}

@media (max-width: 850px) {
	.gira_escritorio{
	
	display: none;
	}

   a{
  color:#000000 !important;
    text-align: center;
    vertical-align: middle;
  }

  
  .grira_movil{

    margin-top: -60px;
    width: 382px;

  }
	.vara {
	/*height: 70px;
	width: 15px;
	background-color: #aaa;
	margin: auto;
	top: 10px;
	border-radius: 0px 0px 8px 8px;
	border: 1px solid #000;
	border-top: 5px solid #000;
	z-index: 1000;*/
}
.grira_movil{
	display: block;
}

.paramovil{

width: 85%;

}

.jconfirm .jconfirm-box {
    background: white;
    border-radius: 4px;
    position: relative;
    outline: 0;
    padding: 18px 45px -1px;
    overflow: hidden;
    margin-left: 10px !important;
    margin-right: auto;
}

}	


.jconfirm .jconfirm-box {
    background: white;
    border-radius: 4px;
    position: relative;
    outline: 0;
    padding: 18px 8px 20px;
    overflow: hidden;
    margin-left: auto;
    margin-right: auto;
}
</style>
</div>

{literal}
<script type="text/javascript">
	
	const ruleta = document.querySelector("#ruleta");

 ruleta.addEventListener("click",girar);
 giros=0;

function girar(){

 // if (giros < 1) {
   let rand = Math.random()*7200; 
   calcular(rand);
   giros++;     
   var sonido =document.querySelector("#audio");
   sonido.setAttribute("src","sonido/ruleta.mp3");
   
    //document.querySelector(".contador").innerHTML = "TURNOS:" + giros;

 //}else {

   

//}

function premio(premios){


  //document.querySelector(".elije").innerHTML = "FELICIDADES, GANASTE: " + premios;
 /*
 Swal.fire({
    icon: 'success',
    title: "FELICIDADES, <br>GANASTE: " + premios,
    confirmButtonColor: '#3085d6',
    confirmButtonText: 'ACEPTAR!!!',
    allowOutsideClick: false
  }).then((result) => {
    if (result.value==true) {
      alert("aqui");
    giros=0;
     
      //document.querySelector(".elije").innerHTML = "FELICIDADES, GANASTE: ";
      //document.querySelector(".contador").innerHTML = "TURNOS:" + "0"; 

    }
  })


*/

var prem = premios.split("$");

//alert(prem[1]);

var user = $('#usuario').val();
var mail = $('#correo_sess').val();
var cupon = $('#cupon_').val();
var comp_min = '';

switch(prem[1]) {
  case '400':
    cupon = 'BF400';
    comp_min = '3,500';
    break;
  case '700':
    cupon = 'BF700';
    comp_min = '5,000';
    break;
  case '1000':
    cupon = 'BF1000';
    comp_min = '7,000';
    break;
}




$.confirm({
    title: '<img src="includes/img/logos/buenfin.png" style="width:130px;"> ',
    boxWidth: '80%',
    useBootstrap: false,
    content:'<div class="container-fluid" style="text-align:center; content-align:center;">'+
     '<p style="font-size:36px; font-weight:bold;">¡Felicidades!<br></p><br>' +
    '<form action="" class="formName">' +
    '<div class="form-group" style="width:100%;">' +
    '<label style="font-size:28px;">Has ganado $<font color="red">' + prem[1] + '</font> pesos*</label><br><br>' +
    '<label  style="font-size:38px; text-align:center; font-weight:bold;" class="name" disabled />Código:  ' + cupon + '</label><br><br>' +
   // '<button type="button" class="btn btn-danger">COPIAR</button><br><br><br>' +
    '<label style="font-size:26px;"> *Válido en la compra mínima de <font color="red"> $' + comp_min + '</font> pesos*</label><br><br>' +
    '<label><font color="red"><small>Vigencia. Del 9 al 20 de noviembre 2020. Limitado a una compra por cupón.</small></font></label><br><br>' +
    '<label>Para tu comodidad, enviamos a tu correo el cupón.</label><br>' +
    '</div>' +
    '</div>' +
    '</form>',
    buttons: {
        formSubmit: {
            text: 'IR A TIENDA',
            btnClass: 'btn-red',
            action: function () {
               var name = this.$content.find('.name').html();
                 //var name = this.$content.find('.name').val();
                /*if(!name){
                    $.alert('En caso de existir referencia, colocarla y no dejar vacio.');
                    return false;
                }*/
                $.ajax({
			            type: "POST",
			            url: 'includes/src/ajax/terminar.php?cupon='+cupon+'&usuario='+user+'&valorcupon='+prem[1]+'&correo='+mail,
			            data: $(this).serialize(),
			            beforeSend: function() {
			            
			             document.write('Redireccionando...');
			            },
			            success: function(response)
			            {
			            window.location = "https://www.joyeriasbizzarro.com/?utm_source=landing&utm_medium=web&utm_content=boton+enviar&utm_campaign=buenfin+nov+20";

			            }

			         });

                //$.alert('');
            }
        },
        "enviar cupón": function () {
            
        	$.ajax({
			            type: "POST",
			            url: 'includes/src/ajax/terminar1.php?cupon='+cupon+'&usuario='+user+'&valorcupon='+prem[1]+'&correo='+mail,
			            data: $(this).serialize(),
			            beforeSend: function() {
			            
			             document.write('Redireccionando...');
			            },
			            success: function(response)
			            {
			            	window.location = "index.php";

			            }

			         });

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


function calcular(rand, premios){    
  valor = rand / 360;
  valor = (valor - parseInt(valor.toString().split(".")[0])) * 360;
 // console.log(valor);
  ruleta.style.transform = "rotate("+ rand +"deg)";
  setTimeout(()=>{
    switch(premios,true){
     case valor > 0 && valor <= 36:
     premio("Cupón de $1000");
     break;
     case valor > 36 && valor <= 72:
     premio("Cupón de $700");
     break;
     case valor > 72 && valor <= 108:
     premio("Cupón de $400"); 
     break; 
     case valor > 108 && valor <= 144:
     premio("Cupón de $1000");
     break;
     case valor > 144 && valor <= 180:
     premio("Cupón de $400");
     break; 
     case valor > 180 && valor <= 216:
     premio("Cupón de $700");
     break;
     case valor > 216 && valor <= 252:
     premio("Cupón de $1000");
     break;
     case valor > 252 && valor <= 288:
     premio("Cupón de $400"); 
     break;
     case valor > 288 && valor <= 324:
     premio("Cupón de $700"); 
     break;
     case valor > 324 && valor <= 360:
     premio("Cupón de $400"); 
     break;
   }},5000);

}

}






</script>
{/literal}
{include file="footer.tpl"}