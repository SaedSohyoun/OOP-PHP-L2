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

class Car extends Vehicle {
    private $seatingCapacity;

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

    public function getFuelType() {
        return "Benzine";
    }

    public function printVehicleInfo() {
        echo "<tr>";
        echo "<td>Car</td>";
        echo "<td>{$this->brand}</td>";
        echo "<td>{$this->model}</td>";
        echo "<td>{$this->year}</td>";
        echo "<td>{$this->color}</td>";
        echo "<td>{$this->getFuelType()}</td>";
        echo "<td>{$this->seatingCapacity}</td>";
        echo "</tr>";
    }
}

class Motorcycle extends Vehicle {
    private $isOffRoad;

    public function __construct($brand, $model, $year, $color, $isOffRoad) {
        parent::__construct($brand, $model, $year, $color);
        $this->isOffRoad = $isOffRoad;
    }

    public function getIsOffRoad() {
        return $this->isOffRoad;
    }

    public function setIsOffRoad($isOffRoad) {
        $this->isOffRoad = $isOffRoad;
    }

    public function getFuelType() {
        return "Benzine";
    }

    public function printVehicleInfo() {
        $offRoadStatus = $this->isOffRoad ? 'Yes' : 'No';
        echo "<tr>";
        echo "<td>Motorcycle</td>";
        echo "<td>{$this->brand}</td>";
        echo "<td>{$this->model}</td>";
        echo "<td>{$this->year}</td>";
        echo "<td>{$this->color}</td>";
        echo "<td>{$this->getFuelType()}</td>";
        echo "<td>{$offRoadStatus}</td>";
        echo "</tr>";
    }
}

class Truck extends Vehicle {
    private $loadCapacity;

    public function __construct($brand, $model, $year, $color, $loadCapacity) {
        parent::__construct($brand, $model, $year, $color);
        $this->loadCapacity = $loadCapacity;
    }

    public function getLoadCapacity() {
        return $this->loadCapacity;
    }

    public function setLoadCapacity($loadCapacity) {
        $this->loadCapacity = $loadCapacity;
    }

    public function getFuelType() {
        return "Diesel";
    }

    public function printVehicleInfo() {
        echo "<tr>";
        echo "<td>Truck</td>";
        echo "<td>{$this->brand}</td>";
        echo "<td>{$this->model}</td>";
        echo "<td>{$this->year}</td>";
        echo "<td>{$this->color}</td>";
        echo "<td>{$this->getFuelType()}</td>";
        echo "<td>{$this->loadCapacity}kg</td>";
        echo "</tr>";
    }
}

$car = new Car("Toyota", "Corolla", 2020, "Red", 5);
$motorcycle = new Motorcycle("Yamaha", "MT-09", 2021, "Blue", true);
$truck = new Truck("Volvo", "FH16", 2019, "White", 20000);

echo "<table border='1'>";
echo "<tr>";
echo "<th>Type</th>";
echo "<th>Brand</th>";
echo "<th>Model</th>";
echo "<th>Year</th>";
echo "<th>Color</th>";
echo "<th>Fuel Type</th>";
echo "<th>Additional Info</th>";
echo "</tr>";

$car->printVehicleInfo();
$motorcycle->printVehicleInfo();
$truck->printVehicleInfo();

echo "</table>";