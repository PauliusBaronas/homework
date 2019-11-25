
<?php
session_start();


if(isset($_POST['user'])) {

    $_SESSION['user'] = $_POST['user'];

    /*    GRAZINA I PRADINI PSL*/

    header('Location: buves.php');}


?>
<form method="POST" action="hello.php" >
    <div class="form-group">
        <label for="exampleInputPassword1">Įveskite savo username</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="user" name="user">
        <button type="submit" class="btn btn-primary">Submit</button>

</form>

