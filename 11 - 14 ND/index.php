<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="form-group form-check">
    <p1>Sukurkite 2 puslapius: index.php ir hello.php. index.php parodykite vartotojo vardą iš sesijos. Jei nenurodyta, parodykite nuorodą į hello.php, ten naudodamiesi forma gaukite vardą, iššsaugokite sesijoje ir grįžkite į index.php
    </p1>
    <p2>
__________________________________
        Jūsų username yra:
    </p2>
    <?php
    if (empty($_SESSION['user'])) {

        echo "<a href='hello.php'> spauskite čia </a>";

    } else {
        echo $_SESSION['user'];

}

    ?>

    _______________________________ <a href='hello.php'> back end </a>
</div>





</body>
</html>




