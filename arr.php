<?php

/*cia naudojama rekursija*/

function makeArray ($number) {
    $arr = [];


    for ($i = 0; $i < $number; $i ++) {
        $arr[] = makeArray($i);
    }
    return $arr;
}
print_r(makeArray(5));




?>
