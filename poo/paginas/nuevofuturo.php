<!DOCTYPE html>
<html>
<head>
	<title>Nuevo futuro</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<h1>Login</h1>
<body>
	<form method="POST">
		<p>Username:</p>
			<input type="text" name="user">
		<p>Password:</p>
			<input type="text" name="pass">		
		<br>
			<input type="submit" name="btn" value="Login">
		<p>Aun no te has registrado???</p><a href="registro.php">Registrate aqui</a>
		</br>
		<?php
			include('Conectar.php');
			if(isset($_POST['btn'])){
				if($_POST['btn']=="Login"){
					$con=new Conectar();
					$cn1=$con->getCn();
					$rs=mysql_query("SELECT * FROM usuario",$cn1);
					$us=$_POST['user'];
					$pas=$_POST['pass'];
					while($a=mysql_fetch_array($rs)){
						if($a[1]==$us){
							if($a[3]==$pas){
								header('Location: perfil.php');
								echo "Correcto";
							}else{
								echo "Su contraseña no es correcta";
							}
						}
					}
				}
			}
			
		?>
		<br>
		<a href="quienes.html">Quienes Somos</a>
	</form>
</body>
</html>
