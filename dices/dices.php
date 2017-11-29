<?php require("dices-class.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      img{
        width: 66px;
        height: 66px;
      }
      </style>
  </head>
  <body>
    <?php

    $normalDice = new DiceNormal();
    for ($i=0; $i < 6; $i++) {
      echo $white->color();
    }

    ?>
  </body>
</html>
