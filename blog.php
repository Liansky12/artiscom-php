<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Round" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/estilo_general.css">
	<link rel="stylesheet" href="assets/css/blog.css">
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
			<i class="material-icons-round">rss_feed</i>
			<h2>Blog</h2>
			<section>
				<section id="debates">
					<h3>Debates</h3>
					<article>
						<h4>¿Por qué las grandes empresas no promocionan a los pequeños artistas?</h4>
						<p>Es muy bien sabido que el éxito no llega sólo, es fruto del esfuerzo y perseverancia en los
							objetivos que uno mismo de plantea a lo largo del tiempo. Pero, ¿cómo reaccionarías si te
							dijeran que existen entes que opacan el natural progreso creativo y comercial de los nuevos
							escritores y artistas de la década? <a href="">Más información...</a></p>
					</article>
					<article>
						<h4>La relación entre la eduación y el arte</h4>
						<p>Desde que uno nace, estamos en constante aprendizaje, y son precisamente las primeras etapas
							de la vida, las más importantes en desarrollo humano. Sin embargo, la sociedad se esmera en
							enseñar y estimular principalmente el pensamiento lógico y racional, aquellas cualidades
							como el orden, el análisis, los resultados medibles, las cosas tangibles y todo lo
							cuantitativo que enmarca el hemisferio izquierdo. Y no se dejan a un lado estas cualidades,
							son muy importantes, pero se está dejando de lado el hemisferio derecho, aquel que nos
							conecta con la emoción, despierta la creatividad, la imaginación, la curiosidad y la
							empatía. Es por ello que <a href="">Más información...</a></p>
					</article>
				</section>

				<section id="extra">
					<h3>Información extra</h3>
					<article>
						<h4>El arte</h4>
						<p>El arte es el concepto que engloba todas las creaciones realizadas por el ser humano para
							expresar una visión sensible acerca del mundo, ya sea real o imaginario. Mediante recursos
							plásticos, lingüísticos o sonoros, el arte permite expresar ideas, emociones, percepciones y
							sensaciones.</p>
					</article>
				</section>

			</section>
		</div>
	</main>

	<footer id="footer">
		<img src="assets/img/cc_323x77.png" alt="Licencia CC Reconocimiento-NoComercial-SinObraDerivada 4.0 Internacional" title="Licencia CC Reconocimiento-NoComercial-SinObraDerivada 4.0 Internacional">
		<p>Esta página está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">licencia de Creative Commons.</a></p>
		<span><i class="material-icons-round" onclick="location='contacto.php'">man</i></span><a href="contacto.php" alt="contacto.php">Contacto</a>
	</footer>
</body>

</html>