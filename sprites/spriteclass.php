<?php
class gameCharacter{
  protected $sheetClass = null;
  protected $stance = null;

  public function __construct($sheetClass, $stance){
    $this->sheetClass = $sheetClass;
    $this->stance = $stance;
  }

  public function characterStance(){
    $result = '<span class="'.$this->sheetClass.' '. $this->stance .'"></span>';
    return $result;
  }
}

class SMW_Mario extends gameCharacter{

}

class Touhou extends gameCharacter{
  protected $stance = null;

  public function __construct(){
  }
}

class Cirno extends Touhou{
  protected $sheetClass = 'cirno';
  protected $stance = 'stand';


    public function walking(){
      return 'Walking';
    }
}

class Chen extends Touhou{
  protected $stance = 'movement1';


    public function swim(){
      return 'Swimming';
    }
}

?>
