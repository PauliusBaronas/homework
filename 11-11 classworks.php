<?php


if(isset($_GET['ONE'], $_GET['TWO'],$_GET['symbol'])) {


    switch ($_GET['symbol']) {
        case "+":
            $result = $_GET['ONE'] + $_GET['TWO'];
            break;
        case "-":
            $result = $_GET['ONE'] - $_GET['TWO'];
            break;
        case "*":
            $result = $_GET['ONE'] * $_GET['TWO'];
            break;

            case "/":
                $result = $_GET['ONE'] / $_GET['TWO'];;
            break;
    }


    echo $result;
}

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

<form method="GET" action="http://paulius/11-11%20classworks.php" >
    <div class="form-group">
        <label for="exampleInputPassword1">pirmas skaicius</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="1" name="ONE">
    </div>
    <div class="form-group form-check">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">antras skaicius</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="2" name="TWO">
    </div>
    <div class="form-group form-check">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">antras skaicius</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="+-*/" name="symbol">
    </div>
    <div class="form-group form-check">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>





</body>
</html>




