<?php
require("math-class.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $plus = new mathPlus(array(4,5,6));
    echo $plus->calculate();

    $minus = new mathMinus(array(5,4,3));
    echo $minus->calculate();

    $multiply = new mathMultiply(array(4,6,9));
    echo $multiply->calculate();
    ?>
  </body>
</html>
