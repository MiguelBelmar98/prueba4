<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./style.css">
	<title>Nutrivas / Perfil</title>
</head>
<body>
	<nav>
		<label class="logo">Nutrivas</label>
		<ul>
			<li><a href="home.php" >Inicio</a></li>
			<li><a href="#">Soporte</a></li>
			<li><a href="#">Cuenta</a>
				<ul>
					<div class="desplegable">
						<li><a href="perfil.php">Perfil</a></li>
					</div >
					<div  class="desplegable">
						<li><a href="">Mensajes</a></li>
					</div>
					<div  class="desplegable">
						<li><a href="">Calificacion</a></li>
					</div>
					<div class="desplegable ">
						<li><a href="index.php?Logout='1'">Salir</a></li>
					</div>
				</ul>
			</li>
		</ul>
	</nav>
	<div>
		<h1>Pacientes</h1>
	</div>
	<div>
		<button class="btn" type="submit" name="btnAgenda">Agenda</button>
	</div>
</body>
</html>