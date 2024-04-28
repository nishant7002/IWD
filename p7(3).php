<?php
// Base class
class Animal {
    public $name;
    public $sound;

    public function __construct($name, $sound) {
        $this->name = $name;
        $this->sound = $sound;
    }

    public function makeSound() {
        echo $this->name . " says " . $this->sound . "<br>";
    }
}

// Derived class
class Dog extends Animal {
    public $breed;

    public function __construct($name, $sound, $breed) {
        parent::__construct($name, $sound);
        $this->breed = $breed;
    }

    public function showBreed() {
        echo $this->name . " is a " . $this->breed . "<br>";
    }
}

// Create an object of Dog
$myDog = new Dog("Buddy", "Woof", "Golden Retriever");

// Use methods from both base and derived class
$myDog->makeSound();
$myDog->showBreed();
?>
