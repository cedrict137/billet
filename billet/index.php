<?php require_once("controller/PostCtrl.php"); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Billet simple pour l'Alaska</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>

	<body class="is-preload">

<section id="header">
	<header class="major">
		<h1>BILLET SIMPLE POUR L'ALASKA</h1>
		<p>Jean Forteroche</p>
	</header>

	<div class="container">
		<ul class="actions special">
			<li><a href="#one" class="button primary scrolly">Introduction</a></li>
			<li><a href="#publication" class="button primary scrolly">Evadez-vous</a></li>
			<li><a href="#footer" class="button primary scrolly">Contact</a></li>
		</ul>
	</div>
</section>

		<!-- Introduction -->
	<section id="one" class="main special">
		<div class="container">
			<div class="content" id="introduction">
				<header class="major">
					<h2>Introduction</h2>
				</header>

				<p>L'étoile montante de la littérature, Jean Forteroche (Quatre jours au paradis, Et si c'était vous?, La mouette d'Istanbul, Le vase enchanté etc.) revient nous faire rêver avec son nouveau roman "Billet simple pour l'Alaska".</br>Vous le découvrirez chapitre par chapitre. Vous, lecteurs, aurez l'honneur de pouvoir commenter et débattre à propos de chaque publication dans un espace de commentaire dédié à cet effet. Amusez-vous, lisez, débattez et surtout voyagez au coeur de l'Alaska.</p>
			</div>

			<a href="#publication" class="goto-next scrolly">Next</a>
		</div>
	</section>

		

		<!-- Publications -->
	<section id="publication" class="main special">
		<div class="container">
			<div id="posts" class="content">
				<header class="major">
					<h2>Publications</h2>
				</header>

				<div id="publications">
					<nav>
						<ul class="navigation">
					{{ nav }}	<!-- Affiche le titres des chapitres -->
						</ul>			
					</nav>
				</div>			
			</div>
					<a href="#footer" class="goto-next scrolly">Next</a>
		</div>
	</section>

		<!-- Contact -->
	<section id="footer">
		<div class="container">
			<header class="major">
				<h2 id="contact">Contact</h2>
			</header>

			<form method="post" action="#">
				<div class="row gtr-uniform">
					<div class="col-6 col-12-xsmall"><input type="text" name="name" id="name" placeholder="Nom" /></div>
					<div class="col-6 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Email" /></div>
					<div class="col-12"><textarea name="message" id="message" placeholder="Message" rows="4"></textarea></div>
					<div class="col-12">
						<ul class="actions special">
							<li><input type="submit" value="Envoyer" class="primary" /></li>
						</ul>
					</div>
				</div>
			</form>
		</div>

	</section>

		<footer>
			<ul class="icons">
				<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
			</ul>

			<ul class="copyright">
				<li><a href="#header">&copy; JEAN FORTEROCHE</a></li>
				<li><a href="login.php">CONNEXION</a></li>
			</ul>
		</footer>




	</body>
</html>