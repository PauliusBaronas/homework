
<?php
/*» išveskite į ekraną 10 kartų žodį labas*/


for ($i = 0; $i < 10; $i++) {
   
   echo "labas";
   echo "<br>";
   
    }




/*» išvesti į ekraną skaičius nuo 1 iki 10
*/
echo "<br>";


for ($i = 1; $i < 11; $i++) {
   
   echo $i;
   echo "<br>";
   
    }

/*» išvesti į ekraną skaičius nuo 10 iki 1
*/
echo "<br>";


for ($i = 10; $i > 0; $i--) {
   
   echo $i;
   echo "<br>";
   
    }

/*» išvesti į ekraną visus lyginius skaičius nuo 1 iki 100
*/
echo "<br>";


for ($i = 1; $i < 101; $i++) {

    if ($i % 2 ==0) {
    echo $i;
    echo "<br>";
    }
   

   
    }

/*» išvesti į ekraną visus masyvo elementus (skaicius masyvas)
*/
echo "<br>";

$array = [1,2,3,4,5,6,7,8,9];

var_dump($array);

/*» išvesti į ekraną visų masyvo elementų sumą (kaip padaryti su for ?)
*/

echo "<br>";

$array = [1,2,3,4,5,6,7,8,9];

$sum = array_sum($array);



echo $sum;

/*» išvesti į ekraną visų masyvo elementų suma su for)
*/

echo "<br>";
echo "<br>";
echo "<br>";

$array = [1,2,3,4,5,6,7,8,9];


function sum($array) {

$sum = 0;

for ($i = 0; $i < count($array); $i++) {

    $sum += $array[$i]; 

}
return $sum;
}



echo sum($array);
/*» išvesti į ekraną visų masyvo elementų sandauga 
*/

echo "<br>";
echo "<br>";
echo "<br>";

$array = [1,2,3,4,5,6,7,8,9];


function multi($array) {

$sum = 1;

for ($i = 0; $i < count($array); $i++) {

    $sum *= $array[$i]; 

}
return $sum;
}



echo multi($array);


echo "<br>";
echo "<br>";
echo "<br>";
/*» išvesti į ekraną kas antrą masyvo elementą
*/

echo "<br>";
echo "<br>";
echo "<br>";

$array = [1,2,3,4,5,6,7,8,9];



for ($i = 0; $i < count($array); $i++) {
    if ($i % 2 == 0) {
        echo "<br>";
        echo $array[$i];
    }
}
    




echo "<br>";
echo "<br>";
echo "<br>";

/*» (while) parasykite funkcija, kuri mestu kauliuka iki kol iskris 5 arba 6. Visus savo metimus isvestu i ekrana (|| while) Bonus

*/

echo "<br>";
echo "<br>";
echo "<br>";

$array = [1,2,3,4,5,6,7,8,9];


function multi($array) {

    $sum = 1;

    for ($i = 0; $i < count($array); $i++) {

        $sum *= $array[$i];

    }
    return $sum;
}



echo multi($array);


echo "<br>";
echo "<br>";
echo "<br>";
/*» (while)Metame du kauliukus (arba viena kauliuka 2 kartus) taisykles:
Jeigu kauliuku suma yra maziau uz 5 reiskia - jus iskarto pralaimejote
Jeigu kauliuku suma daugiau uz 5 ir:
-ismesta buvo 6 ir 6, reiskia laimejote dvirati
-abieju kauliuku ismestas skaicius yra vienodas, bet ne 6 ir 6 - reiskia jus laimejote bilieta i kina
-kitais atvejais - kauliukas metamas dar karta
zaidimas turi vykti iki kol zaidejes laimes arba pralaimes (while)
visa zaidimo eiga turetu buti isvesta i ekrana

*/

echo "<br>";
echo "<br>";
echo "<br>";

$array = [1,2,3,4,5,6,7,8,9];


function multi($array) {

    $sum = 1;

    for ($i = 0; $i < count($array); $i++) {

        $sum *= $array[$i];

    }
    return $sum;
}



echo multi($array);


echo "<br>";
echo "<br>";
echo "<br>";


/*"Nupieškite" tokio tipo piramidę:
1
22
333
4444
55555
666666
7777777
88888888
999999999*/




$array = [1,2,3,4,5,6,7,8,9];



for ($i = 0; $i < count($array); $i++) {
   $index = $array[$i];

   echo "<br>";
   for($n=0; $n < $array[$i]; $n++) {


    echo($index);
    }
}


/*=========================*/
/*Parašykite funkciją kuri unserscore_case konvertuoja i camelCase;*/
echo "<br>";

function camelCase($input, $separator) {

        $input = strtolower($input);
        $pos = strpos($input, "$separator");
        echo "<br>";
        echo $pos;
        $parts = explode("$separator", $input);
        echo "<br>";
        print_r($parts);
        echo "<br>";

    if ($pos == 0) {
            for ($i = 2; $i < count($parts); $i++) {
                $parts[$i] = ucfirst ($parts[$i]);
                } 
                for ($i = 0; $i < count($parts); $i++) {
                echo $parts[$i];
            }
    }  else {
            for ($i = 1; $i < count($parts); $i++) {
                $parts[$i] = ucfirst ($parts[$i]);
                } 
                for ($i = 0; $i < count($parts); $i++) {
                echo $parts[$i];

                }
            }
        }


camelCase("Vienas_DU_TRYS_KETURI_PENKI_seeši_septyni_dvim_z", "_");





/*=========================*/
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


$given = '1995-11-04';
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







/*========================*/
/*Parašykite funkciją kuri priima kaip argumentą/paramėtrą skaičių ir grąžina panašų masyvą.
Pvz 4 --> [1, [2], [[3]], [[[4]]] ], 5 --> [1, [2], [[3]], [[[4]]], [[[[5]]]] ].*/







echo "<br>";



$array = [1,2,3,4,5,6,7,8,9];



for ($i = 0; $i < count($array); $i++) {
   $index = $array[$i];

   echo "<br>";
   for($n=0; $n < $array[$i]; $n++) {


    echo($index);
    }
}










?>