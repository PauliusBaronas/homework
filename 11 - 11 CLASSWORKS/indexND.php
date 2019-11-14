
<?php
/*» Sudėkite 3 skaičius ir atspausdinkite:
echo ‘ ...‘. $kintamasis.‘...’;*/


$vienas = 1;
$du = 2;
$trys = 3;

$kintamasis = $vienas + $du + $trys;

echo $kintamasis;
echo "<br>";

/*» Suskaičiuokite kintamojo liekaną:
print “...{$kintamasis}...”;
*/
print ($kintamasis % 4);

echo "<br>";

/*» Įrašykite į masyvą kiekvienos dienos vidutines
temperatūras:
var_dump($temperatūros);
*/


$temps = ['pirmadienis' => 15,
				'antradienis' => 12,
				'trečiadienis' => 13,
				'ketvirtadienis' => 16,
				'penktadienis' => 17,
	 ];

/*čia geriau naudoti laužtinius sklaustus o ne array.
nenaudoti lietuviškų pavadinimų ir ypač nenaudoti nosinių ir ilgūjų*/

var_dump($temps);

echo "<br>";






?>