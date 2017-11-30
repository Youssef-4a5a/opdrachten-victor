<?php
interface CarInterface{
    
    /**
     * 
     * @param string $color
     * @param string $manu = manufacturer
     * @param string $type
     * @param string $fuel
     * @param boolean $check
     */
    public function __construct($color = null, $manu, $type, $fuel, $check);
}

interface ShowInfoInterface{
    /**
     * 
     */
    public function ShowInfo();
}

class Person implements ShowInfoInterface{
  public $name;
  public $age;

  public function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
  }

  public function setAge($age){
    $this->age = $age;
  }

  public function getAge(){
    if($this->age > 0 && $this->age < 150){
      return 'Zijn/haar leeftijd is '.$this->age.'.<br />';
    } else{
      return 'Zijn/haar leeftijd is niet correct.<br />';
    }
  }

  function showInfo(){
    return 'Dit is '.$this->name.'<br />';
  }

  public function __destruct(){

  }
}



class Car implements CarInterface, ShowInfoInterface{
  private $color = null;
  public $manufacturer;
  public $type;
  private $fuel;
  public $economyCheck = true;

  public function __construct($color, $manu, $type, $fuel, $check){
    $this->color = $color;
    $this->manu = $manu;
    $this->type = $type;
    $this->fuel = $fuel;
    $this->economyCheck = $check;
  }

  public function ShowInfo(){
    $html = 'Color: '.$this->color.'<br />';
    $html.= 'Manufacturer: '.$this->manu.'<br />';
    $html.= 'Type: '.$this->type.'<br />';
    $html.= 'Fuel: '.$this->fuel.'<br />';


    return $html;
  }

  public function checkEco(){
    if($this->economyCheck == true){
      $html = 'This car is economically viable.<br />';
    } else{
      $html = 'This car is NOT economically viable.<br />';
    }

    return $html;
  }

  public function setColor($color){
    $this->color = $color;
  }

  public function getColor(){
    return $this->color;
  }

  public function checkColor(){
    if($this->color == 'Geel' || $this->color == 'Groen' || $this->color == 'Red'){
      $colorCheck = 'This color is economically viable<br />';
    } else{
      $colorCheck = 'This color is NOT economically viable<br />';
    }

    return $colorCheck;
  }
}



$tim = new person('Tim', 21);
echo $tim->showInfo();
echo $tim->setAge(170);
echo $tim->getAge();

$sharon = new person('Sharon', 21);
echo $sharon->showInfo();

$car1 = new car('Green', 'Ford', 'Mustang', 'Gasoline', false);
echo $car1->ShowInfo();
echo $car1->checkEco();
echo $car1->setColor('Black');
echo $car1->checkColor();

?>
