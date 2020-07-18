<?php 
	include('conect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="https://i.pinimg.com/originals/eb/cd/62/ebcd6293a58d6c4550c929510ee05f23.png">
	<title>Nutrivas/Registro</title>
</head>
<body>
	<form class="reg" action="registro.php" method="POST" >
		<div class="registro">
			<h1>Registrarse!</h1>
			<input type="text"  name="nombres" placeholder="Nombres" required>
			<input type="text"  name="apellidos" placeholder="Apellidos" required><br>
			<input type="email" name="email" placeholder="Correo" required><br>
			<input type="password" name="password" placeholder="Contraseña" required>
			<input type="password" name="password_1" placeholder="Confirmar Contraseña" required><br>
			<input type="number" name="celular" placeholder="Celular" required>
			<input type="number" name="telefono" placeholder="Telefono" required><br>
			<input type="text" name="direccion" placeholder="Dirección" required>	
		</div>
		<div class="btn">
			<button type="submit" name="btnRegistrar" class="btn">Registrarse</button><br>
			<label>Ya tienes cuenta <a href="index.php">Iniciar Sesion</a></label>
		</div>
	</form>

</body>
</html>
