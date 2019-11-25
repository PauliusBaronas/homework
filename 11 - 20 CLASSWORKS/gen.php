<?php

$one = rand(1,10);
$two = rand(10,20);
$result = $one + $two;
$_SESSION['var'][] = $one;
$_SESSION['var'][] = $two;
$_SESSION['var'][] = $result;

?>