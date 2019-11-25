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
<style>


    .top-buffer {
    margin-top:20px;
    }
</style>
</head>

<body>
<div class="container">
        <div class="row mx-lg-n10">
        <div class="col-6">
            START
            <form action="BACK.php" method="POST">
                <div class="form-row">
                    <div class="col-5">
                        <input type="text" class="form-control" placeholder="YEAR" name="s_year">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="MONTH" name="s_month">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="DAY" name="s_day">
                    </div>
                </div>
        </div>
        <div class="col-6">
            END
            <div class="form-row">
                <div class="col-5">
                    <input type="text" class="form-control" placeholder="YEAR" name="e_year">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="MONTH" name="e_month">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="DAY" name="e_day">
                </div>
            </div>
        </div>
    </div>
    <div class="row top-buffer">
        <div class="col-4">
        </div>
        <div class="col-4 text-center">
            <button type="submit" class="btn btn-outline-dark" value="Upload Image" name="submit">CALCULATE</button>
            </form>
        </div>
        <div class="col-4">
        </div>
        </div>
    </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>





