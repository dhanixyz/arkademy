<?php

function ganti_kata($string,$find,$replace) {
	for ($i=0; $i < strlen($string); $i++) { 
		if ($string[$i] == $find) {
			$string[$i] = $replace;
		}
	}
	return $string;
}