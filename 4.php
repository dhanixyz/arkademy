<?php

function findSame($word) {
	if (is_array($word)) {
		$data = [];
		for ($i=0; $i < count($word); $i++) { 
			$arr = str_split($word[$i]);
			sort($arr);
			$text = implode('', $arr);
			$data[] .= $text;
		}
		$res = [];
		for ($i=0; $i < count($data); $i++) { 
			$keys = array_keys($data, $data[$i]);
			if (count($keys) >= 2) {
				$res[] = $keys;
			}
		}
		if (!empty($res)) {
			$res = call_user_func_array('array_merge', $res);
			$res = array_unique($res);
			$output = [];
			for ($i=0; $i < count($res); $i++) { 
				$output[] = $word[$res[$i]];
			}
			$result = implode(', ', $output);
			return $result;
		} else {
			return "Tidak ditemukan!";
		}
	} else {
		return false;
	}
}