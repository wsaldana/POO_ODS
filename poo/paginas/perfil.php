<!DOCTYPE html>
 <html>
 	<head>
 		<meta content="text/html" charset="UTF-8">
 		<title></title>
 		<link href="../css/estilo.css" rel="stylesheet">
 	</head>
 	<body>
 		<header>
 			<h3>ADMINISTRACIÓN DE PROPUETAS PARA ODS</h3>
 		</header>
 		<section>
 			
 			<form method="POST">
 				<table border="1" width="550" cellspacing="0" cellpadding="10">
 					<tr>
 						<td>Nombre</td>
 						<td colspan="3">
 							<input type="text" name="txtDescripcion" size="80" value=""/>
 						</td>
 					</tr>
 					<tr>
 						<td>ODS</td>
 						<td colspan="3">
 							<input type="text" name="txtDescripcion" size="80" value=""/>
 						</td>
 					</tr>
 					<tr>
 						<td>Detalles</td>
 						<td colspan="3">
 							<textarea name="" cols="80" rows="10"></textarea>
 						</td>
 					</tr>
 					<tr>
 						<td>Progreso</td>
 						<td colspan="1">
 							<input type="text" name="txtDescripcion" size="60" value=""/>
 						</td>
 						<td>
 							<input type="submit" name="btn" value="INGRESAR DATOS">
 						</td>
 					</tr>
 					<?php
 						inlcude("Conectar.php");
 						$con=new Conectar();
 						$cn1=$con->getCn();
 						if(isset($_POST['btn'])){
 							if($_POST['btn']=="INGRESAR DATOS"){
 								$id='p1';
 								//$n=mysql_num_rows($rs1=mysql_query("SELECT * FROM"));
 						}
 					}
 					?>
 				</table>
 			</form>
 		</section>
 		<footer></footer>
 	</body>
 </html>

