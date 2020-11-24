<!DOCTYPE html>
<html id="html">
<head>
    <title>{$Title} - {$Name}</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="includes/css/estilo.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

<script type="text/javascript">

</script>
{literal}
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '125309844796804');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=125309844796804&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Global site tag (gtag.js) - Google Ads: 825692747 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-825692747"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-825692747'); </script> 
{/literal}
</head>
<body id="body">

<header class="fijado">
    
 
    <div class="container-fluid navega" id="navega">
        
    <div class="row" style="margin-top: -5px;">
        <br><br><br><br><br><br>
        <a href="index.php">
            <div class="col logotipo1">
            <a class="navbar-brand" href="index.php"><img class="logotipo" src="includes/img/logos/bzr.png" style="width: 160px"></a>
        </div></a>
        <div class="col">
        </div>
        <div class="col">
        </div>
        {if $Title eq 'Gana en'}
        <div class="col pinta_negro" style="text-align: right;">
            <a onclick="pasar_a_recursos()" id="cambiatext" style="color:#ffffff; font-size: 18px;">Instrucciones&nbsp;&nbsp;&nbsp;</a>
            <a href="index.php" id="cambiado"style="color:#ffffff font-size: 18px;;"></a>
        </div>
        <div class="col" style="text-align: right; ">
            <a href="condiciones.php" style="color:#ffffff; font-size: 18px;">Términos y Condiciones</a>
        </div>
        <div class="col" style="text-align: right; ">
            <a href="politica.php" style="color:#ffffff; font-size: 18px;">Política de privacidad</a>
        </div>
        {/if}
        {if  $Title eq 'Condiciones' || $Title eq 'Politicas de privacidad'}
        <div class="col " style="text-align: center; color: #000 !important;">
            <a href="index.php" >Instrucciones</a>
        </div>
        <div class="col" style="text-align: center; color: #ffffff;">
            <a href="condiciones.php" >Términos y Condiciones</a>
        </div>
        <div class="col" style="text-align: center; color: #ffffff;">
            <a href="politica.php" >Politica de privacidad</a>
        </div>
        {/if}
        {if $Title eq 'Gira en'}
        <div class="col" style="text-align: right; color:#ffffff;">
            <a href="index.php" style="color:#ffffff;">Inicio</a>
        </div>
        <div class="col" style="text-align: right; color:#ffffff;">
            <a href="condiciones.php" style="color:#ffffff;">Términos y Condiciones</a>
        </div>
        <div class="col" style="text-align: right; color:#ffffff;">
            <a href="politica.php" style="color:#ffffff;">Politica de privacidad</a>
        </div>

        {/if}
        
    </div>
        
    </div>

    


</header>
<div class="paramovil" style="background-color: #ffffff;">
        
        <div class="row" style="text-align: center; vertical-align: middle;">
            <div class="col-sm-12" style="background-color: #000;">
            <center>  <a class="navbar-brand" href="index.php"><img src="includes/img/logos/bzr1.png" style="width:160px"></a></center>
            </div>

                {if $Title eq 'Gana en'}
                <div class="col pinta_negro" style="text-align: center;">
                    <a  onclick="pasar_a_recursos()" id="cambiatext" style="font-size:16px;">Instrucciones</a>
                    <a href="index.php" id="cambiado"></a>
                </div>
                {/if}
                {if  $Title eq 'Condiciones' || $Title eq 'Politicas de privacidad' }
                <div class="col pinta_negro" style="text-align: center;">
                    <a href="index.php" style="color:#ffffff;" style="font-size:16px;">Instrucciones</a>
                </div>
                {/if}
                {if $Title eq 'Gira en'}
                <div class="col pinta_negro" style="text-align: center;">
                    <a href="index.php" style="color:#ffffff;" style="font-size:16px;">Inicio</a>
                </div>
                {/if}

            <div class="col" style="margin-top:10px; color: #000;">
               <a href="condiciones.php"  style="font-size:16px;"> Términos y Condiciones</a>
            </div>

            <div class="col" style="margin-top:10px; color: #000;">
               <a href="politica.php"  style="font-size:16px;"> Politica de privacidad</a>
            </div>
        </div>
    </div>
<br><br><br><br>


    