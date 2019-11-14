<!--Sukurkite formą su dviem laukais: prisijungimo vardu ir slaptažodžiu. Kai įvesite savo vardą ir slaptažodį „qwerty” naudodamiesi POST metodu, parodykite slaptą puslapio dalį, priešingu atveju pasakykite, kad duomenys įvesti neteisingai.-->
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
<div> <h5> Paklauskite vartotojo vardo naudodamiesi forma. Padarykite checkbox'ą: jei jis pažymėtas, tada pasveikinkite vartotoją, jei nepažymėtas, atsisveikinkite su vartotoju.</h5></div>
    <div class ="card mb-2" >
        <form method = "POST" action="2ex_be.php" >
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="checkbox" aria-label="Checkbox for following text input" name="checkbox">
                    </div>
                </div>
                <input type="text" class="form-control" aria-label="Text input with checkbox" name="username">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>



        </form>
    </div>
</div>

<!--Paklauskite vartotojo vardo naudodamiesi forma. Padarykite checkbox'ą: jei jis pažymėtas, tada pasveikinkite vartotoją, jei nepažymėtas, atsisveikinkite su vartotoju.-->





</body>
</html>