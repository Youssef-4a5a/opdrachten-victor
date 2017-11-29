<?php
abstract class mathOperator{
  protected $numbers = array();

  public function __construct(array $numbers){
    $this->numbers = $numbers;
  }

  public function calculate(){
    $result = $this->numbers[0];
    for($i=1; $i<count($this->numbers); $i+=1){
      return $result = $this->calc($result, $this->numbers[$i]);
    }
  }

  abstract protected function calc($numberA, $numberB);
}

class mathPlus extends mathOperator{
  protected function calc($numberA, $numberB){
    $result = $numberA + $numberB;
    return $numberA. ' + ' .$numberB. ' = ' .$result.'<br />';
  }
}

class mathMinus extends mathOperator{
  public function calc($numberA, $numberB){
    $result = $numberA - $numberB;
    return $numberA. ' - ' .$numberB. ' = ' .$result.'<br />';
  }
}

class mathMultiply extends mathOperator{
  public function calc($numberA, $numberB){
    $result = $numberA * $numberB;
    return $numberA. ' x ' .$numberB. ' = ' .$result.'<br />';
  }
}

 ?>
