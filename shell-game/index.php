<?php
include("class-ball.php");
include("class-player.php");
include("class-cup.php");
include("view.php");

$ball = new ball("red");
$player = new player("Youssef", 100);
echo $cup1->liftUp();
echo $cup2->putDown();
echo $cup3->putDown();


?>
