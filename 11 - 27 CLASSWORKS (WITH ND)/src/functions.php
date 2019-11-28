<?php

if (function_exists('dd') == FALSE) {
	function dd() {
		array_map(function ($x) {
			var_dump($x);
		}, func_get_args());
		
		die(1);
	}
}

if (function_exists('show') == FALSE) {
	function show($value = '') {
		echo htmlspecialchars($value);
	}
}

if (function_exists('showSelected') == FALSE) {
	function showSelected($key, $value) {
		if (isset($_GET[$key]) && $_GET[$key] == $value) {
			echo ' selected="selected"';
		}

		echo '';
	}
}