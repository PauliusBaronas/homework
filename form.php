
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
    <div class ="card mb-2" >
<form method = "POST" action="http://paulius/registracija.php" >

    <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="username">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    </div>
    <div class="form-group form-check">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Repeat password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Please repeat password" name="password2">
    </div>
    <div class="form-group form-check">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>



</form>
    </div>
</div>







</body>
</html>