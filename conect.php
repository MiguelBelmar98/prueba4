<?php 
	session_start();
	#conexion con la base de datos
	$db = mysqli_connect('localhost', 'root', '239802lsab', 'nutrivas');	
	# seccion registra usuarios
	if (isset($_POST['btnRegistrar'])) {
		#despues de apretar el btn registrar pregunta lo sgte 
		if (strlen($_POST['nombres']) >= 1 && strlen($_POST['apellidos']) >= 1 && strlen($_POST['email']) >= 1 &&
		    strlen($_POST['password']) >= 1 && strlen($_POST['password_1']) >= 1 && strlen($_POST['celular']) >= 1 &&
		    strlen($_POST['telefono']) >= 1 && strlen($_POST['direccion']) >= 1){
			#toma las variables ingresadas y las guarda en una variable
			$nombres = trim($_POST['nombres']);
			$apellidos = trim($_POST['apellidos']);
			$email = trim($_POST['email']);
			$password = trim($_POST['password']);
			$password_1 = trim($_POST['password_1']);
			$celular = trim($_POST['celular']);
			$telefono = trim($_POST['telefono']);
			$direccion = trim($_POST['direccion']);
			
				#confirmacion de que amabas pass sean iguales
				if($password != $password_1){
					echo "las pass no coinciden";
				}else{
				#se insarte los datos de las variables guardadas en la bd
				$pass = md5($password);
				$password_1 = md5($password_1);#encrypta la pass	
				$sql = "INSERT INTO usuario(nombres, apellidos, email, password, password_1, celular, telefono, direccion) VALUES ('$nombres', '$apellidos', '$email', '$password', '$password_1', '$celular', '$telefono', '$direccion')";
					#mensaje de exito al guardar
					$result = mysqli_query($db,$sql);
					if ($result){
						$_SESSION['email'] = $email;
						$_SESSION['succes'] = "te has registrado";
						header('location: index.php');
						?>
						<?php
					}
				}
		}	
	}
	#seccion de logeo
	#cuando se preciona el btn iniciar pasa los siguiente
	if(isset($_POST['btnInicia'])){
		#se toman las variables ingresadas
		$email = $_POST['email'];
		$password = $_POST['password'];
		#se ven si se encuentran en la bd
		$sql = "SELECT * FROM usuario WHERE email = '$email' and password = '$password'";
		$result =	mysqli_query($db,$sql);	
		# si hay un 1 dato ingresado igual a la variable se inicia el pagina home
		if (mysqli_num_rows($result) == 1) {
			$_SESSION['email'] = $email;
			$_SESSION['succes'] = "has entrado";
			header('location: home.php');
		}	
	}	

 ?>