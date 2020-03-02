<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Accueil</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="asset/css/reset.css">
	<link rel="stylesheet" href="asset/css/all.min.css">
	<link rel="stylesheet" href="asset/css/main.css">

	<script src="asset/js/jquery-3.4.1.min.js"></script>

	<script>
	
	//on attend la fin du chargement du contenu de la page
	$(function(){

		//on utilise la fonction de pop-in
		//alert('Hello world !');

		//on cree l'action à faire lors d'un clic sur le #burger
		$('#burger').click(function(){

			//on cible la balise body et on lui ajoute la classe 'navOpen'
			$('body').addClass('navOpen');

		});//fin du click #burger


		$('#close').click(function(){
			$('body').removeClass('navOpen');
		});

	//fin du chargement
	});
	</script>
	<!-- L'image de fond à mettre directement dans le css -->
</head>
</html>
<body>
	
	<header>
		
		<figure>
				<img class="logo" src="asset/img/logo_ampelino.png" alt="logo">
		</figure>

		<!-- Menu en haut à revoir avec le truc en php int etc-->	
		<button id="burger">Menu</button>

		<nav>
			<button id="close">Close</button>
				<ul>
					<li><a href="index.html">Qui sommes nous</a></li>
					<li><a href="#">Nos vin/spiritueux</a></li>
					<li><a href="generic.html">contact</a></li>				
				</ul>			
		</nav>

	</header>

	<article class="banner">
		<div id="grand-titre">
		<h1 class="h1">AMPE</h1>
		<h1 class="h1-1"><br>LINO</h1>
		</div>

		<div class="presentation">
			<h2> Présentation</h2>
			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>

		<ul>
			<li>
				<a href="#" class="button">Connexion</a>
			</li>
		</ul>
		
	</article>

 <?php include ('asset/inc/footer.inc.php'); ?>
</body>
</html>