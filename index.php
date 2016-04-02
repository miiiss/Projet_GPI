<!DOCTYPE html>
<!-- Page d'accueil du site évènementiel Fun mouvement -->

<html>
<head>
	<!-- Cette balise sert à indiquer au navigateur d'afficher les accens des lettres -->
	<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="Styles/style_PA.css" /><!-- Appel du fichier CSS principal -->
		<link rel="stylesheet" type="text/css" href="Styles/petit_ecran.css" /><!-- Appel du fichier CSS du media queries -->
		<meta name="viewport" content="width=device-width" />
		<title>Fun mouvement</title>
</head>
<body>

	<p><h1>Fun mouvement</h1></p><!-- Titre de la page -->

		<div class="nav"><!-- Ce block ne contient que le menu de la page -->
			<ul class="navigation">
				<li><a href="#" class="text_grand">Accueil</a></li><!-- Accueil -->
				<li><a href="#" class="text_grand">S'incrire</a></li><!-- S'inscrire -->
				<li><a href="#" class="text_grand">Évènements</a>
					<ul>
						<li><a href="#">Pour les jeunes</a></li>
						<li><a href="#">Pour les adultes</a></li>
					</ul>
				</li><!-- Évènement -->
				<li><a href="#" class="text_grand">Se connecter</a></li><!-- Se connecter -->
				<li><a href="#" class="text_grand">Contacter</a></li><!-- Contacte -->
			</ul>
		</div>

	<p><hr></p> <!-- Ligne de séparation entre le menu et le slogan du site -->
		<p class="slogan">S'amuser partout en France</p>

	<!-- image au centre de la page -->
	<p><img src="Images/PA1.jpg" class="image"></p>

	<!-- footer contenant quelques information -->
	<footer>
		<p class="text_footer">Tout droits réservés  |  Université Paris-Sud  |  Iut d'Orsay</p>
			<p class="style_nom">André  |  Aucibi  |  Ebeyer  |  Zhang</p>
	</footer>

</body>
</html>