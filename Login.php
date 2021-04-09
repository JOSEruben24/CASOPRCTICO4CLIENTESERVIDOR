<html>

   <head>

      <title>Login</title>

      <link rel="stylesheet" type="text/css" href="estilo.css">

   </head>

   <body>

      

         <form  method="POST" action= "Login.php">
         <fieldset>
<legend> INICIAR SESION</legend>
	<p class="from-group">
		<label for="user">Usuario:</label>
		<input type="text" name="user" class="from-group" id="user" >	
	</p>

	<p class="from-group">
		<label for="password">contraseña:</label>
		<input type="text" name="password"class="from-group" id="password" >
	</p>
<!--
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
	</p>-->
	<p>
		<input type="submit" value="iniciar" class= "btn btn-success" name="btn1">
        <input type="submit" value="cancelar" class= "btn btn-success" name="btn2">
        
		
	</p>
</fieldset>
          
         </form>

      </div>

   </body>
  <?php
if(isset($_POST['btn1']))
{
   $user = $_POST['user'];

   $password = $_POST['password'];

        if (($user == "usuario") AND ($password == "12345")) {

            echo "Bienvenido ".$user;
           

            $extra = 'localhost/CASOPRACTICO4CLIENTESERVIDOR/menu.html';

            header("Location: http://$extra");

exit;

        } else {

            echo "¡Usuario o contraseña incorrectos!";

            echo '<br><a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';

        }
    }
    if(isset($_POST['btn2']))
    {
        $extra = 'localhost/CASOPRACTICO4CLIENTESERVIDOR/cliente.php';

        header("Location: http://$extra");
        exit;
   }
 ?>

</html>
