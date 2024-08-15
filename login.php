<?php 
session_start();
if (!empty($_COOKIE["login"])) header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>Log In</title>
	<link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Round" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/estilo_general.css">
	<link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
	<header id="sticky-menu">
		<span onclick="location='index.php'">ArtisCom</span>
		<nav>
		<ul>
				<i class="material-icons-round" onclick="location='index.php'">home</i>
				<li><a href="index.php" alt="Inicio">Inicio</a></li>
				<i class="material-icons-round" onclick="location='contacto.php'">man</i>
				<li><a href="contacto.php" alt="Conócenos">Conócenos</a></li>
				<i class="material-icons-round" onclick="location='muestrario.php'">storefront</i>
				<li><a href="muestrario.php" alt="Muestrario">Muestrario</a></li>
				<i class="material-icons-round" onclick="location='blog.php'">rss_feed</i>
				<li><a href="blog.php" alt="Blog">Blog</a></li>
				<?php
				if (empty($_SESSION["login"])) {
					echo "<i class=\"material-icons-round\" onclick=\"location='login.php'\">login</i>
					<li><a href=\"login.php\" alt=\"Iniciar Sesión\">Iniciar Sesión</a></li>";
				} else {
					echo "<i class=\"material-icons-round\" onclick=\"location='logout.php'\">logout</i>
					<li><a href=\"logout.php\" alt=\"Cerrar Sesión\">Cerrar Sesión</a></li>";
					echo "<i class=\"material-icons-round\" onclick=\"location='usuario.php'\">manage_accounts</i>
					<li><a href=\"usuario.php\" alt=\"Yo\">Yo</a></li>";
				}
				?>
			</ul>
		</nav>
	</header>

	<main id="contenido-principal">
		<!-- Contenido principal de la página aquí -->
		<div>
			<div id="square">
				<i class="material-icons-round">login</i>
				<h2>Log In</h2>
				<form id="form" action="procesar_login.php" method="post">
					<div class="input-container">
						<input id="user" name="user" type="text" placeholder=" " required>
						<label for="user">Usuario</label>
					</div>
					<div class="input-container">
						<input id="pwd" name="pwd" type="password" placeholder=" " required>
						<label for="pwd">Contraseña</label>
					</div>
					<button type="submit">Iniciar sesión</button>
				</form>
				<span>¿No tienes una cuenta? Empieza por <a href="registro.php">aquí</a></span>
				<span class="errores">
					<?php echo $_COOKIE["errores"] ?? false; ?>
				</span>
			</div>

		</div>
	</main>

	<footer id="footer">
		<img src="assets/img/cc_323x77.png" alt="Licencia CC Reconocimiento-NoComercial-SinObraDerivada 4.0 Internacional"
			title="Licencia CC Reconocimiento-NoComercial-SinObraDerivada 4.0 Internacional">
		<p>Esta página está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">licencia de
				Creative Commons.</a></p>
		<span><i class="material-icons-round" onclick="location='contacto.php'">man</i></span><a href="contacto.php"
			alt="contacto.php">Contacto</a>
	</footer>
</body>

</html>