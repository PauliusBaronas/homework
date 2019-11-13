<?php



if (isset($_POST['username'], $_POST['password'])) {

    if ($_POST['password'] == 'qwerty') {
        $check = is_numeric($_POST['username']);
        echo $check;
        echo "slapta puslapio dalis";

    } else {

        require('11-13 ND 1 FE.PHP');
        echo 'duomenys įvesti neteisingai';

    }

}

?>


