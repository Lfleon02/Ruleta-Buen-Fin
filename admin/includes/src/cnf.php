<?php
date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, "Spanish");
require 'libs/Smarty.class.php';
require 'libs/SmartyBC.class.php';
require "class.phpmailer.php";
require "class.smtp.php"; 
$smarty = new Smarty;
error_reporting(0);
$con = mysqli_connect("localhost","userbzr","Daisa2020.","buenfin");
//$con = mysqli_connect("localhost","root","","buen_fin");

            if(!$con){
                echo"connection failed";
            }
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }



/**
 * 
 */

class Funciones 
{
	
	function activo($user)
	{
		global $con;
		$ver = mysqli_query($con, 'SELECT * FROM usuarios WHERE usuario = "'.$user.'" ');
		$ro = mysqli_fetch_array($ver);		
		
		if (empty($ro)) {
			$mensaje = 'usuario no encontrado';
		}else{
			$mensaje='valido';
		}

		return $mensaje;

	}


	function dispositivo(){
		$tablet_browser = 0;
		$mobile_browser = 0;
		$body_class = 'desktop';
		 
		if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
		    $tablet_browser++;
		    $body_class = "tablet";
		}
		 
		if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
		    $mobile_browser++;
		    $body_class = "mobile";
		}
		 
		if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
		    $mobile_browser++;
		    $body_class = "mobile";
		}
		 
		$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
		$mobile_agents = array(
		    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
		    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
		    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
		    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
		    'newt','noki','palm','pana','pant','phil','play','port','prox',
		    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
		    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
		    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
		    'wapr','webc','winw','winw','xda ','xda-');
		 
		if (in_array($mobile_ua,$mobile_agents)) {
		    $mobile_browser++;
		}
		 
		if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
		    $mobile_browser++;
		    //Check for tablets on opera mini alternative headers
		    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
		    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
		      $tablet_browser++;
		    }
		}
		if ($tablet_browser > 0) {
		// Si es tablet has lo que necesites
		   $dato= 'Tablet';
		}
		else if ($mobile_browser > 0) {
		// Si es dispositivo mobil has lo que necesites
		   $dato= 'Celular';
		}
		else {
		// Si es ordenador de escritorio has lo que necesites
		   $dato= 'Desktop';
		}  

		return $dato;
			}





			function obtener_navegador(){

	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	   $user_agent;

	if(strpos($user_agent, 'MSIE') !== FALSE)
	   return 'Internet explorer';
	 elseif(strpos($user_agent, 'Edge') !== FALSE) //Microsoft Edge
	   return 'Microsoft Edge';
	 elseif(strpos($user_agent, 'Trident') !== FALSE) //IE 11
	    return 'Internet explorer';
	 elseif(strpos($user_agent, 'Opera Mini') !== FALSE)
	   return "Opera Mini";
	 elseif(strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR') !== FALSE)
	   return "Opera";
	 elseif(strpos($user_agent, 'Firefox') !== FALSE)
	   return 'Mozilla Firefox';
	 elseif(strpos($user_agent, 'Chrome') !== FALSE)
	   return 'Google Chrome';
	 elseif(strpos($user_agent, 'Safari') !== FALSE)
	   return "Safari";
	 else
	   return 'No hemos podido detectar su navegador';
}


	function so(){

		$user_agent = $_SERVER['HTTP_USER_AGENT'];
	   $user_agent;
	  
	    if(strpos($user_agent, 'Windows NT 10.0') !== FALSE)
	      return "Windows 10";
	    elseif(strpos($user_agent, 'Windows NT 6.3') !== FALSE)
	      return "Windows 8.1";
	    elseif(strpos($user_agent, 'Windows NT 6.2') !== FALSE)
	      return "Windows 8";
	    elseif(strpos($user_agent, 'Windows NT 6.1') !== FALSE)
	      return "Windows 7";
	    elseif(strpos($user_agent, 'Windows NT 6.0') !== FALSE)
	      return "Windows Vista";
	    elseif(strpos($user_agent, 'Windows NT 5.1') !== FALSE)
	      return "Windows XP";
	    elseif(strpos($user_agent, 'Windows NT 5.2') !== FALSE)
	      return 'Windows 2003';
	    elseif(strpos($user_agent, 'Windows NT 5.0') !== FALSE)
	      return 'Windows 2000';
	    elseif(strpos($user_agent, 'Windows ME') !== FALSE)
	      return 'Windows ME';
	    elseif(strpos($user_agent, 'Win98') !== FALSE)
	      return 'Windows 98';
	    elseif(strpos($user_agent, 'Win95') !== FALSE)
	      return 'Windows 95';
	    elseif(strpos($user_agent, 'WinNT4.0') !== FALSE)
	      return 'Windows NT 4.0';
	    elseif(strpos($user_agent, 'Windows Phone') !== FALSE)
	      return 'Windows Phone';
	    elseif(strpos($user_agent, 'Windows') !== FALSE)
	      return 'Windows';
	    elseif(strpos($user_agent, 'iPhone') !== FALSE)
	      return 'iPhone';
	    elseif(strpos($user_agent, 'iPad') !== FALSE)
	      return 'iPad';
	    elseif(strpos($user_agent, 'Debian') !== FALSE)
	      return 'Debian';
	    elseif(strpos($user_agent, 'Ubuntu') !== FALSE)
	      return 'Ubuntu';
	    elseif(strpos($user_agent, 'Slackware') !== FALSE)
	      return 'Slackware';
	    elseif(strpos($user_agent, 'Linux Mint') !== FALSE)
	      return 'Linux Mint';
	    elseif(strpos($user_agent, 'Gentoo') !== FALSE)
	      return 'Gentoo';
	    elseif(strpos($user_agent, 'Elementary OS') !== FALSE)
	      return 'ELementary OS';
	    elseif(strpos($user_agent, 'Fedora') !== FALSE)
	      return 'Fedora';
	    elseif(strpos($user_agent, 'Kubuntu') !== FALSE)
	      return 'Kubuntu';
	    elseif(strpos($user_agent, 'Linux') !== FALSE)
	      return 'Linux';
	    elseif(strpos($user_agent, 'FreeBSD') !== FALSE)
	      return 'FreeBSD';
	    elseif(strpos($user_agent, 'OpenBSD') !== FALSE)
	      return 'OpenBSD';
	    elseif(strpos($user_agent, 'NetBSD') !== FALSE)
	      return 'NetBSD';
	    elseif(strpos($user_agent, 'SunOS') !== FALSE)
	      return 'Solaris';
	    elseif(strpos($user_agent, 'BlackBerry') !== FALSE)
	      return 'BlackBerry';
	    elseif(strpos($user_agent, 'Android') !== FALSE)
	      return 'Android';
	    elseif(strpos($user_agent, 'Mobile') !== FALSE)
	      return 'Firefox OS';
	    elseif(strpos($user_agent, 'Mac OS X+') || strpos($user_agent, 'CFNetwork+') !== FALSE)
	      return 'Mac OS X';
	    elseif(strpos($user_agent, 'Macintosh') !== FALSE)
	      return 'Mac OS Classic';
	    elseif(strpos($user_agent, 'OS/2') !== FALSE)
	      return 'OS/2';
	    elseif(strpos($user_agent, 'BeOS') !== FALSE)
	      return 'BeOS';
	    elseif(strpos($user_agent, 'Nintendo') !== FALSE)
	      return 'Nintendo';
	    else
	      return 'Unknown Platform';

	  $ua = getPlatform($user_agent);
	  return$ua;

	}

	 function get_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

}


$funciones = new Funciones();

$ip = $funciones->get_ip();
$fecha = date("Y-m-d H:i:s");

?>