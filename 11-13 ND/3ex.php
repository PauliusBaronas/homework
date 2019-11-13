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
<div> <h5> Paklauskite vartotojo, ar jis žino PHP naudodamas du radijo mygtukus. Parodykite rezultatą ekrane. Įsitikinkite, kad pagal numatytuosius nustatymus viena iš parinkčių jau yra pažymėta. </h5></div>
    <div class ="card mb-2" >
        <div class="card-header">
            Ar žinote PHP kalbą?
        <form method = "POST" action="3ex_be.php" >
            <div>
                NE
                <input type="radio" name="check" value="no">
            </div>
            <div>
                TAIP
                <input type="radio" name="check" value="yes">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>



        </form>
    </div>
</div>






</body>
</html>