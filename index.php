<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Our talents by MyDigitalSchool</title>
		<?php include("includes/head.php"); ?>
		<link rel="stylesheet" type="text/css" href="/assets/css/home.css">
	</head>
	<body>
		<?php include("includes/header.php") ?>
		<article id="top">
			<div class="wrapper">
				<p>Bienvenue sur la plateforme de partage de</p>
				<h1>Our Talents</h1>
				<p id="students">Consultez nos nombreux profils étudiants ou</p>
				<p id="cta"><a href="nos-projets.php" class="btn black">Découvrez nos projets</a></p>
			</div>
		</article>
		<section id="search-area">
			<h2 class="wrapper">Rechercher un projet</h2>
			<form class="wrapper search-bar-form" action="nos-projets.php" method="GET">
				<div id="bar">
					<label for="search"><i class="fas fa-search"></i></label>
					<input type="search" name="search" placeholder="Rechercher..." id="search">
					<p><a href="#mic"><i class="fas fa-microphone"></i></a></p>
				</div>
				<button type="submit" class="btn black">Rechercher</button>
			</form>
		</section>
		<section id="last" class="wrapper">
			<h2>Les derniers projets mis en ligne</h2>
			<div>
				<?php for($i = 0; $i < 6; $i++) { ?>
					<article class="project-square">
						<a href="projet.php">
							<div class="picture">
								<figure>
									<img src="/assets/img/project_picture.webp" alt="Photo du project My Creative Week">
								</figure>
								<p class="students"><i class="fas fa-users"></i> 100 participants</p>
							</div>
							<div class="txt-area">
								<h3>My Creative week</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis velit non posuere cursus. Suspendisse in interdum metus, vel sollicitudin metus. Aenean quis nisl scelerisque, blandit ex.</p>
								<p class="date">Posté le 30 Sep. 2020</p>
							</div>
							<p><a href="projet.php" class="btn black">En savoir plus <span class="plus">+</span></a><p>
						</a>
					</article>
				<?php } ?>
			</div>
			<p><a href="nos-projets.php" class="btn black">Découvrir tous les projets</a></p>
		</section>
		<?php include("includes/viewed.php") ?>
		<?php include("includes/footer.php") ?>
	</body>
</html>