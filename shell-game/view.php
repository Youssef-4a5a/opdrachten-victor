<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    body { text-align:center; font-family: arial; }
    .cups { margin:20px auto 70px; width:520px; height:183px; border-bottom:3px solid #000;
    }
    .cup { width:132px; height:113px; background-image:url(cup.png); float:left; margin:0
    20px; }
    .ball { position:absolute; margin-top:72px; margin-left:44px; z-index:-1; width:43px;
    height:41px; background:url(ball.png); }
    .putdown { margin-top:70px; }
    .putdown .ball { margin-top:72px; }
    .liftup { margin-top:0px; }
    .liftup .ball { margin-top:142px; }
    .player { margin:0 auto; width:92px; height:243px; background:transparent url(player.png)
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
        $cup1 = new cup("blue", "plastic");
        echo $cup1->show();
        $ball = new ball("red");
        echo $ball->show();
        $cup2 = new cup("yellow", "plastic");
        echo $cup2->show();
        $cup3 = new cup("yellow", "plastic");
        echo $cup3->show();
        ?>
      </div>
        <div class="clear"></div>
    </div>
      <?php
      $player = new player("Youssef", 100);
      echo $player->show();

      ?>
  </body>
</html>
