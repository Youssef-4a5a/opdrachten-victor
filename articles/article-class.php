<?php
class Article{
    public $name;
    public static $countArticles = 0;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function setAmount($countArticles){
        static::$countArticles = $countArticles;
    }
    
    public static function getAmount(){
        return static::$countArticles;
    }
}