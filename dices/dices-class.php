<?php
  abstract class dices{
    protected $dice = null;

    public function __construct(){
    }

    public function getNumber($dice){
      return $this->dice;
    }

    protected function roll(){
      $this->dice = rand(1, 6);
    }


  }

  class DiceNormal extends dices{
    public function color(){
      $this->roll();
      return "<img src='img/$this->dice.png' />";
    }
  }

  // class DiceInverted extends dices{
  //   protected function roll(){
  //
  //   }
  // }
  //
  // class Dice3DNumbers extends dices{
  //   protected function roll(){
  //
  //   }
  // }
  //
  // class Dice3DEyes extends dices{
  //   protected function roll(){
  //
  //   }
  // }
?>
