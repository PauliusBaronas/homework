<?php 
session_start();
echo "lol";
header('Location: ' . $_SERVER['HTTP_REFERER']);




$small_diameter = $_POST['small_diameter'];
$small_price = $_POST['small_price'];
$small_qnty = $_POST['small_qnty'];
$large_diameter = $_POST['large_diameter'];
$large_price = $_POST['large_price'];
$large_qnty = $_POST['large_qnty'];


function area ($diameter, $quantity) {
	return $diameter * $diameter * 3.14 / 4 * $quantity;
}

$small_area = area($small_diameter, $small_qnty );
$large_area = area($large_diameter, $large_qnty );
$small_area_price = area_price($small_area, $small_price);
$large_area_price = area_price($large_area, $large_price);
$result = comparer($small_area_price, $large_area_price);


// $small_area = ((( $small_diameter * $small_diameter ) * 3.14 ) / 4 ) * $small_qnty;
// $large_area = ((( $large_diameter * $large_diameter ) * 3.14 ) / 4 ) * $large_qnty;
function area_price ($area, $price) {
	return $area / $price;
}



function comparer ($small, $large) {
	if ($small > $large) {
		return "Labiau apsimoka rinktis mąžasias picas";
	} elseif ($small < $large) {
		return "Labiau apsimoka rinktis didžiąją pica";
	} elseif ($small == $large) {
		return "Lygu!";
	}
}


$_SESSION['small_area'] = $small_area;
$_SESSION['large_area'] = $large_area;
$_SESSION['small_area_price'] = round($small_area_price,2);
$_SESSION['large_area_price'] = round($large_area_price,2);
$_SESSION['result'] = $result;
var_dump($_SESSION['test']);




/*env nuskaitymas*/

/*$env_path = ROOT_PATH . '/.env';

define('_ENV', file_exists($env_path) ? parse_ini_file($env_path) : []);

unset($env_path);

function env($name, $default = FALSE) {
	if (isset(_ENV[$name])) {
		return _ENV[$name];
	}

	return $default;
}



// prisijungimas prie duomenu bazes

$dsn = sprintf('mysql:host=%s;dbname=%s', env('DB_HOST'), env('DB_DATABASE'));

$dbh = new PDO($dsn, env('DB_USERNAME'), env('DB_PASSWORD'));

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');



// insertas

$statement = $dbh->prepare('INSERT INTO employees (name, surname, position_id, salary) VALUES (:fname, :sname, :position, :salary)');


$statement->execute([
    'fname' => $_POST['name'],	
    'sname' => $_POST['surname'],
    'position' => $_POST['position'],
    'salary' => $_POST['salary'],
]);

// atvaizdavimas

$query = 'SELECT 
	`employees`.`id`, 
	`employees`.`name`, 
	`employees`.`surname`,
	`employees`.`salary`,
	`positions`.`name` AS \'position\'
FROM `employees`
JOIN `positions` ON `positions`.`id` = `employees`.`position_id`';

if (isset($_GET['salary']) || isset($_GET['position'])) {
	$query .= ' WHERE';

	if (isset($_GET['salary'])) {
		$query .= ' `employees`.`salary` >= :salary';
	}

	if (isset($_GET['salary'], $_GET['position'])) {
		$query .= ' AND';
	}

	if (isset($_GET['position'])) {
		$query .= ' `positions`.`id` = :position';
	}
}

$stmt = $dbh->prepare($query);

if (isset($_GET['salary'])) {
	$stmt->bindParam(':salary', $_GET['salary'], PDO::PARAM_INT);
}

if (isset($_GET['position'])) {
	$stmt->bindParam(':position', $_GET['position'], PDO::PARAM_INT);
}

$stmt->execute();

$employees = $stmt->fetchAll(PDO::FETCH_OBJ);

$query = 'SELECT * FROM `positions`';

$stmt = $dbh->prepare($query);

$stmt->execute();

$positions = $stmt->fetchAll(PDO::FETCH_OBJ);

require ROOT_PATH . '/views/index.php';
*/

 ?>