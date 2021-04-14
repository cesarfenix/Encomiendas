<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"type="text/css">
	<title>Encomiendas</title>
</head>
<body>
	<div><h1>Valor a cancelar</h1></div>
	<div>
	<table class="default" style="justify-content:center; ">
  <tr>
    <td>
    	<h2>Su envio es : </h2>
    	<ul>
    		<ol>Tipo : <?= $Paquete->getTipo() ?></ol>
    		<ol>Peso <?= $Paquete->getPeso() ?> Kgs.</ol>
    		<ol>Servicio para : <?= $Paquete->getServicio() ?> dia.</ol>
    		<ol>Valor a cancelar : <?= $Paquete->Calcular() ?></ol>
    	</ul>
    </td>
  </tr>
</table>
</div>
</body>
</html>