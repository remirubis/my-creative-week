<!DOCTYPE html>
<html>
	<head>
		<title>Publier un projet | Our Talents</title>
		<?php include('includes/head.php'); ?>
		<link rel="stylesheet" type="text/css" href="/assets/css/create_project.css">
    <script type="text/javascript">
    	$(function() {
    		$('#file').change(function() {
					$("#filename").html(document.getElementById('file').files[0].name);
    		});
    		$('#file_group').change(function() {
					$("#filename_group").html(document.getElementById('file_group').files[0].name);
    		});
 				$('#clear').click(function(e) {
 					try {					
	 					document.getElementById('file').files[0].name = '';
						$("#filename_group").html("Aucun fichier");
 					} catch {}
 					e.preventDefault();
    		});
 				$('#clear_group').click(function(e) {
 					try {					
	 					document.getElementById('file_group').files[0].name = '';
						$("#filename_group").html("Aucun fichier");
 					} catch {}
 					e.preventDefault();
    		});
    	})
    </script>
	</head>
	<body>
		<?php include('includes/header.php'); ?>
		<div class="wrapper page-title">
			<h1>Publier un projet</h1>
			<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis velit non posuere cursus. Suspendisse in interdum metus, vel sollicitudin metus. Aenean quis nisl scelerisque, blandit ex.Lorem ipsum dolor sit amet.</p>
		</div>
		<ul class="ariane wrapper">
			<li><a href="/index.php">Accueil</a></li>
			<li><a href="/nos-projets.php">Nos projets</a></li>
			<li>Créer un projet</li>
		</ul>
		<form action="#" method="POST" class="wrapper">
			<div class="name">
				<label for="name">Nom du projet</label>
				<div class="bar">
					<select name="campus">
						<option value="none" selected disabled hidden>Préfix</option>
						<option value="ANG">Angers</option>
						<option value="ANN">Annecy</option>
						<option value="NAN">Nantes</option>
						<option value="PAR">Paris</option>
						<option value="ANN">Rennes</option>
						<option value="SQY">St Q Y</option>
					</select>
					<input type="text" name="name" placeholder="Mon super projet !" id="name">
				</div>
			</div>
			<div class="info-project">
				<div class="campus">
					<h2>Cochez les campus participant(s)</h2>
					<label class="container">Angers
					  <input type="checkbox" id="angers" name="angers" value="angers">
					  <span class="checkmark"></span>
					</label>
					<label class="container">Annecy
					  <input type="checkbox" id="annecy" name="annecy" value="annecy">
					  <span class="checkmark"></span>
					</label>
					<label class="container">Nantes
					  <input type="checkbox" id="nantes" name="nantes" value="nantes">
					  <span class="checkmark"></span>
					</label>
					<label class="container">Paris
					  <input type="checkbox" id="paris" name="paris" value="paris">
					  <span class="checkmark"></span>
					</label>
				</div>
				<div class="skills">
					<h2>Compétences mises en pratiques</h2>
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
				<div class="date">
					<h2>Date</h2>
					<label class="start">Début du projet</label>
					<input type="date" id="start" name="start" value="<?php echo date('Y-m-d'); ?>" min="2015-01-01" max="<?php echo date('Y-m-d'); ?>">
					<label class="end">Fin du projet</label>
					<input type="date" id="end" name="end" value="<?php echo date('Y-m-d'); ?>" min="2015-01-01" max="<?php echo date('Y-m-d'); ?>">
				</div>
			</div>
			<div class="desc-project">
				<h2><label for="brief">Description du projet</label></h2>
				<textarea name="brief" id="brief" placeholder="Détaillé la demande du projet qui a été réalisé..."></textarea>
				<div class="filedwl">
					<label for="file" class="btn">Téléverser un document</label>
					<input type="file" id="file" name="brief-file" accept="image/*, .pdf">
					<p>Fichier téléversé: <span id="filename">Aucun fichier</span></p>
					<p><a href="#" aria-labelledby="del" id="clear"><i class="fas fa-times"></i><span class="del">Supprimer mon fichier</span></a></p>
				</div>
			</div>
			<div class="students-projects">
				<h2>Ajouter le rendu des groupes</h2>
				<div class="params">
					<h3>Paramètre</h3>
					<div id ="line">
						<p>Permettre aux étudiants d'ajouter leur rendu individuellement</p>
						<div>
							<input type="radio" name="student_add" id="yes" checked="checked">
							<label for="yes">Oui</label>
							<input type="radio" name="student_add" id="non">
							<label for="non">Non</label>
						</div>
					</div>
				</div>
				<div class="add_project">
					<label for="name-group">Nom du groupe</label>
					<input type="text" name="group-name" id="name-group" placeholder="Our talents">
					<label for="jury-group">Avis du jury sur ce projet</label>
					<textarea name="jury-group" id="jury-group" placeholder="Quel effet ce groupe a t'il fait au jury..."></textarea>
					<div class="col">
						<div class="rank">
							<label for="group-rank">Classement du groupe</label>
							<input type="number" name="group-rank" id="group-rank" placeholder="1">
						</div>
						<div class="camp">
							<label for="camp_name">Campus du groupe</label>
							<select name="camp_name" id="camp_name">
								<option value="none" selected disabled hidden>Choisir un campus</option>
								<option value="angers">Angers</option>
								<option value="annecy">Annecy</option>
								<option value="nantes">Nantes</option>
								<option value="paris">Paris</option>
								<option value="rennes">Rennes</option>
								<option value="sqy">Saint-Quentin</option>
							</select>
						</div>
					</div>
					<div class="filedwl">
						<label for="file_group" class="btn">Téléverser un support</label>
						<input type="file" id="file_group" name="file_group" accept="image/*, .pdf">
						<p>Fichier téléversé: <span id="filename_group">Aucun fichier</span></p>
						<p><a href="#" aria-labelledby="del1" id="clear_group"><i class="fas fa-times"></i><span id="del1">Supprimer mon fichier</span></a></p>
					</div>
					<button type="submit" class="btn">Ajouter ce groupe</button>
				</div>
			</div>
			<div class="col2">
				<p><a class="btn">Ajouter un nouveau groupe</a></p>
				<button type="submit" class="btn">Ajouter ce projet</button>
			</div>
		</form>
		<?php include('includes/footer.php'); ?>
	</body>
</html>