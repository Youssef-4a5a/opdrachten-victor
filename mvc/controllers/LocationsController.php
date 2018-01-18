<?php

class LocationsController{
    public function overview(){
        
        require_once APP_PATH . '/models/LocationsModel.php';
        
        $locationModel = new LocationsModel();
        $locationModel->getAll();
        
        loadView('theme/header');
        loadView('locations/overview', ['arr' => $locationModel->getAll()]);
        loadView('theme/footer');
    }
}

