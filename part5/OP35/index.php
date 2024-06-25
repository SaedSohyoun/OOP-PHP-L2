<?php

require_once 'Vehicle.php';
require_once 'VehicleList.php';

$vehicleList = new VehicleList();

Vehicle::setVehicleList($vehicleList);

$motorcycle = new Motorcycle();
$truck = new Truck();
$electricCar = new ElectricCar();
$gasolineCar = new GasolineCar();
$hydrogenCar = new HydrogenCar();

echo "<h2>Initial list of vehicles:</h2>";
echo "<table border='1'>";
echo "<tr><th>Vehicle Class</th></tr>";

foreach ($vehicleList->getAllVehicles() as $vehicle) {
    echo "<tr><td>" . get_class($vehicle) . "</td></tr>";
}

echo "</table>";

$anotherMotorcycle = new Motorcycle();
$anotherTruck = new Truck();
$anotherElectricCar = new ElectricCar();

echo "<h2>Updated list of vehicles:</h2>";
echo "<table border='1'>";
echo "<tr><th>Vehicle Class</th></tr>";

foreach ($vehicleList->getAllVehicles() as $vehicle) {
    echo "<tr><td>" . get_class($vehicle) . "</td></tr>";
}

echo "</table>";