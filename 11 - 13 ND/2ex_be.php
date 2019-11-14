<?php


if (isset($_POST['checkbox'], $_POST['username'])) {
    if ($_POST['checkbox'] == true) {

        echo "labas". " ". $_POST['username'];

    }

} else {
    echo 'visogero';
}

?>

