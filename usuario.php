<?php
require_once("./funciones.php");
require_once("./conexion.php");
$conexionSingleton = ConexionBD::obtenerInstancia();
$conexion = $conexionSingleton->obtenerConexion();
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>Layoud</title>
	<link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Round" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/estilo_general.css">
	<link rel="stylesheet" type="text/css" href="assets/css/usuario.css">
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
			<i class="material-icons-round">person</i>
			<h2>Tus datos</h2>
			<?php
			$nombre_datos = [
				"u_user" => "Nombre de usuario",
				"u_name" => "Nombre",
				"pwd" => "Contraseña",
				"surname1" => "Apellido 1",
				"surname2" => "Apellido 2",
				"phone" => "Número de teléfono",
				"u_address" => "Dirección",
				"postal_code" => "Código Postal",
				"country" => "País",
				"interests" => "Interéses",
				"suggestions" => "Sugerencias",
				"use_ads" => "¿Comunicaciones comerciales?",
				"creation" => "Fecha de creación"
			];
			$datos = obtenerDatos($conexion, $_SESSION["login"]);
			if (!empty($datos)) {
				foreach ($datos as $key => $value) {
					switch ($key) {
						case 'u_id':
							break;
						case 'shop_car':
							break;
						case 'pwd':
							echo "<p class='info_usuario'><span class='info_usuario_titulo'>" . $nombre_datos[$key] . "</span>: " . (isset($value) ? "*********" : "<span class='info_usuario_no'>[sin asignar]</span>") . "</p>";
							break;
						case 'use_ads':
							echo "<p class='info_usuario'><span class='info_usuario_titulo'>" . $nombre_datos[$key] . "</span>: " . (isset($value) && $value === 1 ? "Sí" : "No") . "</p>";
							break;
						default:
							echo "<p class='info_usuario'><span class='info_usuario_titulo'>" . $nombre_datos[$key] . "</span>: " . (isset($value) ? $value : "<span class='info_usuario_no'>[sin asignar]</span>") . "</p>";
							break;
					}
				}
			} else {
				echo "Error al obtener los datos.";
			}

			?>
		</div>
	</main>

	<footer id="footer">
		<img src="assets/img/cc_323x77.png"
			alt="Licencia CC Reconocimiento-NoComercial-SinObraDerivada 4.0 Internacional"
			title="Licencia CC Reconocimiento-NoComercial-SinObraDerivada 4.0 Internacional">
		<p>Esta página está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">licencia
				de
				Creative Commons.</a></p>
		<span><i class="material-icons-round" onclick="location='contacto.php'">man</i></span><a href="contacto.php"
			alt="contacto.php">Contacto</a>
	</footer>
</body>

</html>