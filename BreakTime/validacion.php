   <html>
    <head>
    <title>Bienvenida</title>
    <link rel="stylesheet"  type="text/css" media="screen" href="estilo.css" />
    </head>
    <body>
    <div class="container">
    <div class="main">
    <h2>Bienvenida</h2>
    
    <?php
    
    $dbhost = 'localhost:3036';
		$dbuser = 'root';
		$dbpass = 'slack142';    	
    	$dbase = '/var/lib/mysql/breakTime';
    	$conn = mysql_connect($dbhost, $dbuser, $dbpass, $dbase);
		
		
	
						$user = mysql_real_escape_string($_POST["nickname"], $conn);
						$pass1 = mysql_real_escape_string($_POST["password1"], $conn);
						
	mysql_select_db('breakTime');			   	
	$sql = "SELECT * FROM usuarios where nickName='$user' and password='$pass1'";
	$q = mysql_query($sql,$conn);	
	
	
		if($q) 
		{	
			echo 'Bienvenido'. "<br><br>". $user;	
			echo '<a href="menuPrincipal.html"><br><br><input value="Ingresar" type="button" ></a><br>';	
		}

			else
			{
				echo "Usuario o Contraseña Incorrecta. Reintente!";
	
			}
	
	//cerramos la conexion
	
	mysql_close($conn);
    ?>
    </div>
    </div>
    
    
    
</body>
</html>