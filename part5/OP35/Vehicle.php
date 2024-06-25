<?php

abstract class Vehicle {
    protected static $vehicleList;

    public function __construct() {
        self::$vehicleList->addVehicle($this);
    }

    public static function setVehicleList($vehicleList) {
        self::$vehicleList = $vehicleList;
    }

    abstract public function drive();
}

class Motorcycle extends Vehicle {
    public function drive() {
        echo "Driving a motorcycle\n";
    }
}

class Truck extends Vehicle {
    public function drive() {
        echo "Driving a truck\n";
    }
}

abstract class Car extends Vehicle {
    // Car specific implementation or properties can go here
}

class ElectricCar extends Car {
    public function drive() {
        echo "Driving an electric car\n";
    }
}

class GasolineCar extends Car {
    public function drive() {
        echo "Driving a gasoline car\n";
    }
}

class HydrogenCar extends Car {
    public function drive() {
        echo "Driving a hydrogen car\n";
    }
}
