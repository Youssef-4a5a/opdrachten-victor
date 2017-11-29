<?php
class cup{
  public $color = null;
  public $type = null;
  public $positionUp = null;

  public function __construct(string $color, string $type){
    $this->color = $color;
    $this->type = $type;
  }

  public function liftUp(){
    return $this->positionUp = true;
  }

  public function putDown(){
    return $this->positionUp = false;
  }

  public function show(){
    if(putDown() == true){
      return '<div class="cup '. $this->color .' liftup"></div>';
    } elseif (liftUp() == true){
      return '<div class="cup '. $this->color .' putdown"></div>';
    }
  }
}

?>
