<?php

class PagesController {

    public function home() {
        loadView('theme/header');
        loadView('pages/home', [
            'name' => 'Tom',
            'age' => 20
        ]);
        loadView('theme/footer');
    }

    public function about() {
        loadView('theme/header');
        include 'views/pages/about.php';
        loadView('theme/footer');
    }

}
