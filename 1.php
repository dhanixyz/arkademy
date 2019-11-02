<?php

function data($name,$age) {
	$data = array(
		"name" => $name, 
		"age" => $age,
		"address" => "Jl. Banowati Tengah II No.2 RT05 RW05 Bulu Lor Semarang Utara 50179",
		"hobbies" => array("Ngoding","Main Musik","Videografi"),
		"is_married" => false,
		"list_school" => array(0 => array("name" => "SDN 6 Batursari", "year_in" => 2007, "year_out" => 2013, "major" => null), 1 => array("name" => "SMPN 3 Mranggen", "year_in" => 2013, "year_out" => 2016, "major" => null), 2 => array("name" => "SMAN 14 Semarang", "year_in" => 2016, "year_out" => 2019, "major" => null)),
		"skills" => array(0 => array("skill_name" => "PHP", "level" => "beginner"), 1 => array("skill_name" => "NodeJS", "level" => "beginner")),
		"interest_in_coding" => true
		);
	$json = json_encode($data);
	return $json;
}