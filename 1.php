<?php

function data($name,$age) {
	$data = array(
		"name" => $name, 
		"age" => $age,
		"hobbies" => array("Ngoding","Tidur","Videografi"),
		"is_married" => false,
		"skills" => array(0 => array("skill_name" => "PHP", "level" => "beginner"), 1 => array("skill_name" => "NodeJS", "level" => "beginner")),
		"interest_in_coding" => true
		);
	$json = json_encode($data);
	return $json;
}
