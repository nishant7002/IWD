<?php
class MyClass {
    private $privateAttribute = "I am a private attribute!";

    // Method to set the private attribute
    public function setPrivateAttribute($value) {
        $this->privateAttribute = $value;
    }

    // Method to get the private attribute
    public function getPrivateAttribute() {
        return $this->privateAttribute;
    }
}

// Create an object of MyClass
$myObject = new MyClass();

// Set private attribute
$myObject->setPrivateAttribute("New private value");

// Get and display private attribute
echo "Private Attribute: " . $myObject->getPrivateAttribute() . "<br>";

?>
