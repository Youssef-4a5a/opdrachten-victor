<?php

class LocationsModel {

    public function getAll() {
        $conn = getDBConnection();
        
        $stmt = $conn->prepare("SELECT * FROM locations");
        $stmt->execute();
        
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        
        return $result;
    }

}
