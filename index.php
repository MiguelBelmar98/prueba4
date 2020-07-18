<?php
	include('conect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./style.css">
	<link rel="icon" href="https://i.pinimg.com/originals/eb/cd/62/ebcd6293a58d6c4550c929510ee05f23.png">
	<title>Nutrivas</title>
</head>
<body>
	<form class="log" action="" method="Post" >
		<div class="login">
			<h1>Bienvenidos</h1>
			<input type="text" name="email" placeholder="Correo" required><br>
			<input type="password" name="password" placeholder="Contraseña" required>
		</div>
		<div class="btn">
			<button type="submit" name="btnInicia">Iniciar sesion</button>
		</div>
		<div>
		<a href="registro.php">Registrate aca</a>
		</div>
	</form>
</body>
</html>
