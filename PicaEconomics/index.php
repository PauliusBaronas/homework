<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Vesper+Libre&display=swap" rel="stylesheet">
    <style>
        .font {
            font-family: 'Vesper Libre', serif;
        }
    </style>

    <title>Pica</title>
</head>

<body>
    <form>
        <div class="container">
            <div class="row border border-primary text-danger font">
                <h1> Daugiau niekada nepermokėkite už picą </h1>
            </div>
            <div class="row border border-primary">
                <div class="col-sm font border border-primary">
                    <h3> Mažosios picos </h3>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Picos pavadinimas</label>
                        <input type="text" class="form-control" id="name_small">
                        <small id="textHelp" class="form-text text-muted">Pavadinkite picą taip, jog atsimintumėte kitai analizei</small>
                    </div>
                    <div class="form-row">
                        <div class="col-6 mb-3">
                            <label for="validationDefault01">Picos skersmuo </label>
                            <input type="text" class="form-control" id="validationDefault01" value="25" required>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="validationDefault02">matavimo vienetas </label>
                            <input type="text" class="form-control" id="validationDefault02" value="cm" required>
                        </div>
                        <div class="input-group-prepend">

                            <div class="input-group-text">Eur</div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="9.99">
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Išsaugoti picą tolimesnei analizei</label>
                    </div>
                </div>
                <div class="col-sm border border-primary">
                    One of three columns
                </div>
                <div class="col-sm font border border-primary">
                    <h3> Didžioji pica </h3>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Picos pavadinimas</label>
                        <input type="text" class="form-control" id="name_large">
                        <small id="emailHelp" class="form-text text-muted">Pavadinkite picą taip, jog atsimintumėte kitai analizei</small>
                    </div>
                    <div class="form-row">
                        <div class="col-6 mb-3">
                            <label for="validationDefault01">Skersmuo</label>
                            <input type="text" class="form-control" id="validationDefault01" value="25" required>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="validationDefault02">Matavimo vienetas</label>
                            <input type="text" class="form-control" id="validationDefault02" value="cm" required>
                        </div>
                        <div class=" border border-primary">
                            kaina
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                          </div>
                          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Išsaugoti picą tolimesnei analizei</label>
                    </div>
                </div>

            </div>
        </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
</body>

</html>