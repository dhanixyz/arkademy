<?php

function checkUsername($user) {
	if (strlen($user) >= 5 && $user === strtolower($user)) {
		return true;
	} else {
		return false;
	}
}

function checkPassword($pass) {
	$a = $pass[0].$pass[1];
	$b = $pass[2];
	$c = $pass[3].$pass[4].$pass[5].$pass[6];
	if (is_numeric($a) && ($b == '@' || $b == '&') && ctype_upper($c)) {
		return true;
	} else {
		return false;
	}
}