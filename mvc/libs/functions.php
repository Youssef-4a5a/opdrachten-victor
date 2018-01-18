<?php

function loadView($viewFile, $vars = []) {
    extract($vars);
    include APP_PATH . '/views/' . $viewFile . '.php';
}

function getDBConnection() {
    static $conn = null;
    if ($conn !== null) {
        return $conn;
    }
    
    $server = 'localhost';
    $user = 'root';
    $pass = '';

    try {
        $conn = new PDO("mysql:host=$server;dbname=my_web_app", $user, $pass);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    
    return $conn;
}

//class View {
//
//    private $viewFile;
//    private $vars;
//
//    public function __construct($viewFile, $vars) {
//        $this->viewFile = $viewFile;
//        $this->vars = $vars;
//    }
//
//    public function loadView($viewFile, $vars = []) {
//        extract($vars);
//        include APP_PATH . '/views/' . $viewFile . '.php';
//    }
//    
////    return view as string
////    public function render(){
////        ob_start();
////        
////        ob_end_flush();
////    }
//
//}
