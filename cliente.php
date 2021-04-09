<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Autos</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
		<ul class="menu">
			<li><a >Inicio</a></li>
			<li><a >Insertar</a></li>
			<li><a >Modificar</a></li>
			<li><a >Eliminar</a></li>
			<li><a >Consultar</a></li>
            <li><a href="http://localhost/CASOPRACTICO4CLIENTESERVIDOR/Login">Login</a></li>
		</ul>
        <form method="POST" action="cliente.php">
        <div id="banners125">
			<!--<div align='center'><h2>Patrocinadores</h2></div><br>-->
			<ul>
				<li>
                <div align='center'><img src="img/banner30.jpg">	</div><br>					
				</li>
				
			</ul>
			</div>
<fieldset>
<legend> Catalago</legend>

	<p>
		<input type="submit" value="Catalago" class= "btn btn-success" name="btn1">
	</p>
</fieldset>
</form>


<?php
	if(isset($_POST['btn1']))//consutar datos
	{
		include("abrir_conexion.php");
			$resultados = mysqli_query($conexion, "SELECT * FROM $automovil ");
				while($consulta = mysqli_fetch_array($resultados))
			{				
				echo
				"
				
				<table width=\"100%\" border=\"1\">
				<tr>
					<td><b><center>Codigo</center></br></td>
					<td><b><center>Marca</center></br></td>
					<td><b><center>Año</center></br></td>
					<td><b><center>Pais</center></br></td>
					<td><b><center>Cilindraje</center></br></td>
				</tr>
						<tr>
							<td>".$consulta['Codigo_Auto']."</td>
							<td>".$consulta['Marca']."</td>
							<td>".$consulta['Ano']."</td>
							<td>".$consulta['Pais']."</td>
							<td>".$consulta['Cilindraje']."</td>
						</tr>		
				<table>					
				";
			}
		include("cerrar_conexion.php");
	}
	
	
?>
	</body>
</html>