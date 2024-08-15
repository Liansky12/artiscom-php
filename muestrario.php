<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>Muestrario</title>
	<link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Round|Material+Icons+Outlined"
		rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/estilo_general.css">
	<link rel="stylesheet" href="assets/css/muestrario.css">
	<!-- Si no has instalado Axios a través de npm -->
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js" defer></script>
	<script src="./assets/scripts/muestrario.js" type="module"></script>
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
			<div id="cabecera">
				<h2>Muestrario</h2>
				<div id="contenedor-icon">
					<i class="material-icons-outlined">shopping_cart</i>
					<div>
						<span>0</span> <!-- Contador de productos, implementar con JS -->
					</div>
				</div>
			</div>
			<div id="filtradores">
				<ul>
					<li><label for="All">Todo</label></li>
					<li><label for="libros">Libros</label></li>
					<li><label for="revistas">Revistas</label></li>
					<li><label for="discos">Discos</label></li>
					<li><label for="albumes">Álbumes</label></li>
					<li><label for="pinturas">Pinturas</label></li>
					<li><label for="arte_digital">Arte Digital</label></li>
				</ul>
			</div>
			<div id="contenedor-items"></div>
			<div id="datos-tecnicos">
				<h2>Datos de obras</h2>
				<table>
					<thead>
						<tr>
							<th>ISBN / Código</th>
							<th>Tipo</th>
							<th>Título / Nombre</th>
							<th>Autor / Artista</th>
							<th>Año pub.</th>
							<th>Género / Tipo</th>
							<th>Precio</th>
						</tr>
					</thead>
					<tbody id="cuerpo-tabla-datos"></tbody>
				</table>
			</div>
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

	<template>
		<div class="item">
			<figure>
				<img src="#" alt="#">
			</figure>
			<div>
				<h3>Nombre Obra</h3>
				<span>Autor</span>
				<span>Precio</span>
				<button>Añadir al carrito</button>
			</div>
		</div>
	</template>

	<template>
		<tr>
			<td>978-0-999-96590-2</td>
			<td>Libro</td>
			<td>El cazador de sueños</td>
			<td>Sarah Jones</td>
			<td>2020</td>
			<td>Fantasía</td>
			<td>16.99</td>
		</tr>
	</template>
</body>

</html>