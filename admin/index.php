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
<h3>Comentarios</h3>
<?php
include_once('../html/db.php');
$conexion=mysql_connect($host,$usuario,$contra) or 
				die ("Problemas de Conexion");
mysql_select_db($db,$conexion) or
				die ("Problemas de Conexion");
$registros=mysql_query("SELECT mail,nombre,comentario FROM contacto",$conexion) or
				die ("Problemas de Conexion");
while ($reg=mysql_fetch_array($registros))
{
  echo "Nombre:&nbsp;".$reg['nombre']."<br />";
  echo "Mail:&nbsp;".$reg['mail']."<br />";
  echo "Comentario:&nbsp;".$reg['comentario']."<br />";
  echo "<hr>";
  echo "<br />";
  }
mysql_close($conexion);
?>
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