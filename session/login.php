<?php 
	require_once 'proceso.php';
	$respuesta = verificar_usuario($_POST);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta description="Asesores Profesionales en Linea" />
	<title>AsCyCap.com</title>
</head>
<body>
	<header>
		<figure id="logo">
			<img src="logo.png">
		</figure>
		<h1>
			AsCyCap.com: la mejor pagina de asesores en linea
		</h1>
	</header>
	<nav>
		<ul>
			<li><a href="#">Inicio</a></li>
			<li><a href="#">Quienes somos</a></li>
			<li><a href="#">Temarios</a></li>
			<li><a href="#">Precios</a></li>
			<li><a href="#">Misión</a></li>
			<li><a href="#">Visión</a></li>
		</ul>
	</nav>
	<section id="contenido">
		<form action="login.php" method="POST">
				<caption>Iniciar Sesión AsCyCap</caption>
			<div>
				<label for="email">Email</label>
				<input type="email" id="email" name="email" placeholder="Ingresa tu email" required/>
			</div>
			<div>
				<label for="password">Contraseña</label>
				<input type="password" id="password" name="password" placeholder="*******" required/>
			</div>
			<div>
				<input type="submit" value="Entrar">
			</div>
		</form>
	</section>
	<footer>
		<p>
			<strong>Powered by thepers</strong>
		</p>
	</footer>

</body>
</html>
