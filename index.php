<!DOCTYPE html>
<html>
<head>
<title>LOSPII - Soluciones Informáticas</title>
<link rel="shortcut icon" type="image/png" href="/imagen/empresa.png" />
<meta http-equiv="content-type" content="text/html" charset="UTF-8"> 
<meta name="Description" content="Soluciones Web: Desarrollamos páginas web (PHP - HTML5 - CSS3), también trabajamos con páginas prefabricadas (Joomla - WordPress - Drupal)">
<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
<link rel="stylesheet" type="text/css" href="estilos/bjqs.css">
<script type="text/javascript" src="funciones/jquery.js"></script>
<script type="text/javascript" src="funciones/funciones.js"></script>
<script type="text/javascript" src="funciones/bjqs.js"></script>
</head>
<body>
<div id="pagina">
<div id="cabecera">
<H1 align="center"><a href="index.php">LOSPII</a></H1>
<h3 align="center">S o l u c i o n e s &nbsp;&nbsp;&nbsp;I n f o r m a t i c a s</h3></div>
<div id="contenedor">
<ul id="menu">
<li><a href="index.php">INICIO</a></li>
<li><a href="index.php?pagina=1">¿QUIÉNES SOMOS?</a></li>
<li><a href="index.php?pagina=2">PORTFOLIO</a></li>
<li><a href="index.php?pagina=3">DISEÑOS</a></li>
<li><a href="index.php?pagina=4">HOSTING</a></li>
<li><a href="index.php?pagina=5">CONTACTO</a></li>
</ul>
</div>
<div id="contenido">
<br />
<?php
	if(isset($_REQUEST['pagina'])){
	$op=$_REQUEST['pagina'];
	switch ($op){
		case 1:
			include("html/about.html");
			break;
		case 2:
			include("html/portfolio.html");
			break;
		case 3:
			include("html/disenos.html");
			break;
		case 4:
			include("html/hosting.html");
			break;
		case 5:
			include("html/contacto.html");
			break;
		case 6:
			include("html/seguridad.html");
			break;
		case 7:
			include("html/red.html");
			break;
		case 8:
			include("html/cms.html");
			break;
		case 9:
			include("html/seo.html");
			break;
		case 10:
			include("html/programacion.html");
			break;
		case 11:
			include("html/administracion.html");
			break;
		case 12:
			include("html/pentesting.html");
			break;
		
		default:
			echo "Intento de RFI";
			break;
	}
	}
	else{
		include("html/galeria.html");
	}
?>
<br /> <br />
<!-- FOOTER -->
<hr />
 <p align="center" style="font-size:small;">Copyright © LOSPII 2013.</p>
 <p align="center" style="font-size:small;">Matías Rodríguez - Luis Correa - Nicolás Peel</p>
 <p align="center" style="font-size:small;"><a href="admin.php" style="color:#FFF;">Administración del Sitio</a> - <a href="http://lospii.comxa.com/descargar.zip" style="color:#FFF;">Código Fuente</a></p>
</div>
</div>
</div>
</div>
</body>
</html>