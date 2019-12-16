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
    <link rel="stylesheet" type="text/css" href="css.css">
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
        <div class="container">
            <form action="maths.php" method="POST">
            <div class="row border border-secondary rounded text-danger font row justify-content-center">
                <div>
                <h1> Daugiau niekada nepermokėkite už picą </h1>
                </div>
            </div>
            <div class="row border border-secondary rounded">
                <div class="col-sm font border border-secondary rounded ">
                    <h3> Mažosios picos </h3>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Picos pavadinimas</label>
                        <input type="text" class="form-control" id="name_small" placeholder="'Dodo' Champion maža" name="small_name">
                        <small id="textHelp" class="form-text text-muted">Pavadinkite picą taip, jog atsimintumėte kitai analizei</small>
                    </div>
                    <div class="form-row">
                        <div class="col-6 mb-3">
                            <label for="validationDefault01">Picos skersmuo </label>
                            <input type="number" class="form-control" id="validationDefault01" value="25" required name="small_diameter">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="validationDefault02">matavimo vienetas </label>
                            <input type="text" class="form-control" id="validationDefault02" value="cm" required name="small_uom">
                        </div>
                        <div class="input-group mb-3">
                        <div class="col-12">
                            Kaina
                        </div>
                        <div class="input-group-prepend">
                            <div class="input-group-text">Eur</div>
                            <input type="decimal" class="form-control" id="inlineFormInputGroup" placeholder="9.99" name="small_price">
                        </div>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="validationDefault01"> Picų kiekis </label>
                            <input type="number" class="form-control" id="validationDefault01" value="1" name="small_qnty">
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="small_save" value="small_save">
                        <label class="form-check-label" for="exampleCheck1">Išsaugoti picą tolimesnei analizei</label>
                    </div>
                    <label for="validationCustom04">Išsaugotų picų sąrašas</label>
                      <select class="custom-select" id="validationCustom04" >
                        <option selected disabled value="">Pasirinkite...</option>
                        <option>...</option>
                      </select>
                </div>
                <div class="col-sm border border-secondary bg-light ">
                    <div class="col-sm ">
                    <div class="col-12 text-center font row ">
                        <h4> <?php if(isset($_SESSION['small_area'])) 
                        {
                            echo "mažų picų plotas: " . $_SESSION['small_area']; 
                        } ?> </h4>
                        <h4> <?php if(isset($_SESSION['large_area'])) {
                            echo "didelių picų plotas: " . $_SESSION['large_area']; 
                            } ?> </h4> 
                        <h4> <?php if(isset($_SESSION['small_area_price'])) {
                            echo "už 1 Eur gaunate tiek ploto mažos picos: " . $_SESSION['small_area_price'];
                            }  ?> </h4> 
                        <h4> <?php if(isset($_SESSION['large_area_price'])) {
                            echo "už 1 Eur gaunate tiek ploto didelės picos: " . $_SESSION['large_area_price'];
                            }  ?> </h4> 
                        <h4> <?php if(isset($_SESSION['result'])) {
                            echo $_SESSION['result'];
                            }  ?> </h4> 

                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary mr-2"> Skaičiuoti </button>
                    </div>
                    <canvas id="pizza"> <script src="js.js"></script> </canvas>
                </div>
                </div>
                <div class="col-sm font border border-secondary rounded">
                    <h3> Didžioji pica </h3>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Picos pavadinimas</label>
                        <input type="text" class="form-control" id="name_large" placeholder="'Dodo' Vegetariška didelė" name="large_name">
                        <small id="emailHelp" class="form-text text-muted">Pavadinkite picą taip, jog atsimintumėte kitai analizei</small>
                    </div>
                    <div class="form-row">
                        <div class="col-6 mb-3">
                            <label for="validationDefault01">Picos skersmuo</label>
                            <input type="number" class="form-control" id="validationDefault01" value="25" name="large_diameter">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="validationDefault02">matavimo vienetas</label>
                            <input type="text" class="form-control" id="validationDefault02" value="cm" name="large_uom">
                        </div>
                        <div class=" col-12">
                            Kaina
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Eur</span>
                          </div>
                          <input type="decimal" class="form-control" placeholder="9.99" aria-label="Username" aria-describedby="basic-addon1" name="large_price">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="validationDefault01"> Picų kiekis </label>
                            <input type="number" class="form-control" id="validationDefault01" value="1" required name="large_qnty">
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="large_save" name="large_save">
                        <label class="form-check-label" for="exampleCheck1">Išsaugoti picą tolimesnei analizei</label>
                    </div>
                    <label for="validationCustom04">Išsaugotų picų sąrašas</label>
                      <select class="custom-select" id="validationCustom04" >
                        <option selected disabled value="">Pasirinkite...</option>
                        <option>...</option>
                      </select>
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