<!DOCTYPE html>
<html>
	<head>
		<title>Nos projets | Our talents</title>
		<?php include("includes/head.php"); ?>
		<link rel="stylesheet" type="text/css" href="/assets/css/projects.css">
		<script type="text/javascript">
			$(function() {
				$('.btn-filter').click(function(e) {
					if($(this).html() == '<i class="fas fa-times"></i> Fermer') {
						$(".filter").css('display', 'none');
						$(this).html('<i class="fas fa-filter"></i> Filtre');
					} else {
						$(".filter").css('display', 'block');
						$(this).html('<i class="fas fa-times"></i> Fermer');
					}
				  e.preventDefault();
				});
				$('.clear').click(function(e) {
					if($('.btn-filter').html() == '<i class="fas fa-times"></i> Fermer') {
						$(".filter").css('display', 'none');
						$('.btn-filter').html('<i class="fas fa-filter"></i> Filtre');
					}
				});
			})
		</script>
	</head>
	<body>
		<?php include("includes/header.php") ?>
		<div class="wrapper page-title">
			<h1>Nos projets</h1>
			<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis velit non posuere cursus. Suspendisse in interdum metus, vel sollicitudin metus. Aenean quis nisl scelerisque, blandit ex.Lorem ipsum dolor sit amet.</p>
		</div>
		<ul class="ariane wrapper">
			<li><a href="/index.php">Accueil</a></li>
			<li>Nos projets</li>
		</ul>
		<section>
			<form class="wrapper search-bar-form" method="GET" action="#">
				<div id="bar">
					<label for="search"><i class="fas fa-search"></i></label>
					<input type="search" name="search" placeholder="Rechercher..." id="search">
					<p><a href="#mic"><i class="fas fa-microphone"></i></a></p>
				</div>
				<div class="line-btn">
					<button type="submit" class="btn">Rechercher</button>
					<button class="btn btn-filter"><i class="fas fa-filter"></i> Filtrer</button>
				</div>
			</form>
		</section>
		<section class="filter wrapper">
			<form>
				<div class="left">
					<h2>Recherche précise</h2>		
					<div>
						<label for="campus">Campus</label>
						<select name="campus" id="campus">
						  <option value="angers">Angers</option>
						  <option value="nantes">Nantes</option>
						  <option value="paris">Paris</option>
						  <option value="rennes">Rennes</option>
						  <option value="saint-quentin-en-yveline">Saint-Quentin-en-Yvelines</option>
						</select>
					</div>
					<div>
						<label for="promos">Promotions</label>
						<select name="promos" id="promos">
						  <option value="b1">B1 - Cycle Web & Digital</option>
						  <option value="b2">B2 - Cycle Web & Digital</option>
						  <option value="b3_ux">B3 - UX/UI design</option>
						  <option value="b3_dev">B3 - Web development</option>
						  <option value="b3_ebusiness">B3 - E-business</option>
						  <option value="mba1">MBA 1 - ...</option>
						  <option value="mba2">MBA 2 - ...</option>
						</select>
					</div>
					<div>
						<label for="student">Etudiants</label>
						<input list="students" type="text" id="student">
						<datalist id="students">
						  <option value="Rémi RUBIS"></option>
						  <option value="Claudia PRAUCA"></option>
						  <option value="Tom BOST"></option>
						  <option value="Lyam LAM-CHAN"></option>
						  <option value="François abdoul KILONGNEY NGUESSAN"></option>
						</datalist>
					</div>
				</div>
			  <div class="middle">
			  	<h2>Compétences mises en pratique</h2>
			  	<h3>Principales compétences</h3>
			  	<label class="container">Développement web
					  <input type="checkbox" id="dev_web" name="dev_web" value="dev_web" checked="checked">
					  <span class="checkmark"></span>
					</label>
					<label class="container">UX/UI Design
					  <input type="checkbox" id="ui_ux" name="ui_ux" value="ui_ux" checked="checked">
					  <span class="checkmark"></span>
					</label>
					<label class="container">Graphisme
					  <input type="checkbox" id="graphisme" name="graphisme" value="graphisme" checked="checked">
					  <span class="checkmark"></span>
					</label>
					<label class="container">Marketing
					  <input type="checkbox" id="marketing" name="marketing" value="marketing" checked="checked">
					  <span class="checkmark"></span>
					</label>
			  </div>
				<div class="right">
					<h2>Trier sur une période</h2>
			  	<div>
						<label for="date_start">Début</label>
				  	<input type="date" id="date_start" name="date_start" value="<?php echo date('Y-m-d'); ?>" min="2015-01-01" max="<?php echo date('Y-m-d'); ?>">
					</div>
					<div>
				  	<label for="date_end">Fin</label>
				  	<input type="date" id="date_end" name="date_end" value="<?php echo date('Y-m-d'); ?>" min="2015-01-01" max="<?php echo date('Y-m-d'); ?>">
					</div>
					<div class="btn-filter-validation">
				  	<button class="btn">Appliquer</button>
						<button type="reset" class="btn clear">Supprimer les filtres</button>
					</div>
				</div>
			</form>
		</section>
		<div class="list-projects wrapper">
			 <?php for($i = 0; $i < 5; $i++) { ?>
			 	<article>
				 		<figure>
				 			<a href="projet.php" aria-labelledby="title"><img src="/assets/img/project_picture.webp" alt="Photo du project My Creative Week"></a>
				 		</figure>
			 		<div class="content">
				 		<h2 id="title"><a href="projet.php">My Creative Week</a></h2>
				 		<div>
				 			<div>
						 		<p><i class="fas fa-users"></i> 100 participants</p>
						 		<p><i class="fas fa-map-marker-alt"></i> My Digital School Paris</p>
				 			</div>
					 		<p><i class="far fa-clock"></i> 10 Septembre 2020</p>
				 		</div>
				 		<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis velit non posuere cursus. Suspendisse in interdum metus, vel sollicitudin metus. Aenean quis nisl scelerisque, blandit ex.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis velit non posuere cursus. Suspendisse in interdum metus, vel sollicitudin metus. Aenean quis nisl scelerisque, blandit ex. Pellentesque iaculis velit non posuere cursus. Suspendisse in interdum metus, vel sollicitudin metus. Aenean quis nisl scelerisque, blandit ex.</p>
				 		<p><a href="projet.php" class="btn">En savoir plus <span class="plus">+</span></a></p>
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
		</div>
		<?php include("includes/viewed.php") ?>
		<?php include("includes/footer.php") ?>
	</body>
</html>