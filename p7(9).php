<?php
// Define an abstract class 'Vehicle'
abstract class Vehicle {
    // Abstract method with no body
    public abstract function startEngine();

    // Non-abstract method
    public function stopEngine() {
        echo "Engine stopped.<br>";
    }
}

// Concrete class 'Car' that extends abstract class 'Vehicle'
class Car extends Vehicle {
    // Implementation of the abstract method
    public function startEngine() {
        echo "Car engine started.<br>";
    }
}

// Create an instance of Car
$myCar = new Car();
$myCar->startEngine();
$myCar->stopEngine();
?>
