<?php
session_start();
require 'gen.php';

?>
<!doctype html>
<html lang='en'>

<head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>

    <title>Hello, world!</title>
    <style>


        .top-buffer {
            margin-top:20px;
        }
    </style>
</head>

<body>
<div class='container border border-danger'>
<form action='BACK2.php' method='POST'>
    <div class='form-group'>
           
                <input type='text' class='form-control' placeholder='name' name='NAME'>
                <input type='email' class='form-control' placeholder='name@example.com' name='EMAIL'>
                <textarea class='form-control' id='exampleFormControlTextarea1' rows='3' placeholder='TEXT' name='TEXT'></textarea>
    </div>
    <div class='form-group row border border-danger'>
        <label for='colFormLabelSm' class='col-sm-5 col-form-label col-form-label-sm'> CODE: <?php


        echo ($_SESSION['var'][0].'+'.$_SESSION['var'][1]);

        ?> = </label>
        <div class='col-sm-5'>
            <input type='number' class='form-control form-control-sm'  placeholder=''?' name='ans'>
        </div>
    </div>
    <div class='top-buffer border border-danger text-center'>
            <button type='submit' class='btn btn-outline-dark' value='Upload Image' >Submit</button>
    </div>
    <div class='row top-buffer '>

    </div>
</div>
</form>

<div class='container top-buffer border border-danger'>

<?php
if(isset($_SESSION['name']) && isset($_SESSION['email']) && isset($_SESSION['text'])) {

    var_dump($_SESSION['name']);

}
?>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
</body>

</html>





