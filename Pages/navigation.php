<!-- Page uniquement pour la barre de navigation -->

<style type="text/css">
/* Style pour toute le page */

	body {
		margin: 0;
	}

	/* Menu de navigation du site */
	.navigation {
		/* On ajoute une marge en haut */
		margin-top: -106px;
		margin-right: 10px; /* On décale un peu vers la gauche */
		text-align: right;	/* On oriente le texte vers la droite */
	}

	.navigation ul {
		margin: 0px; 
		padding: 0;
		list-style: none; 
		/* On aligne le texte du menu vers la droite */
		text-align: right;
	}

	.navigation li { 
		text-align: center; 
		display: inline-block;
		position: relative; 
		font-size: 30px;
		font-family: "Savoye LET";
	}

	.navigation a {	
		text-decoration: none;
		display: block; 
		color: white;	
		width: 130px; /* On redut la largeur du menu */
		height: 35px; 	
		line-height: 50px;
	}

	.navigation ul { 
		left: -999em;
		position: absolute
	}

	/* Le sous menu */
	.navigation li:hover > ul {
		margin-top: 5px; 
		left: 0;
		font-size: 30px;
		background-color: #BBAE98;
	}

	.navigation li li:hover > ul {
		left: 150px; 
		top: 0;
	}

	.navigation a:hover { 
		color: #666; 
		background: #ccc
	}

	/* Style du block div qui contient la barre de navigation */
	.barre_nav {
		background-color: #BBAE98;
		height: 10%;
	}

	.titre_groupe { /* Style du titre du groupe 'fun mouvelent' */
		/* On ajoute une marge internes */
		padding: 9px;
		/* Taille, couleur et police de caractère */
		font-family: "Savoye LET";
		font-size: 45px;
		color: white;
		/* On avance le texte vers la gauche */
		margin-left: 5%;
		/* On remonte un chouya le titre vers le haut */
		margin-top: -3px;
	}

</style>
	
<style type="text/css">
/* Style pour le medias queries */
	
	/* Modifications des styles pour les ecrans de 680px max */
@media screen and (max-width: 1000px) and (min-width: 680px)
{ 
	/* Menu de navigation du site */
	.navigation {
		/* On fait déscendre le menu */
		margin-top: -82px;	
	}

	.navigation li { 
		/* On réduit la taille du texte */ 
		font-size: 20px;
	}

	.navigation a {		
		width: 100px; /* On réduit la largeur du menu */
	}

	/* Style du block div qui contient la barre de navigation */
	.barre_nav {
		/* On réduit la hauteur du div */
		height: 6%;
	}

	.titre_groupe { 
		/* On réduit la taille du texte */
		font-size: 30px;
		/* On recule le texte un peu vers la gauche */
		margin-left: 1%;
	}
}

/**
********************************************************************** 
**/

/* Modifications des styles pour les ecrans de 480px max (mobile) */
@media screen and (min-width: 500px) and (max-width: 680px) 
{ 
	/* Pour ici on crée des nouveaux style */

	.navigation, .navigation ul {
	  padding:0;
	  margin-top: -120px;
	  margin-left: 0;
	  list-style:none;
	  width: 180px; /* seule ligne rajoutée */
	}

	.navigation li {
	  position: relative;
	  background:#BBAE98; /* juste pour cacher le texte de la page en-dessous */
	  left: -50px;
	}

	.navigation a {
	  display:block;
	  text-decoration: none;
	  color: white;
	}

	.navigation ul {
	  position: absolute;
	  left:-999em;
	}

	.navigation li:hover ul {
	  top: 0;
	  /* On met un fond gris */
	  background-color: #BBAE98;
	  /* On fait afficher le sous menu près du menu */
	  left: 130px;
	}

	/* Style du block div qui contient la barre de navigation */
	.barre_nav {
		/* On réduit la hauteur du div */
		height: 26%;
	}

	.titre_groupe { 
		/* On réduit la taille du texte */
		font-size: 45px;
		/* On recule le texte un peu vers la gauche */
		text-align: center;
	}

}

/**
********************************************************************** 
**/

/* Modifications des styles pour les ecrans de 480px max (mobile) */
@media screen and (max-width: 480px) 
{ 
	.navigation, .navigation ul {
	  padding:0;
	  margin-top: -120px;
	  margin-left: 0;
	  list-style:none;
	  width: 180px; /* seule ligne rajoutée */
	}

	.navigation li {
	  position: relative;
	  background:#BBAE98; /* juste pour cacher le texte de la page en-dessous */
	  left: -50px;
	}

	.navigation a {
	  display:block;
	  text-decoration: none;
	  color: white;
	}

	.navigation ul {
	  position: absolute;
	  left:-999em;
	}

	.navigation li:hover ul {
	  top: 0;
	  /* On met un fond gris */
	  background-color: #BBAE98;
	  /* On fait afficher le sous menu près du menu */
	  left: 130px;
	}

	/* Style du block div qui contient la barre de navigation */
	.barre_nav {
		/* On réduit la hauteur du div */
		height: 26%;
	}

	.titre_groupe { 
		/* On change juste la côté où s'affiche le titre */
		text-align: right;
	}

}

</style>

<!-- Barre de navigation -->
	<div class="barre_nav"><!-- Ce block ne contient que le menu de la page -->
	<p class="titre_groupe">Fun mouvement</p><!-- Titre de la page -->
		<ul class="navigation">
			<li><a href="#">Accueil</a></li><!-- Accueil -->
				<li><a href="#">S'incrire</a></li><!-- S'inscrire -->
				<li><a href="#">Évènements</a>
					<ul>
						<li><a href="#">Pour les jeunes</a></li>
						<li><a href="#">Pour les adultes</a></li>
					</ul>
				</li><!-- Évènement -->
			<li><a href="#">Se connecter</a></li><!-- Se connecter -->
			<li><a href="#">Contacter</a></li><!-- Contacte -->
		</ul>
	</div>




