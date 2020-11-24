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

}


function calcular(rand, premios){    
  valor = rand / 360;
  valor = (valor - parseInt(valor.toString().split(".")[0])) * 360;
  console.log(valor);
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







/*******************  PAA WEB **********************************/





