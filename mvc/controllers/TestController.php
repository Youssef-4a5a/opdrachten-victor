<?php

class TestController{
    public function koning(){
        include 'views/theme/header.php';
        echo '<img src="./assets/images/boos.bmp" style="width:100%; height:100%;"/>';
        include 'views/theme/footer.php';
    }
}

