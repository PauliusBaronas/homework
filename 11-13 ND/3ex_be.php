<?php


if (isset($_POST['check'])) {
    if ($_POST['check'] == 'no') {

        echo "gaila, vartotojas nežino PHP kalbos";

    } elseif($_POST['check'] == 'yes') {
        echo "puiku, vartotojas žino PHP kalbą";
    }


}

  else {

      echo "pažymėkite bent vieną variantą";
  }
?>

