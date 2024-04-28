<?php
// Base class
class Animal {
    public function makeSound() {
        echo "Animal makes a generic sound.<br>";
    }
}

// Derived class
class Cat extends Animal {
    // Overriding the makeSound method
    public function makeSound() {
        echo "Cat says meow.<br>";
    }
}

// Create an object of Animal
$myAnimal = new Animal();
$myAnimal->makeSound();

// Create an object of Cat
$myCat = new Cat();
$myCat->makeSound();
?>
