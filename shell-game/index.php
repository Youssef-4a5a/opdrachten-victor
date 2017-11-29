<?php
session_start();
error_reporting(0);

include 'class-ball.php';
include 'class-player.php';
include 'class-cup.php';
include 'class-game.php';

$ball = new Ball('blue');
$player = new Player('Youssef', 100);
$amountPerGame = new Game(100);


$cups[1] = new Cup('blue', 'plastic', 1);
$cups[2] = new Cup('red', 'plastic', 2);
$cups[3] = new Cup('yellow', 'plastic', 3);

if(ISSET($_GET['show_cup'])){
  $cups[$_GET['show_cup']]->liftUp();
}

if(ISSET($_GET['startGame'])){
  $random = rand(1,3);
  $_SESSION["ball"] = $random;
}

if(ISSET($_SESSION["ball"])){
    $cups[$_SESSION["ball"]]->ball = $ball->show();
}

if($_SESSION["ball"] == $_GET["show_cup"]){
  $amountPerGame->addAmount();
  echo 'Gewonnen!';
}

include 'view.php';
 ?>
