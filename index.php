<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Round" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/estilo_general.css">
	<link rel="stylesheet" href="assets/css/index.css">
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
		<div id="contenedor">
			<div id="titulo">
				<span>ArtisCom</span>
			</div>
			<div id="animacion">
				<span>imaginación + dedicación = arte</span>
			</div>
			<div id="mosaico">
				<img src="assets/img/muestrario/9780466578077.png" alt="Imagen de demostración de un libro">
				<img src="assets/img/muestrario/9780660613123.png" alt="Imagen de demostración de un libro">
				<img src="assets/img/muestrario/9784061500204.png" alt="Imagen de demostración de un álbum musical">
				<img src="assets/img/muestrario/9785395135117.png" alt="Imagen de demostración de una fotografía">
				<img src="assets/img/muestrario/9786161812157.png" alt="Imagen de demostración de un arte digital">
				<img src="assets/img/muestrario/9789341304626.png" alt="Imagen de demostración de un álbum musical">
				<img src="assets/img/muestrario/9535634456754.jpg" alt="Imagen de demostración de un libro">
				<img src="assets/img/muestrario/9565348331264.png" alt="Imagen de demostración de un dibujo">
				<img src="assets/img/muestrario/9752234623565.png" alt="Imagen de demostración de una pintura">
				<img src="assets/img/muestrario/9987865763431.png" alt="Imagen de demostración de una pintura">
				<img src="assets/img/muestrario/9905644656435.png" alt="Imagen de demostración de un disco musical">
			</div>
			<section>
				<h2>Sobre nosotros</h2>
				<article>
					<h2>¿Quiénes somos?</h2>
					<span>Somos ArtisCom, una organización administrada por colaboradores reales que siguen un propósito
						 en común.</span>
				</article>
				<article>
					<h2>¿A qué nos dedicamos?</h2>
					<span>Nuestro propósito es dar visibilidad a nuevos artistas, diseñadores y autores que salen al
						mundo laboral por primera vez.</span>
				</article>
				<article>
					<h2>¿Qué ofrecemos?</h2>
					<span>Ofrecemos las <a href="./muestrario.php">creaciones y obras personales</a> de aquellos
						artistas que decidieron ceder parte de los derechos de sus creaciones a la organización para su
						posterior promoción.</span>
				</article>
			</section>
			<h2>Declaraciones de nuestros artistas</h2>
			<div id="contenedor-opiniones">
				<div class="opinion">
					<figure>
						<img src="assets/img/index/face_01.png" alt="Imagen representativa del cliente 1">
					</figure>
					<div>
						<h4>"Encontré un lugar perfecto para compartir mi música gracias a ArtisCom. Su ayuda me motivó
							a llegar a más gente."</h4>
						<p>- Estefania Caceres</p>
					</div>
				</div>
				<div class="opinion">
					<figure>
						<img src="assets/img/index/face_02.png" alt="Imagen representativa del cliente 2">
					</figure>
					<div>
						<h4>"Me dieron la oportunidad de unirme a su comunidad de trabajo de ArtisCom. Estoy muy
							agradecida por su compromiso con artistas como yo."</h4>
						<p>- Maria Gema</p>
					</div>
				</div>
				<div class="opinion">
					<figure>
						<img src="assets/img/index/face_03.png" alt="Imagen representativa del cliente 2">
					</figure>
					<div>
						<h4>"La campaña de promoción 2023 que hemos hecho en ArtisCom ha sido increíble. Me sentí tan
							apoyado y me ha ayudado a llegar a un público mayor que nunca."</h4>
						<p>- Antoni González</p>
					</div>
				</div>
			</div>
		</div>
	</main>

	<footer id="footer">
		<img src="assets/img/cc_323x77.png" alt="Licencia CC Reconocimiento-NoComercial-SinObraDerivada 4.0 Internacional" title="Licencia CC Reconocimiento-NoComercial-SinObraDerivada 4.0 Internacional">
		<p>Esta página está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">licencia de Creative Commons.</a></p>
		<span><i class="material-icons-round" onclick="location='contacto.php'">man</i></span><a href="contacto.php" alt="contacto.php">Contacto</a>
	</footer>
</body>

</html>