<?php
// Define a basic class 'Car'
class Car {
    public $brand;
    public $color;

    // Constructor
    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
        echo "A new $this->color $this->brand car created.<br>";
    }

    // Method to display car information
    public function displayInfo() {
        echo "This is a $this->color $this->brand.<br>";
    }

    // Destructor
    public function __destruct() {
        echo "The $this->color $this->brand car is being destroyed.<br>";
    }
}

// Inheriting class 'Car' into 'SportsCar'
class SportsCar extends Car {
    public $speed;

    // Constructor Overloading within inherited class
    public function __construct($brand, $color, $speed) {
        parent::__construct($brand, $color);
        $this->speed = $speed;
    }

    // Method Overriding
    public function displayInfo() {
        echo "This is a $this->color $this->brand and can speed up to $this->speed mph.<br>";
    }
}

// Get user input for car1
$brand1 = readline("Enter the brand for the first car: ");
$color1 = readline("Enter the color for the first car: ");

// Creating objects from the classes with user input
$car1 = new Car($brand1, $color1);
$car1->displayInfo();

// Get user input for sportsCar1
$brand2 = readline("Enter the brand for the sports car: ");
$color2 = readline("Enter the color for the sports car: ");
$speed2 = readline("Enter the speed for the sports car (in mph): ");

// Creating objects from the classes with user input
$sportsCar1 = new SportsCar($brand2, $color2, $speed2);
$sportsCar1->displayInfo();
?>