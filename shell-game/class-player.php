<?php
class player{
  public $name = null;
  public $amount = null;
  
  /*
   * 
   */
  public function __construct($name='', $amount=0){
    $this->name = $name;
    $this->amount = $amount;
  }

  public function show(){
    return "<div class='player'><strong>$this->name: $this->amount</strong></div>";
  }
}
 ?>
