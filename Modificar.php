<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Insertar</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
		<ul class="menu">
			<li><a href="http://localhost/CASOPRACTICO4CLIENTESERVIDOR/menu">Inicio</a></li>
			<li><a href="http://localhost/CASOPRACTICO4CLIENTESERVIDOR/Insertar">Insertar</a></li>
			<li><a href="http://localhost/CASOPRACTICO4CLIENTESERVIDOR/Modificar">Modificar</a></li>
			<li><a href="http://localhost/CASOPRACTICO4CLIENTESERVIDOR/Eliminar">Eliminar</a></li>
			<li><a href="http://localhost/CASOPRACTICO4CLIENTESERVIDOR/Consultar">Consultar</a></li>
		</ul>
    <form method="post" action="Modificar.php">
    <div id="banners125">
    <!--<div align='center'><h2>Patrocinadores</h2></div><br>-->
			<ul>
				<li>
					 <div align='center'><img src="img/banner50.jpg">	</div><br>				
				</li>
				<!--				
			 Para agregar otro banner puedes usar el siguiente código:
				<li>
					<a href="http://tusitio.com/"><img src="http://tusitio.com/imagen.png" /></a>
				</li>
			Termina código -->
			</ul>
			</div>
			<fieldset>
<legend> Ingrese datos a modificar</legend>
	<p class="from-group">
		<label for="Codigo">Codigo Auto:</label>
		<input type="text" name="Codigo" class="from-group" id="Codigo" >	
	</p>

	<p class="from-group">
		<label for="Marca">Marca:</label>
		<input type="text" name="Marca"class="from-group" id="Marca" >
	</p>

	<p class="from-group">
		<label for="Año">Año:</label>
		<input type="text" name="Año" class="from-group" id="Año" >
	</p>

	<p class="from-group">
		<label for="Pais">Pais:</label>
		<input type="text" name="Pais" class="from-group" id="Pais" >
	</p>

	<p class="from-group">
		<label for="Cilindraje">Cilindraje:</label>
		<input type="text" name="Cilindraje" class="from-group" id="Cilindraje" >
	</p>

	<p>
		<input type="submit" value="Buscar" class= "btn btn-success" name="btn1">
		<input type="submit" value="Modificar" class= "btn btn-success" name="btn2">
	</p>
</fieldset>
</form>


<?php
	
	if(isset($_POST['btn1']))//consutar datos
	{
		include("abrir_conexion.php");

			$Codigo = $_POST['Codigo'];

			$resultados = mysqli_query($conexion, "SELECT * FROM $automovil WHERE Codigo_Auto = $Codigo");
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
							<td>".$consulta["Ano"]."</td>
							<td>".$consulta['Pais']."</td>
							<td>".$consulta['Cilindraje']."</td>
						</tr>
					<table>
				";

			}
		include("cerrar_conexion.php");
	}

	if(isset($_POST['btn2']))//ingresar datos 
	{
		include("abrir_conexion.php");

		$Codigo = $_POST['Codigo'];
		$Marca = $_POST['Marca'];
		$Año = $_POST['Año'];
		$Pais = $_POST['Pais'];
		$Cilindraje = $_POST['Cilindraje'];
        
  mysqli_query($conexion, "UPDATE $automovil SET Marca='$Marca',Ano='$Año',Pais='$Pais',Cilindraje='$Cilindraje' WHERE Codigo_Auto = '$Codigo'");
		 
 
		include("cerrar_conexion.php");
		echo "Registros Actualizados correctamente los datos ";
	}
	?>
	</body>
</html>