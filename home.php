<?php
	include('conect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="https://i.pinimg.com/originals/eb/cd/62/ebcd6293a58d6c4550c929510ee05f23.png">
	<link rel="stylesheet" type="text/css" href="./style.css">
	<title>Nutrivas</title>
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
		<?php if (isset($_SESSION['success'])):?>
				<div>
					<h3>
						<?php
							echo $_SESSION['success'];
							unset($_SESSION['success']);
						?>
					</h3>
				</div>
		<?php endif ?>
		<?php? if(isset($_SESSION['email'])):?>	
		<h1><strong>Bienvenido <?php echo $_SESSION['email'];?></strong></h1>
	</div>
	<div>
		<label>Aquí puede ver algunas actividades recientes</label>
	</div>
	<div class="notificacion">
		asdadasd
		asdasdas
		dasdasdas
		asdas
	</div>

	<div>
		<button class="btn" type="submit" name="btnPaciente">Pacientes</button>
		<button class="btn" type="submit" name="btnAgenda">Agenda</button>
	</div>	
		
	</div>

</body>
</html>