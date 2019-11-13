<?php


if (isset($_POST['box'])) {

    foreach ($_POST['box'] as $result) {
    echo $result. " ";
    }
}

  else {

      echo "pažymėkite bent vieną variantą";
  }
?>

