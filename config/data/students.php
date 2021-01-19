<?php
	include('projects.php');
	$promotion = array(
		array(
			"name" => "B1 Cycle Web & Digital",
			"description" => ""
		),
		array(
			"name" => "B2 Cycle Web & Digital",
			"description" => ""
		),
		array(
			"name" => "B3 WebDesign",
			"description" => ""
		),
		array(
			"name" => "B3 Développement Web",
			"description" => ""
		),
		array(
			"name" => "B3 Web Marketing",
			"description" => ""
		),
	);
	$students = array(
		array(
			"img" => "/assets/img/students/0.jpg",
			"firstname" => "Rémi",
			"lastname" => "Rubis",
			"linkedin" => "http://www.linkedin.fr",
			"promo" => $promotion[1],
			"projects" => array($projects[0],$projects[4],$projects[6],$projects[5]),
			"campus" => $campus[1]
		),
		array(
			"img" => "/assets/img/students/1.jpg",
			"firstname" => "Germain",
			"lastname" => "Larocque",
			"linkedin" => "http://www.linkedin.fr",
			"promo" => $promotion[1],
			"projects" => array($projects[1],$projects[3],$projects[2]),
			"campus" => $campus[3]
		),
		array(
			"img" => "/assets/img/students/2.jpg",
			"firstname" => "Sophie ",
			"lastname" => "Brousse",
			"linkedin" => "http://www.linkedin.fr",
			"projects" => array($projects[0],$projects[1],$projects[6],$projects[5]),
			"campus" => $campus[2]
		),
		array(
			"img" => "/assets/img/students/3.jpg",
			"firstname" => "Joseph",
			"lastname" => "Begin",
			"linkedin" => "http://www.linkedin.fr",
			"promo" => $promotion[1],
			"projects" => array($projects[0],$projects[4],$projects[8],$projects[5]),
			"campus" => $campus[0]
		),
		array(
			"img" => "/assets/img/students/4.jpg",
			"firstname" => "Aurélie",
			"lastname" => "Allard",
			"linkedin" => "http://www.linkedin.fr",
			"promo" => $promotion[2],
			"projects" => array($projects[0],$projects[5]),
			"campus" => $campus[5]
		),
	);

	$campus = array(
		array(
			"name" => "Angers",
			"location" => "19 Rue André le Notre, 49066 Angers",
			"students" => 100
		),
		array(
			"name" => "Annecy",
			"location" => "14 Avenue du Rhône, 74000 Annecy",
			"students" => 100
		),
		array(
			"name" => "Nantes",
			"location" => "4 Chemin de la Chatterie, 44800 Saint-Herblain",
			"students" => 100
		),
		array(
			"name" => "Paris",
			"location" => "11 rue de Cambrai, Parc du Pont de Flandre, Bâtiment 33, 75019 Paris",
			"students" => 100
		),
		array(
			"name" => "Rennes",
			"location" => "Campus de Ker Lann, 1 Rue Pierre de Maupertuis, 35170 Bruz",
			"students" => 100
		),
		array(
			"name" => "Saint-Quentin-en-Yvelines",
			"location" => "Espace Saint-Quentin, Campus de, 23 Rue Colbert, 78180 Montigny-le-Bretonneux",
			"students" => 100
		)
	);