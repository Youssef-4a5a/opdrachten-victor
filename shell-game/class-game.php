<?php
class Game{
  public $amountPerGame;
  
  public function __construct($amount){
    if(isset($_COOKIE['Amount'])){
      $this->amountPerGame = $_COOKIE['Amount'];
    }
    
    else{
    $this->amountPerGame = $amount;
    }
  }

  public function getAmount(){
    return $this->amountPerGame;
  }
  
  public function start(){
      
  }
}



?>
