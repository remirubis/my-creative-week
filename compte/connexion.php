<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Connexion | Our Talents</title>
		<?php include('../includes/head.php'); ?>
		<link rel="stylesheet" type="text/css" href="/assets/css/account.css">
		<script type="text/javascript">
			$(function() {
				$('#connexion').submit(function(e) {
			  	e.preventDefault();
					localStorage.setItem('connected', 'true');
			  	$(location).attr('href','http://www.remi-rubis.fr/');
		  	});		
			})
		</script>
	</head>
	<body>
		<?php include('../includes/header.php'); ?>
		<ul class="ariane wrapper">
			<li><a href="/index.php">Accueil</a></li>
			<li>Compte</li>
			<li>Connexion</li>
		</ul>
		<div class="wrapper page-title">
			<h1>Connexion</h1>
			<p class="desc">Cette page est réservée aux étudiants, formateurs ou membres de l'équipe administrative de MyDigitalSchool. En vous connectant, vous pourrez en fonction de vos autorisations créer, gérer ou supprimer des projets.</p>
		</div>
		<form action="#" method="POST" class="wrapper" id="connexion">
			<label for="email">Adresse email</label>
			<input type="email" name="email" id="email">
			<label for="password">Mot de passe</label>
			<input type="password" name="password" id="password">
			<div class="save">
					<label for="check">Enregistrer mes identifiants</label>
					<input type="checkbox" name="auto-connect" id="check">
			</div>
			<button type="submit" class="btn">Me connecter</button>
			<p>Un problème de connexion ? <a href="#">Réinitialiser votre mot de passe</a></p>
		</form>
		<div class="new wrapper">
			<div>
				<h2>Vous n'avez pas encore de compte ?</h2>
				<p>Si vous êtes étudiant, intervenant ou faites partie de l'équipe pédagogique, demandez vos accès dès maintenant.</p>
				
			</div>
			<p class="btn"><a href="mailto:muriel.cottet@mydigitalschool.com">Faire une demande</a></p>
		</div>
		<?php include('../includes/viewed.php'); ?>
		<?php include('../includes/footer.php'); ?>
	</body>
</html>