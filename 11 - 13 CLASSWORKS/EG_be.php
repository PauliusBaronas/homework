<?php
session_start();


if(isset($_POST['ONE'], $_POST['TWO'],$_POST['symbol'])) {


    function calculator ($ONE, $TWO, $SYMBOL)
    {


        switch ($SYMBOL) {
            case "+":
                $result = $ONE + $TWO;
                break;
            case "-":
                $result = $ONE - $TWO;
                break;
            case "*":
                $result = $ONE * $TWO;
                break;

            case "/":
                $result = $ONE / $TWO;
                break;
            case "^2":
                $result = $ONE * $ONE;
                break;
        }

        return $result;

    }

    $result = calculator($_POST['ONE'], $_POST['TWO'], $_POST['symbol']);


    $_SESSION['result'][] = $result;

/*    GRAZINA I PRADINI PSL*/

    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

?>
