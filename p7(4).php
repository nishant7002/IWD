<?php
// PHP does not support multiple inheritance directly, but we can achieve similar functionality using interfaces or traits.

interface Machine {
    public function start();
    public function stop();
}

interface Vehicle {
    public function accelerate();
    public function brake();
}

// Using a trait to simulate multiple inheritance
trait HybridOperations {
    public function chargeBattery() {
        echo "Charging the hybrid battery.<br>";
    }
}

class HybridCar implements Machine, Vehicle {
    use HybridOperations; // Using the trait

    public function start() {
        echo "Hybrid car starting.<br>";
    }

    public function stop() {
        echo "Hybrid car stopping.<br>";
    }

    public function accelerate() {
        echo "Hybrid car accelerating.<br>";
    }

    public function brake() {
        echo "Hybrid car braking.<br>";
    }
}

// Create an object of HybridCar
$myHybridCar = new HybridCar();

// Call methods
$myHybridCar->start();
$myHybridCar->accelerate();
$myHybridCar->chargeBattery();
$myHybridCar->brake();
$myHybridCar->stop();

?>
