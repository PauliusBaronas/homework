<?php


require 'form.php';

if (isset($_POST['username'], $_POST['password'], $_POST['password2'])) {
    if (empty($_POST['username']) && empty($_POST['password']) && empty($_POST['password2'])) {

        echo "neuzpildėte formos";
    }  else {


    if ($_POST['password'] == $_POST['password2']) {


        $result = $_POST['username'] . " " . $_POST['password'];

        echo $result;
    }
    else {
        echo "neteisingai pakartotas slaptazodis";
    }
}
}

?>