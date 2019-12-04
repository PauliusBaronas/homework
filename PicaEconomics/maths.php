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


// $small_area = ((( $small_diameter * $small_diameter ) * 3.14 ) / 4 ) * $small_qnty;
// $large_area = ((( $large_diameter * $large_diameter ) * 3.14 ) / 4 ) * $large_qnty;
function area_price ($area, $price) {
	return $area / $price;
}



$_SESSION['small_area'] = $small_area;
$_SESSION['large_area'] = $large_area;
$_SESSION['small_area_price'] = round($small_area_price,2);
$_SESSION['large_area_price'] = round($large_area_price,2);
var_dump($_SESSION['test']);

 ?>