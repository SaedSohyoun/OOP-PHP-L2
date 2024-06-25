<?php

class VehicleList {
    private $vehicles = [];

    public function addVehicle($vehicle) {
        $this->vehicles[] = $vehicle;
    }

    public function getAllVehicles() {
        return $this->vehicles;
    }
}
