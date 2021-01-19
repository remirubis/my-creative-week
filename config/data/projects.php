<?php
	include('students.php');
	$projects = array(
		array(
			"title" => "My Creative Week",
			"description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis velit non posuere cursus. Suspendisse in interdum metus, vel sollicitudin metus. Aenean quis nisl scelerisque, blandit ex.Lorem ipsum dolor sit amet.",
			"participator" => 100,
			"campus" => array($campus[0], $campus[1], $campus[2]),
			"date_start" => 1606726800,
			"date_end" => 1607101200,
			"content" => array(
				"brief" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis velit non posuere cursus. Suspendisse in interdum metus, vel sollicitudin metus. Aenean quis nisl scelerisque, blandit ex.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis velit non posuere cursus. Suspendisse in interdum metus, vel sollicitudin metus. Aenean quis nisl scelerisque, blandit ex.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis velit non posuere cursus. Suspendisse in interdum metus, vel sollicitudin metus.",
				"download_brief" => "/assets/download/0/brief.pdf",
				"skills" => array($skills[0], $skills[1], $skills[3], $skills[5], $skills[6], $skills[7]),
				"groups" => array(
					array(
						"name" => "Our talents",
						"students" => array($students[0],$students[1], $students[2], $students[3]),
						"comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis velit non posuere cursus. Suspendisse in interdum metus, vel sollicitudin metus. Aenean quis nisl scelerisque.",
						"campus" => $campus[1],
						"download" => "/assets/download/0/groups/support.pdf"
					)
				)
			)
		)
	);

	$skills = array(
		array(
			"name" => "Développement web",
			"class" => "web_dev"
		),
		array(
			"name" => "Design",
			"class" => "design"
		),
		array(
			"name" => "UI/UX Design",
			"class" => "ui_ux"
		),
		array(
			"name" => "Marketing",
			"class" => "marketing"
		),
		array(
			"name" => "Travail d'équipe",
			"class" => "team"
		),
		array(
			"name" => "Télétravail",
			"class" => "homework"
		),
		array(
			"name" => "Gestion de projet",
			"class" => "project"
		)
	);