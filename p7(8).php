<?php
// Define an interface 'Greetable' with a method 'greet'
interface Greetable {
    public function greet();
}

// Implement the interface in a class 'FriendlyPerson'
class FriendlyPerson implements Greetable {
    private $name;

    // Constructor to set the name
    public function __construct($name) {
        $this->name = $name;
    }

    // Implement the greet method
    public function greet() {
        echo "Hello, my name is " . $this->name . ". Nice to meet you!<br>";
    }
}

// Create an instance of FriendlyPerson
$person = new FriendlyPerson("John");

// Call the greet method
$person->greet();
?>
