<!DOCTYPE HTML>
<html>
	<head>
		<title>{{ title }} - Billet simple pour l'Alaska</title>
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
</section>

			<!-- Chapitre -->
		<section id="one" class="main special">
			<div class="container">
					<div class="content" id="introduction">
						<header class="major">
							<h2>{{ title }}</h2>
							<h3>{{ published }}</h3>
							<p>{{ content }}</p>
						</header>
					</div>
					<a href="#footer" class="goto-next scrolly">Next</a>
			</div>
		</section>

			<!-- Commentaires -->
		<section id="footer">
			<div class="container">
				<header class="major">
					<h2 id="contact">Commentaires</h2>
				</header>

				<div class="comment">
							<h2>{{ user_name }}</h2>
							<h3>{{ published }}</h3>
							<p>{{ content }}</p>
				</div>
			</div>

		<form method="post" action="#">
	<div class="row gtr-uniform">
		<div class="col-6 col-12-xsmall"><input type="text" name="user_name" id="user_name" placeholder="Pseudo" /></div>
		<div class="col-6 col-12-xsmall"><input type="text" name="content" id="content" placeholder="Votre commentaire" /></div>

		<div class="col-12">
			<ul class="actions special">
				<li><input type="submit" value="Publier" class="primary" /></li>
			</ul>
		</div>
	</div>
</form>

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
			</section>

<?php include("scriptcall.html"); ?>

	</body>
</html>