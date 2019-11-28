<?php

define('ROOT_PATH', dirname(dirname(__FILE__)));

$env_path = ROOT_PATH . '/.env';

define('_ENV', file_exists($env_path) ? parse_ini_file($env_path) : []);

unset($env_path);

function env($name, $default = FALSE) {
	if (isset(_ENV[$name])) {
		return _ENV[$name];
	}

	return $default;
}

error_reporting(E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
/*if (env('DEBUG', FALSE)) {
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
} else {
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);

	ini_set('log_errors', 1);
	ini_set('error_log', ROOT_PATH . '/logs/php-error.log');
}*/

require ROOT_PATH . '/src/functions.php';
require ROOT_PATH . '/src/app.php';