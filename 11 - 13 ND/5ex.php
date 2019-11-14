<?php
/*
function createInput($type, $name) {
  return sprintf(' <%s type="%s" name="%s">', 'input', $type, $name);
}


*/?>
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
<div class="container pt-3">
<div> <h5> Paklauskite vartotojo, kurias kalbas jis žino: html, css, php, javascript. Parodykite kalbas, kurias vartotojas žino </h5></div>
    <div class ="card mb-2" >
        <div class="card-header">
            Kokias programavimo kalbas žinote?
        <form method = "POST" action="5ex_be.php" >
            <div>
                html
            <input type="checkbox" name="box[]" value="html">
<!--                --><?php /*echo createInput('text', 'name');*/?>
            </div>
            <div>
                css
                <input type="checkbox" name="box[]" value="css">
            </div>
            <div>
                php
                <input type="checkbox" name="box[]" value="php">
            </div>
            <div>
                javascript
                <input type="checkbox" name="box[]" value="javascript">
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>



        </form>
    </div>
</div>






</body>
</html>