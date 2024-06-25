<?php

abstract class Vehicle {
    public static $allVehicles = [];

    public function __construct() {
        self::$allVehicles[] = $this;
    }

    abstract public function drive();

    public static function getAllVehicles() {
        return self::$allVehicles;
    }
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

$motorcycle = new Motorcycle();
$truck = new Truck();
$electricCar = new ElectricCar();
$gasolineCar = new GasolineCar();
$hydrogenCar = new HydrogenCar();

$anotherMotorcycle = new Motorcycle();
$anotherTruck = new Truck();
$anotherElectricCar = new ElectricCar();

echo "<table border='1'>";
echo "<tr><th>Vehicle Class</th></tr>";

foreach (Vehicle::getAllVehicles() as $vehicle) {
    echo "<tr><td>" . get_class($vehicle) . "</td></tr>";
}

echo "</table>";