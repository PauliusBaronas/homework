<?php
if(isset($_POST["submit"])) {

    $s_given = $_POST['s_year']."-".$_POST['s_month']."-".$_POST['s_day'];
    $e_given = $_POST['e_year']."-".$_POST['e_month']."-".$_POST['e_day'];
    $s_given_time = strtotime($s_given);
    $e_given_time = strtotime($e_given);
    $s_given = date_create($_POST['s_year']."-".$_POST['s_month']."-".$_POST['s_day']);
    $e_given = date_create($_POST['e_year']."-".$_POST['e_month']."-".$_POST['e_day']);
    $result = date_diff($s_given,$e_given);
    $result2 = $e_given_time - $s_given_time;
    $result2 = $result2/86400;


/*    echo $s_given;*/
    echo "<br>";
/*    echo $e_given;*/
    var_dump($s_given);
    echo "<br>";
    echo $result->format("%R%a days");
    echo "<br>";
    echo $result2;



}
/*Parašykite funkciją kuri priima kaip argumentą/paramėtrą "2014-12-31" formato datą ir grąžina zodiako ženklą.*/
echo "<br>";
echo "<br>";



/*$d=mktime(10, 00, 00, 12, 31, 1965);
$period = 30;

$d= $d + $period*60*60*24;

$data = date('Y-m-d', $d);
echo $d;
echo "<br>";
echo $data;

var_dump($data);
*/


$given = '1995-01-01';
$given_time = strtotime($given);

$given_metai = substr($given, 0, 4);

/*echo $given_metai;*/


$startdateAvinas = strtotime("$given_metai"."-03-21");
$enddateAvinas = strtotime("29 days", $startdateAvinas);


$startdateTauras = strtotime("$given_metai"."-04-21");
$enddateTauras = strtotime("30 days", $startdateTauras);


$startdateDvyniai = strtotime("$given_metai"."-05-22");
$enddateDvyniai = strtotime("30 days", $startdateDvyniai);


$startdateVezys = strtotime("$given_metai"."-06-22");
$enddateVezys = strtotime("30 days", $startdateVezys);


$startdateLiutas = strtotime("$given_metai"."-07-23");
$enddateLiutas = strtotime("29 days", $startdateLiutas);


$startdateMergele = strtotime("$given_metai"."-08-22");
$enddateMergele = strtotime("32 days", $startdateMergele);


$startdateSvarstykles = strtotime("$given_metai"."-09-24");
$enddateSvarstykles = strtotime("29 days", $startdateSvarstykles);


$startdateSkorpionas = strtotime("$given_metai"."-10-24");
$enddateSkorpionas = strtotime("29 days", $startdateSkorpionas);


$startdateSaulys = strtotime("$given_metai"."-11-23");
$enddateSaulys = strtotime("29 days", $startdateSaulys);


$startdateOziaragisfix = strtotime("$given_metai"."-01-01");
$enddateOziaragisfix = strtotime("19 days", $startdateOziaragisfix);

if ($given_time <= $enddateOziaragisfix && $given_time >= $startdateOziaragisfix ) {

    $int = (int)$given_metai;
    $given_metai = $given_metai -1;
    $startdateOziaragis = strtotime("$given_metai"."-12-23");
    $enddateOziaragis = strtotime("28 days", $startdateOziaragis);
} else {

    $startdateOziaragis = strtotime("$given_metai"."-12-23");
    $enddateOziaragis = strtotime("28 days", $startdateOziaragis);
}

/*echo $enddateOziaragis;
echo "<br>";
$data_enddateOziaragis = date('Y-m-d', $enddateOziaragis);
echo $data_enddateOziaragis;
echo "<br>";*/

$startdateVandenis = strtotime("$given_metai"."-01-21");
$enddateVandenis = strtotime("28 days", $startdateVandenis);


$startdateZuvys = strtotime("$given_metai"."-02-19");
$enddateZuvys = strtotime("30 days", $startdateZuvys);

$data0 = date('Y-m-d', $startdateAvinas);

$data1 = date('Y-m-d', $enddateAvinas);
/*echo "<br>";
echo $startdateAvinas;
echo "<br>";
echo $data0;
echo "<br>";
echo $enddateAvinas;
echo "<br>";
echo $data1;
echo "<br>";
echo $given_time;
echo "<br>";*/
$data_given = date('Y-m-d', $given_time);
/*echo $data_given;
echo "<br>";*/
if ($given_time <= $enddateAvinas && $given_time >= $startdateAvinas) {

    echo "Avinas";
} elseif ($given_time <= $enddateTauras && $given_time >= $startdateTauras) {
    echo "Tauras";
}
elseif ($given_time <= $enddateDvyniai && $given_time >= $startdateDvyniai) {
    echo "Dvyniai";
}
elseif ($given_time <= $enddateVezys && $given_time >= $startdateVezys) {
    echo "Vėžys";
}
elseif ($given_time <= $enddateMergele && $given_time >= $startdateLiutas) {
    echo "Mergelė";
}
elseif ($given_time <= $enddateAvinas && $given_time >= $startdateMergele) {
    echo "Avinas";
}
elseif ($given_time <= $enddateSvarstykles && $given_time >= $startdateSvarstykles) {
    echo "Svarstyklės";
}
elseif ($given_time <= $enddateSkorpionas && $given_time >= $startdateSkorpionas) {
    echo "Skorpionas";
}
elseif ($given_time <= $enddateSaulys && $given_time >= $startdateSaulys) {
    echo "Šaulys";
}
elseif ($given_time <= $enddateOziaragis && $given_time >= $startdateOziaragis) {
    echo "Ožiaragis";
}
elseif ($given_time <= $enddateVandenis && $given_time >= $startdateVandenis) {
    echo "Vandenis";
}
elseif ($given_time <= $enddateZuvys && $given_time >= $startdateZuvys) {
    echo "Žuvys";
}







?>



