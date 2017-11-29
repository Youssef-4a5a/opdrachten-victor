<?php require("spriteclass.php"); ?>
<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cirno</title>
    <style>
      .smw-mario{
        background-image: url('smw-mario.png');
        width: 15px;
        height: 15px;
        display: inline-block;
      }

      .cirno{
        background-image: url("cirno.png");
        width: 43px;
        height: 80px;
        display: inline-block;
      }
      .stand{
        background-position: top left;
      }
      .movement1{
        background-position: 5% 0%;
      }
      .movement2{
        background-position: 10% 0%;
      }
    </style>
  </head>
  <body>
    <?php
      // $stand = new Touhou('stand');
      // echo $stand->characterStance();
      //
      // $movement1 = new Touhou('movement1');
      // echo $movement1->characterStance();
      //
      // $movement2 = new Touhou('movement2');
      // echo $movement2->characterStance();

      $mario = new SMW_Mario('smw-mario', 'stand');
      echo $mario->characterStance();

      $walking = new Cirno();
      echo $walking->characterStance();

      $swimming = new Chen();
      echo $swimming->characterStance();
     ?>
  </body>
</html>
