
<html>
<body>

<form action="welcome.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

</body>
</html>


<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



/*vykdyti kodą jei skaičius yra didesnis už dvim penkis */




$number = 30;

if ($number > 25) {
    echo 'skaičius yra per didelis';
} else {
    echo 'skaičius yra riboje';
}

echo "<br>";

/*vykdyti kodą jei kintamojo tipas yra intger */

if (is_integer($number)) {
    echo 'kintamasis yra integer';
} else {
    echo 'kintamais nėra integer';
}

echo "<br>";

/*parašyti tekstą, pagal amžių su if else*/


$age = 99;

if ($age < 12 ) {
    echo 'vaikas';
} elseif ($age <21) {
    echo 'paauglys';
} elseif ($age <65) {
    echo 'suaugęs';
} elseif ($age <199) {
    echo 'pensininkas';
}


echo "<br>";




/*parašyti dieną, pagal skaitinę vertę su switch */

$day = 6;

switch ($day) {
    case 1:
        echo "pirmadienis";
        break;
    case 2:
        echo "antradienis";
        break;
    case 3:
        echo "trečiadienis";
        break;
    case 4:
        echo "ketvirtadienis";
        break;
    case 5:
        echo "penktadienis";
        break;
    case 6:
        echo "šeštadienis";
        break;
    case 7:
        echo "sekmadienis";
        break;
}


echo "<br>";

function printNumber($start, $end, $even = false) {
    for ($i = $start; $i <= $end; $i++) {
        if ($even) { // 1
            if ($i % 2 == 0) { // 1.1
                echo 'for even ' . $i . "\n";
            }
        } else { // 2
            echo 'for ' . $i . "\n";
        }
    }
}

/*printNumber(11, 33);*/
printNumber(25, 50, true);

/*printNumber(25, 50, true);*/

echo "<br>";

function take3($one, $two, $three) {
        echo "<h3>".$one."</h3>";
        echo "<h3>".$two."</h3>";
        echo "<h3>".$three."</h3>";

    }


take3('labas','labai labas','labai labai labas');



echo "<br>";

function take2($one, $two ) {
    return  $one * $two;


}

echo take2(5,6);


echo "<br>";

function take1($one) {
    if ($one > 0) {
        return $one;
    }
    else {
        return "neigiamas skaičius";
    }

}



echo take1(1);


/*Parašykite funkciją, kuri grąžina skaičiaus kvadratą. Skaičius perduodamas kaip parametras.*/

echo "<br>";
function squared($num) {
    return $num*$num;
}

echo squared(5);



/*Parašykite funkciją, kuri grąžina dviejų skaičių sumą. Skaičiai perduodami funkcijos parametrus.*/

echo "<br>";
function sum($num1, $num2) {
    return $num1+$num2;
}

echo sum(5, 6);






/*Parašykite funkciją, kuri iš antro parametro atima pirmą ir padalija iš trečio.*/

echo "<br>";
function math($num1, $num2, $num3) {
    return ($num2-$num1)/$num3;
}

echo math(5, 6, 2);









/*Parašykite funkciją, kuri priima kaip parametrą skaičių nuo 1 iki 7, o grąžina savaitės dieną lietuvių kalba.*/


echo "<br>";

function week($num1)
{
    if ($num1>0 && $num1 < 8 ) {
    switch ($num1) {
        case 1:
            return "pirmadienis";
            break;
        case 2:
            return "antradienis";
            break;
        case 3:
            return "trečiadienis";
            break;
        case 4:
            return "ketvirtadienis";
            break;
        case 5:
            return "penktadienis";
            break;
        case 6:
            return "šeštadienis";
            break;
        case 7:
            return "sekmadienis";
            break;
    }

}  else {
    return "skaičius neatitinka savaitės dienos";
}
    }

   /* geriau butu pirmiaus patikrinti del neaitikimo , tada net nereiks naudoti else plius galima naudoti dar default:
        return "skaicius neatitinka"*/


echo week(2);

/*Sukurkite "a", "b", "c" masyvą. Išveskite masyvo reikšmę naudodami funkciją var_dump().*/

$array = ['a', 'b', 'c'];

var_dump($array);



/*Naudodamiesi $arr masyvu iš ankstesnės užduoties, išveskite pirmo, antro ir trečio elementų turinį.*/


function printarray($array)
{
    for ($i = 0; $i < count($array); $i++) {
        echo($array[$i]);

    }
}
printarray($array);






/*Sukurkite masyvą $arr = ['a', 'b', 'c', 'd'] ir panaudoja jį išveskite eilutė 'a + b, c + d'.*/
echo "<br>";

$arr = ['a', 'b', 'c', 'd'];

function printarray2($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        echo($arr[$i]." "."+"." ");

    }
}
printarray2($arr);







/*Sukurkite $arr masyvą su elementais 2, 5, 3, 9. Padauginkite pirmąjį masyvo elementą iš antrojo, o trečiąjį elementą iš ketvirtojo. Sudėkite rezultatus ir priskirkite kintamajam $result. Išveskite šio kintamojo reikšmę.*/
echo "<br>";

$arr1 = [2, 5, 3, 9];

function matematika($arr1) {
    return $result = $arr1[0]*$arr1[1]+$arr1[2]*$arr1[3];
}

echo matematika($arr1);




/*Užpildykite $arr masyvą skaičiais nuo 1 iki 5. Nedeklaruokite masyvo elementų, o tiesiog užpildykite jį $arr[] = nauja reikšme.*/


$arr2 = [];

array_push($arr2, 1);
array_push($arr2, 2);
array_push($arr2, 3);
array_push($arr2, 4);
array_push($arr2, 5);


var_dump($arr2);
?>