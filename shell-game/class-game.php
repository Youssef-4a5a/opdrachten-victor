<?php
class Game{
  public $amountPerGame = null;

  public function __construct($amountPerGame){
    $this->amountPerGame = $amountPerGame;
  }

  public function addAmount(){
    $this->amountPerGame += 20;
  }
}


?>
