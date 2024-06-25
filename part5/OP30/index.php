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

    abstract public function displayInfo();
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

    public function displayInfo() {
        echo "<tr>
                <td>Car</td>
                <td>{$this->brand}</td>
                <td>{$this->model}</td>
                <td>{$this->year}</td>
                <td>{$this->color}</td>
                <td>{$this->seatingCapacity}</td>
                <td>N/A</td>
                <td>N/A</td>
              </tr>";
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

    public function displayInfo() {
        $offRoadStatus = $this->isOffRoad ? 'Yes' : 'No';
        echo "<tr>
                <td>Motorcycle</td>
                <td>{$this->brand}</td>
                <td>{$this->model}</td>
                <td>{$this->year}</td>
                <td>{$this->color}</td>
                <td>N/A</td>
                <td>{$offRoadStatus}</td>
                <td>N/A</td>
              </tr>";
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

    public function displayInfo() {
        echo "<tr>
                <td>Truck</td>
                <td>{$this->brand}</td>
                <td>{$this->model}</td>
                <td>{$this->year}</td>
                <td>{$this->color}</td>
                <td>N/A</td>
                <td>N/A</td>
                <td>{$this->loadCapacity}kg</td>
              </tr>";
    }
}

$car = new Car("Toyota", "Corolla", 2020, "Red", 5);
$motorcycle = new Motorcycle("Yamaha", "MT-09", 2021, "Blue", true);
$truck = new Truck("Volvo", "FH16", 2019, "White", 20000);

echo "<table border='1'>
        <tr>
            <th>Type</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Year</th>
            <th>Color</th>
            <th>Seating Capacity</th>
            <th>Off-Road</th>
            <th>Load Capacity</th>
        </tr>";

$car->displayInfo();
$motorcycle->displayInfo();
$truck->displayInfo();

echo "</table>";
