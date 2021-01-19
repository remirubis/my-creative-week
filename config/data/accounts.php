<?php
	$account_type = array(
		"admin" => array(
			"name" => "Administrateur",
			"access" => array(
				"create_account",
				"delete_account",
				"create_project",
				"modify_project",
				"delete_project")
		),
		"trainer" => array(
			"name" => "Formateur",
			"access" => array(
				"create_project",
				"modify_project",
				"delete_project")
		),
		"student" => array(
			"name" => "Etudiant",
			"access" => array(
				"create_project",
				"modify_project")
		)
	);
	$accounts = array(
		array(
			"firstname" => "Marc",
			"lastname" => "Tarouet",
			"email" => "marc.tarouet@mydigitalschool.com",
			"password" => "123456789",
			"account_type" => 0
			),
		array(
			"firstname" => "Emelie",
			"lastname" => "Darmote",
			"email" => "emelie.darmote@my-digital-school.org",
			"password" => "123456789",
			"account_type" => 2
			)
	);