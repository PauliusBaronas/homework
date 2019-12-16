<?php 
session_start();
echo "lol";
header('Location: ' . $_SERVER['HTTP_REFERER']);

$large_save = $_POST['large_save'];
$small_save = $_POST['small_save'];
$small_name = $_POST['small_name'];
$small_diameter = $_POST['small_diameter'];
$small_price = $_POST['small_price'];
$small_qnty = $_POST['small_qnty'];
$large_name = $_POST['large_name'];
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
/*var_dump($_SESSION['test']);
*/



/*env nuskaitymas*/
define('ROOT_PATH', dirname(__FILE__));

$env_path = ROOT_PATH . '/.env';
// die(var_dump($env_path));
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
// die(var_dump(env('DB_HOST')));
$dbh = new PDO($dsn, env('DB_USERNAME'), env('DB_PASSWORD'));
// die(var_dump($dsn));

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');


// insertas
if ($small_save == 'small_save') {

$statement = $dbh->prepare('INSERT INTO pizzas (name, diameter, price, qnty) VALUES (:name, :diameter, :price, :qnty)');




$statement->execute([
    'name' => $small_name,	
    'diameter' => $small_diameter,	
    'price' => $small_price,
    'qnty' => $small_qnty,
]);
};


if ($large_save == 'large_save') {


$statementlarge = $dbh->prepare('INSERT INTO pizzaslarge (name, diameter, price, qnty) VALUES (:name, :diameter, :price, :qnty)');



$statementlarge->execute([
    'name' => $large_name,	
    'diameter' => $large_diameter,
    'price' => $large_price,
    'qnty' => $large_qnty,
]);

};

// atvaizdavimas

$query = 'SELECT 
	`pizzas`.`name`, 
	`pizzas`.`diameter`, 
	`pizzas`.`price`,
	`pizzas`.`qnty` FROM `pizzas`';


$stmt = $dbh->prepare($query);
$stmt->execute();

$pizzas = $stmt->fetchAll(PDO::FETCH_OBJ);
$_SESSION['option_small'] = $pizzas;

/*require ROOT_PATH . '/views/index.php';*/


 ?>