<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
     body { text-align:center; font-family: arial; }
     .cups { margin:20px auto 70px; width:520px; height:183px; border-bottom:3px solid #000;
    }
     .cup { width:132px; height:113px; background-image:url(images/cup.png); float:left; margin:0
    20px; }
     .ball { position:absolute; margin-top:72px; margin-left:44px; z-index:-1; width:43px;
    height:41px; background:url(images/ball.png); }
     .putdown { margin-top:70px; }
     .putdown .ball { margin-top:72px; }
     .liftup { margin-top:0px; }
     .liftup .ball { margin-top:142px; }
     .player { margin:0 auto; width:92px; height:243px; background:transparent url(images/player.png)
    no-repeat 0 60px; }
     .clear { clear:both; }
     .red { background-color:red; }
     .yellow { background-color:yellow; }
     .blue { background-color:blue; }
    </style>
  </head>
  <body>

    <div class="cups">
       <?php
        echo $ball;
        echo $cups[1];
        echo $cups[2];
        echo $cups[3];
        ?>

     </div>

     <div class="clear"></div>
     </div>
     <?php
        echo $player; echo $amount->getAmount();
      ?>

<button><a href=?startGame=1>Start Game!</a></button>

  </body>
</html>