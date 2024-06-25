<?php

abstract class Vehicle {
    protected $brand;
    protected $model;
    protected $year;
    protected $color;

    public function __construct($brand, $model, $year, $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function getYear() {
        return $this->year;
    }

    public function getColor() {
        return $this->color;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    abstract public function getFuelType();
    abstract public function printVehicleInfo();
}

abstract class Car extends Vehicle {
    protected $seatingCapacity;

    public function __construct($brand, $model, $year, $color, $seatingCapacity) {
        parent::__construct($brand, $model, $year, $color);
        $this->seatingCapacity = $seatingCapacity;
    }

    public function getSeatingCapacity() {
        return $this->seatingCapacity;
    }

    public function setSeatingCapacity($seatingCapacity) {
        $this->seatingCapacity = $seatingCapacity;
    }

    abstract public function calculateMileage();
}

class ElectricCar extends Car {
    private $batteryCapacity;

    public function __construct($brand, $model, $year, $color, $seatingCapacity, $batteryCapacity) {
        parent::__construct($brand, $model, $year, $color, $seatingCapacity);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function getBatteryCapacity() {
        return $this->batteryCapacity;
    }

    public function setBatteryCapacity($batteryCapacity) {
        $this->batteryCapacity = $batteryCapacity;
    }

    public function getFuelType() {
        return "Elektrisch";
    }

    public function calculateMileage() {
        return $this->batteryCapacity * 5;
    }

    public function printVehicleInfo() {
        echo "<tr>";
        echo "<td>Electric Car</td>";
        echo "<td>{$this->brand}</td>";
        echo "<td>{$this->model}</td>";
        echo "<td>{$this->year}</td>";
        echo "<td>{$this->color}</td>";
        echo "<td>{$this->getFuelType()}</td>";
        echo "<td>{$this->seatingCapacity}</td>";
        echo "<td>{$this->batteryCapacity} kWh</td>";
        echo "<td>{$this->calculateMileage()} km</td>";
        echo "</tr>";
    }
}

class GasolineCar extends Car {
    private $engineSize;

    public function __construct($brand, $model, $year, $color, $seatingCapacity, $engineSize) {
        parent::__construct($brand, $model, $year, $color, $seatingCapacity);
        $this->engineSize = $engineSize;
    }

    public function getEngineSize() {
        return $this->engineSize;
    }

    public function setEngineSize($engineSize) {
        $this->engineSize = $engineSize;
    }

    public function getFuelType() {
        return "Benzine";
    }

    public function calculateMileage() {
        return 10000 / $this->engineSize;
    }

    public function printVehicleInfo() {
        echo "<tr>";
        echo "<td>Gasoline Car</td>";
        echo "<td>{$this->brand}</td>";
        echo "<td>{$this->model}</td>";
        echo "<td>{$this->year}</td>";
        echo "<td>{$this->color}</td>";
        echo "<td>{$this->getFuelType()}</td>";
        echo "<td>{$this->seatingCapacity}</td>";
        echo "<td>{$this->engineSize} cc</td>";
        echo "<td>{$this->calculateMileage()} km</td>";
        echo "</tr>";
    }
}

class HydrogenCar extends Car {
    private $fuelCellSize;

    public function __construct($brand, $model, $year, $color, $seatingCapacity, $fuelCellSize) {
        parent::__construct($brand, $model, $year, $color, $seatingCapacity);
        $this->fuelCellSize = $fuelCellSize;
    }

    public function getFuelCellSize() {
        return $this->fuelCellSize;
    }

    public function setFuelCellSize($fuelCellSize) {
        $this->fuelCellSize = $fuelCellSize;
    }

    public function getFuelType() {
        return "Waterstof";
    }

    public function calculateMileage() {
        return $this->fuelCellSize * 50;
    }

    public function printVehicleInfo() {
        echo "<tr>";
        echo "<td>Hydrogen Car</td>";
        echo "<td>{$this->brand}</td>";
        echo "<td>{$this->model}</td>";
        echo "<td>{$this->year}</td>";
        echo "<td>{$this->color}</td>";
        echo "<td>{$this->getFuelType()}</td>";
        echo "<td>{$this->seatingCapacity}</td>";
        echo "<td>{$this->fuelCellSize} L</td>";
        echo "<td>{$this->calculateMileage()} km</td>";
        echo "</tr>";
    }
}

$electricCar = new ElectricCar("Tesla", "Model S", 2021, "White", 5, 100);
$gasolineCar = new GasolineCar("Toyota", "Corolla", 2020, "Red", 5, 2000);
$hydrogenCar = new HydrogenCar("Toyota", "Mirai", 2022, "Blue", 5, 5);

echo "<table border='1'>";
echo "<tr>";
echo "<th>Type</th>";
echo "<th>Brand</th>";
echo "<th>Model</th>";
echo "<th>Year</th>";
echo "<th>Color</th>";
echo "<th>Fuel Type</th>";
echo "<th>Seating Capacity</th>";
echo "<th>Additional Info</th>";
echo "<th>Mileage</th>";
echo "</tr>";

$electricCar->printVehicleInfo();
$gasolineCar->printVehicleInfo();
$hydrogenCar->printVehicleInfo();

echo "</table>";