<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css"type="text/css">
	<title>Encomiendas</title>
</head>
<body>
	<form action="resultado.php"method="post">
	<div class="container" id="principal">
		<table style="width:100%">
  <tr>
    <th>Seleccione el tipo de paquete</th>
    <th>Selecione el peso del paquete en Kg</th>
    <th>Seleccione el tipo de servicio</th>
  </tr>
  <tr>
    <td>
    	<select name="tipo">
		  <option value="Carta">Carta</option>
		  <option value="Caja" selected>Caja</option>
  		</select>
  	</td>
  	<td>
  		<input type="number" name="peso">
		<td>
			<select name="servicio">
			  <option value="Hoy">Hoy Mismo</option>
			  <option value="Siguiente" selected>Siguiente Día</option>
  		</select>
  	</td>
   </tr>
  </table>
	</div>
	<div style="text-align: center;">
		<button type="submit"class="btn btn-primary" >Calcular costo de envio</button>
	</div>
	</form>
</body>
</html>