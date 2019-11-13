<?php



if (isset($_POST['username'], $_POST['password'])) {

    if (is_numeric($_POST['username']) || is_numeric($_POST['password'])) {

        require('11-13 ND 1 FE.PHP');
        echo 'duomenys įvesti neteisingai';

    } else {

        $check = is_numeric($_POST['username']);
        echo $check;
        echo "slapta puslapio dalis";
    }

}

?>


