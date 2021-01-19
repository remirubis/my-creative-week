<!DOCTYPE html>
<html>
	<head>
		<title>My Creative Week | Our talents</title>
		<?php include("includes/head.php"); ?>
		<link rel="stylesheet" type="text/css" href="/assets/css/project.css">
	</head>
	<body>
		<?php include("includes/header.php") ?>
		<section class="top">
			<figure>
				<img src="/assets/img/project_picture.webp" alt="Image du projet My Creative Week">
			</figure>
			<ul class="ariane wrapper">
				<li><a href="/index.php">Accueil</a></li>
				<li><a href="/nos-projets.php">Nos projets</a></li>
				<li>My Creative week</li>
			</ul>
			<div class="wrapper project-title">
				<h1>My Creative Week</h1>
				<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis velit non posuere cursus. Suspendisse in interdum metus, vel sollicitudin metus. Aenean quis nisl scelerisque, blandit ex.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis velit non posuere cursus. Suspendisse in interdum metus, vel sollicitudin metus. Aenean quis nisl scelerisque, blandit ex.Lorem ipsum dolor sit amet.</p>
			</div>
			<ul class="data">
		 		<li><i class="fas fa-users"></i> 100 participants</li>
		 		<li><i class="fas fa-map-marker-alt"></i> My Digital School Paris</li>
		 		<li><i class="far fa-clock"></i> 10 Septembre 2020</li>
	 		</ul>
		</section>
		<article class="wrapper">
			<h2>Brief</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis velit non posuere cursus. Suspendisse in interdum metus, vel sollicitudin metus. Aenean quis nisl scelerisque, blandit ex.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis velit non posuere cursus. Suspendisse in interdum metus, vel sollicitudin metus. Aenean quis nisl scelerisque, blandit ex.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis velit non posuere cursus. Suspendisse in interdum metus, vel sollicitudin metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis velit non posuere cursus. Suspendisse in interdum metus, vel sollicitudin metus. Aenean quis nisl scelerisque, blandit ex.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis velit non posuere cursus. Suspendisse in interdum metus, vel sollicitudin metus. Aenean quis nisl scelerisque, blandit ex.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis velit non posuere cursus. Suspendisse in interdum metus, vel sollicitudin metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis velit non posuere cursus. Suspendisse in interdum metus, vel sollicitudin metus. Aenean quis nisl scelerisque, blandit ex.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis velit non posuere cursus. Suspendisse in interdum metus, vel sollicitudin metus. Aenean quis nisl scelerisque, blandit ex.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis velit non posuere cursus. Suspendisse in interdum metus, vel sollicitudin metus.</p>
			<p><a href="/data/projets/0/brief.pdf" class="btn" download><i class="fas fa-download"></i> Télécharger le brief</a></p>
			<h2>Propositions des étudiants</h2>
			<div class="list-projects">
			 <?php for($i = 0; $i < 3; $i++) { ?>
			 	<article>
			 		<?php if($i == 0) { ?>
			 			<p aria-hidden="true" class="rank"><i class="fas fa-award"></i></p>
			 		<?php } ?>
			 		<figure>
			 			<img src="/assets/img/project_picture.webp" alt="Photo du project My Creative Week">
			 		</figure>
			 		<div class="content">
				 		<h2><a href="#">Our talents</a></h2>
				 		<div>
				 			<div>
						 		<p><i class="fas fa-users"></i> 4 étudiant</p>
						 		<p><i class="fas fa-map-marker-alt"></i> My Digital School Paris</p>
				 			</div>
					 		<p><i class="fas fa-award"></i> 1er/20</p>
				 		</div>
				 		<p class="desc"><span>Avis du jury:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis velit non posuere cursus. Suspendisse in interdum metus, vel sollicitudin metus.</p>
				 		<p><a href="#" class="btn">Support(s) de l'équipe</span></a></p>
			 		</div>
			 	</article>
			<?php } ?>
			<ul class="page">
				<li><a href="#prev" aria-labelledby="desc-prev"><i class="fas fa-angle-double-left"></i><span id="desc-prev">Précédent</span></a></li>
				<li aria-hidden="true"></li>
				<li>1</li>
				<li><a href="#page2">2</a></li>
				<li><a href="#next" aria-labelledby="desc-next"><i class="fas fa-angle-double-right"></i><span id="desc-next">Suivant</span></a></li>
			</ul>
			<h2>Compétences mises en pratique</h2>
			<ul class="items-list">
				<li>Développement Web</li>
				<li>UI/UX Design</li>
				<li>Marketing</li>
				<li>Design</li>
				<li>Gestion de projet</li>
				<li>Télétravail</li>
				<li>Travail d'équipe</li>
			</ul>
			<h2>Campus participants</h2>
			<ul class="items-list">
				<li>Paris</li>
				<li>Nantes</li>
				<li>Saint-Quentin-En-Yvelyne</li>
				<li>Angers</li>
			</ul>
		</article>
		<?php include("includes/viewed.php") ?>
		<?php include("includes/footer.php") ?>
	</body>
</html>