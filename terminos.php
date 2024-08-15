<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>Términos y Condiciones</title>
	<link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Round" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/estilo_general.css">
	<link rel="stylesheet" href="assets/css/terminos.css">
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
			<i class="material-icons-round">gavel</i>
			<h2>Términos y Condiciones</h2>
			<section>
				<h3>Artículo 1. Información relevante</h3>
				<article>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, architecto qui tenetur odit dolor at
					nobis quae dolorem modi? Nesciunt ipsa sint distinctio, repellat veniam iusto. Repellendus voluptate
					beatae in. Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, alias id sapiente, quod
					maiores ullam omnis qui excepturi cupiditate voluptatibus voluptates fugit quo culpa, dolor numquam
					officia aliquid perspiciatis debitis. Lorem ipsum dolor sit amet consectetur adipisicing elit.
					Expedita aut eveniet vel sapiente alias iste dignissimos. Dicta, voluptas esse veritatis vel
					voluptatem quo similique consectetur iure quod saepe commodi corporis! Lorem ipsum dolor sit amet
					consectetur adipisicing elit. Amet harum, tempora ex deleniti nisi eligendi fugit ad ducimus omnis
					quia exercitationem reiciendis. Sint autem rerum nihil? Non quasi atque consequatur.
				</article>
				<h3>Artículo 1.1. Servicio ofrecido</h3>
				<article>
					<h4>Sobre nuestros proveedores</h4>
					Amet voluptatibus delectus assumenda fuga iure quibusdam animi veniam laboriosam aspernatur,
					praesentium dolores consequatur placeat
					asperiores similique accusantium perferendis, culpa, aut distinctio? Lorem ipsum dolor sit amet
					consectetur adipisicing elit. Esse eligendi suscipit harum enim doloremque explicabo nemo maxime!
					Tempora dolores, aliquam architecto similique quo quae dignissimos odio, autem numquam debitis
					possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam soluta ut quisquam
					deserunt perspiciatis necessitatibus temporibus omnis, dignissimos eligendi officia at ea, error
					doloremque nobis possimus, dolor rerum sint provident! Lorem ipsum dolor sit amet, consectetur
					adipisicing elit. Iste quisquam veniam assumenda enim in delectus at possimus rerum officia
					doloremque. Fuga minus labore error architecto amet ipsa similique debitis quia! Lorem ipsum dolor
					sit amet consectetur adipisicing elit. Unde et alias tenetur quidem. Explicabo possimus minima optio
					saepe perferendis temporibus vel numquam quas necessitatibus quam quae illum, omnis rem nisi!
				</article>
				<h3>Artículo 1.2. Licencia y uso autorizado</h3>
				<article>
					Adipisicing elit. Laborum architecto dolorum cum odit illo
					sequi quo, molestiae dolorem, minima officia fuga veritatis neque debitis aspernatur! Laborum, nam?
					Pariatur, quisquam explicabo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non odio
					quo ex nisi aut aspernatur, earum cumque, cum sit pariatur autem. Quod illum provident odio corporis
					voluptate adipisci reiciendis? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae,
					vero similique. Minus quos omnis minima labore maiores dolorem vel nisi, repudiandae hic praesentium
					explicabo, quas dolore porro. Recusandae, necessitatibus facilis. Lorem ipsum dolor sit, amet
					consectetur adipisicing elit. Recusandae, et officia? Voluptas laudantium, sequi quaerat, sed
					tempora aut, voluptatum similique magnam dolores totam delectus amet placeat nemo ut ipsum eum.
				</article>
				<h3>Artículo 1.3. Política de reembolso y devolución</h3>
				<article>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam consequuntur, iusto at tempora est
					earum veniam quia aut, assumenda similique facilis sequi architecto aliquam repellat, omnis error
					tenetur quibusdam fuga. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quam
					architecto assumenda earum odio aspernatur eum velit, voluptate itaque commodi porro, doloribus
					repudiandae dolore sequi maiores? Autem quaerat iusto quo. Lorem, ipsum dolor sit amet consectetur
					adipisicing elit. Cupiditate recusandae quasi impedit expedita nisi fugit itaque consequatur quaerat
					vitae non maxime rem officia, quas dicta. Dolor veniam nulla recusandae hic! Lorem ipsum dolor sit
					amet consectetur, adipisicing elit.
					<article>
						<h4>Derecho de desistimiento para consumidores de la UE</h4>
						Reprehenderit sed omnis tempora eveniet sit accusamus fuga quae
						dolorem, eligendi totam? Velit illo dicta culpa voluptatem blanditiis. Et tempora voluptate
						laudantium. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae possimus non
						voluptatibus amet eius modi doloribus soluta rem eum sunt! Sequi et voluptate dolor ex ipsam
						tenetur quidem eos? Laboriosam. Lorem ipsum dolor sit amet consectetur, adipisicing elit.
						Suscipit
						neque, molestiae similique deserunt autem quam corporis exercitationem dolorum et dolor, vel
						dolores
						ipsum id sit officiis consequatur iure nobis corrupti. Lorem ipsum dolor, sit amet consectetur
						adipisicing elit. Aspernatur eaque, debitis suscipit officia ut maxime culpa sequi vero fuga hic
						deleniti
						sit, in nihil aliquid modi earum! At, reiciendis quisquam.
					</article>
				</article>
				<h3>Artículo 2. Política de privacidad</h3>
				<article>
					<h4>Los datos que recolectamos</h4>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum animi totam velit debitis ex,
					repellendus veniam laudantium est ullam blanditiis nobis quia placeat sapiente mollitia! Dolore
					doloremque temporibus blanditiis incidunt? Lorem ipsum dolor sit amet consectetur adipisicing
					elit.
					Soluta nesciunt voluptatum maxime eos, aut maiores voluptatem voluptas reprehenderit dignissimos
					facere non totam recusandae. Reprehenderit earum incidunt perferendis officiis molestiae dolore?
					Lorem ipsum dolor sit amet consectetur adipisicing elit.

					<h4>Tratamiendo de datos personales</h4>
					Placeat labore suscipit fugit repudiandae
					deleniti illo quo reiciendis sapiente voluptatem cumque, sint, sit expedita odit explicabo fuga
					nostrum reprehenderit porro recusandae! Lorem ipsum dolor sit amet consectetur adipisicing elit.
					Illo, vitae quidem reprehenderit id maxime consequuntur provident nam architecto cupiditate!
					Asperiores, praesentium. Perferendis ratione provident nisi assumenda id doloremque maxime
					magnam.
					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, ab obcaecati eveniet doloremque
					eaque in possimus sapiente modi beatae est ex quod error autem blanditiis ut consectetur nihil
					pariatur accusantium? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus
					laudantium
					libero facilis quod, eum, perferendis voluptate dolores distinctio laboriosam aliquid incidunt
					pariatur qui, at soluta porro sunt praesentium alias. Provident.

				</article>
				<h3>Artículo 2.1. Confidencialidad de los datos personales</h3>
				<article>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio fuga officia itaque voluptatibus
					fugiat! Saepe incidunt commodi quibusdam ducimus doloremque quo molestiae sapiente aliquid
					perferendis! Porro optio adipisci iusto enim. Lorem ipsum dolor sit amet consectetur adipisicing
					elit. Consequuntur enim dignissimos voluptas, illum deserunt amet accusamus neque atque hic,
					deleniti adipisci repudiandae iste doloremque magnam velit! Itaque sapiente sit quasi. Lorem ipsum
					dolor, sit amet consectetur adipisicing elit. Delectus, cupiditate, nesciunt atque facilis unde
					fugiat laboriosam, commodi esse reiciendis qui est iusto. Facilis eius odit quae cum nulla mollitia
					neque!
				</article>
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