<?php
session_start();


$textOK=0;

if(empty($_POST['NAME']) || empty($_POST['EMAIL']) || empty($_POST['TEXT'])) {
    echo 'Neužpildytos visos formos';
    echo '<script>setTimeout(function(){window.location.replace("index2.php")},1500);</script>';

} elseif ( $_POST['ans']==$_SESSION['var'][2]) {

    if(!isset($_SESSION['name']) ) {
    $_SESSION['name'] = [];
    }

//    $_SESSION['comments'][] = [
//        'name' => $_POST['NAME'],
//        'email' =>  $_POST['EMAIL'],
//        'text' =>  $_POST['TEXT'],
//    ];
//
        $_SESSION['name'][] =  $_POST['NAME'];


//    $_SESSION['email'] = [];
//    $_SESSION['text'] = [];
//
//    $_SESSION['name'] = $_POST['NAME']; /*0*/
//    $_SESSION['email'] = $_POST['EMAIL'];/* 1*/
//    $_SESSION['text'] = $_POST['TEXT'];/*2*/
    echo '<script>setTimeout(function(){window.location.replace("index2.php")},1500);</script>';

}

else {

    echo "neteisingas kodo atsakymas";
    echo '<script>setTimeout(function(){window.location.replace("index2.php")},1500);</script>';

}

/*echo '<script>setTimeout(function(){window.location.replace("index2.php")},1500);</script>';
*/


?>