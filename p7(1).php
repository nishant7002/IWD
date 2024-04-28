<?php
class SimpleClass {
    public $property = "I am a public property!";

    // Constructor
    public function __construct() {
        echo "Constructor: The class has been initialized.<br>";
    }

    // Destructor
    public function __destruct() {
        echo "Destructor: The class is being destroyed.<br>";
    }

    // Public method
    public function displayProperty() {
        echo $this->property . "<br>";
    }
}

// Create an object of SimpleClass
$myObject = new SimpleClass();

// Access public property
echo "Accessing Public Property: " . $myObject->property . "<br>";

// Call public method
$myObject->displayProperty();

?>
