<section id="view">
	<h2 class="wrapper">Les projets les plus visités</h2>
	<div class="wrapper">
		<?php for($i = 0; $i < 3; $i++) { ?>
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
					<p><a href="projet.php" class="btn black">En savoir <span>+</span></a><p>
				</a>
			</article>
		<?php } ?>
	</div>
	<p><a href="nos-projets.php" class="btn black">Voir les autres projets</a></p>
</section>