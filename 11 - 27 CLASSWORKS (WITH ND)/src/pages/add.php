<?php

$statement = $dbh->prepare('INSERT INTO employees (name, surname, position_id, salary) VALUES (:fname, :sname, :position, :salary)');


$statement->execute([
    'fname' => $_POST['name'],	
    'sname' => $_POST['surname'],
    'position' => $_POST['position'],
    'salary' => $_POST['salary'],
]);


header('Location: ' . $_SERVER['HTTP_REFERER']);

exit;