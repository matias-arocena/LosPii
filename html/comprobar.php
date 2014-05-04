<!DOCTYPE html>
<html>
<head>
<title>LOSPII - Soluciones Informáticas</title>
<link rel="shortcut icon" type="image/png" href="/imagen/empresa.png" />
<meta http-equiv="content-type" content="text/html" charset="UTF-8"> 
<meta name="Description" content="Soluciones Web: Desarrollamos páginas web (PHP - HTML5 - CSS3), también trabajamos con páginas prefabricadas (Joomla - WordPress - Drupal)">
<link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
<script type="text/javascript" src="../funciones/jquery.js"></script>
<script type="text/javascript" src="../funciones/funciones.js"></script>
</head>
<body>
<div id="pagina">
<div id="cabecera">
<H1 align="center"><a href="../index.php">LOSPII</a></H1>
<h3 align="center">S o l u c i o n e s &nbsp;&nbsp;&nbsp;I n f o r m a t i c a s</h3></div>
<div id="contenedor">
<ul id="menu">
<li><a href="../index.php">INICIO</a></li>
<li><a href="../index.php?pagina=1">¿QUIÉNES SOMOS?</a></li>
<li><a href="../index.php?pagina=2">PORTFOLIO</a></li>
<li><a href="../index.php?pagina=3">DISEÑOS</a></li>
<li><a href="../index.php?pagina=4">HOSTING</a></li>
<li><a href="../index.php?pagina=5">CONTACTO</a></li>
</ul>
</div>
<div id="contenido">
<br />
<div id="marco">

<?php
require_once('funciones.php');
include_once('db.php');
if(isset($_REQUEST['mail'])){
	if(verificarmail($_REQUEST['mail'])){
			$conexion=mysql_connect($host,$usuario,$contra) or 
				die ("Problemas de Conexion");
			mysql_select_db($db,$conexion) or
				die ("Problemas de Conexion");
			$op=$_REQUEST['servicios'];
			switch ($op){
				case "Hosting":
					$registros=mysql_query("SELECT nombre FROM hosting WHERE mail='$_REQUEST[mail]'",$conexion) or die("Problemas de Conexión");
					if($reg=mysql_fetch_array($registros)){
						echo $reg['nombre']." usted está registrado en ".$op.".";
					}
					else{
						echo "El mail ".$_REQUEST['mail']." no está registrado en ".$op.".";
					}
					break;
				case "CMS":
					$registros=mysql_query("SELECT nombre FROM cms WHERE mail='$_REQUEST[mail]'",$conexion) or die("Problemas de Conexión");
					if($reg=mysql_fetch_array($registros)){
						echo $reg['nombre']." usted está registrado en ".$op.".";
					}
					else{
						echo "El mail ".$_REQUEST['mail']." no está registrado en ".$op.".";
					}
					break;
				case "Pentesting":
					$registros=mysql_query("SELECT nombre FROM pentesting WHERE mail='$_REQUEST[mail]'",$conexion) or die("Problemas de Conexión");
					if($reg=mysql_fetch_array($registros)){
						echo $reg['nombre']." usted está registrado en ".$op.".";
					}
					else{
						echo "El mail ".$_REQUEST['mail']." no está registrado en ".$op.".";
					}
					break;
				case "Programacion":
				
					$registros=mysql_query("SELECT nombre FROM programacion WHERE mail='$_REQUEST[mail]'",$conexion) or die("Problemas de Conexión");
					if($reg=mysql_fetch_array($registros)){
						echo $reg['nombre']." usted está registrado en ".$op.".";
					}
					else{
						echo "El mail ".$_REQUEST['mail']." no está registrado en ".$op.".";
					}
					break;
				case "Web 2.0":
					
					$registros=mysql_query("SELECT nombre FROM red WHERE mail='$_REQUEST[mail]'",$conexion) or die("Problemas de Conexión");
					if($reg=mysql_fetch_array($registros)){
						echo $reg['nombre']." usted está registrado en ".$op.".";
					}
					else{
						echo "El mail ".$_REQUEST['mail']." no está registrado en ".$op.".";
					}
					break;
				case "Seguridad":
					
					$registros=mysql_query("SELECT nombre FROM seguridad WHERE mail='$_REQUEST[mail]'",$conexion) or die("Problemas de Conexión");
					if($reg=mysql_fetch_array($registros)){
						echo $reg['nombre']." usted está registrado en ".$op.".";
					}
					else{
						echo "El mail ".$_REQUEST['mail']." no está registrado en ".$op.".";
					}
					break;
				case "Sysadmin":
					$registros=mysql_query("SELECT nombre FROM administracion WHERE mail='$_REQUEST[mail]'",$conexion) or die("Problemas de Conexión");
					if($reg=mysql_fetch_array($registros)){
						echo $reg['nombre']." usted está registrado en ".$op.".";
					}
					else{
						echo "El mail ".$_REQUEST['mail']." no está registrado en ".$op.".";
					}
					break;
				default:
				
					break;
			}			
			mysql_close($conexion);
	}
	else{
		echo "<h3>Ingrese un E-Mail válido</h3>";
	}
}
else{
	echo '<h3>CONSULTAR</h3>
<p>Compruebe si usted está inscripto en un sevicio especifico</p>
<form method="post" action="comprobar.php">
<center>
<table>
<tr><td>Mail:</td><td><input text="text" name="mail" /></td></tr>
<tr><td>Seleccione el Servicio:</td><td>
<select name="servicios">
<option name="">-----------------------------</option>
<option name="hosting">Hosting</option>
<option name="admin">Sysadmin</option>
<option name="cms">CMS</option>
<option name="pentesting">Pentesting</option>
<option name="programacion">Programacion</option>
<option name="red">Web 2.0</option>
<option name="seguridad">Seguridad</option>
</select>
</center>
</td></tr>
<tr><td><input type="submit" value="Consultar"</td></tr>
</table>
</form>';
}
?>
<br />
</div>
</div>
<br /> <br />
<!-- FOOTER -->
<hr />
 <p align="center" style="font-size:small;">Copyright © LOSPII 2013.</p>
 <p align="center" style="font-size:small;">Matías Rodríguez - Luis Correa - Nicolás Peel</p>

</div>
</div>
</div>
</div>
</body>
</html>