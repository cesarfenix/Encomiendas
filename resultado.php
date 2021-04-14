<?php 
require_once"model/Paquete.php";
$Paquete = new Paquete($_POST["tipo"],$_POST["servicio"],$_POST["peso"]);
require_once"view/vresultado.php";
 ?>