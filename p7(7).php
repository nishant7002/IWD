<?php
class Calculator {
    // Method to demonstrate overloading based on the number of arguments
    public function add() {
        $args = func_get_args(); // Get all arguments passed to the function
        $numArgs = func_num_args(); // Count the number of arguments
        $sum = 0;

        switch ($numArgs) {
            case 0:
                echo "No numbers provided.<br>";
                break;
            case 1:
                echo "Only one number provided: {$args[0]}<br>";
                break;
            default:
                foreach ($args as $arg) {
                    $sum += $arg;
                }
                echo "Sum of provided numbers (" . implode(", ", $args) . ") is: $sum<br>";
                break;
        }
    }
}

// Create an object of Calculator
$myCalculator = new Calculator();

// Call the add method with different number of arguments
$myCalculator->add(); // No argument
$myCalculator->add(5); // One argument
$myCalculator->add(5, 10); // Two arguments
$myCalculator->add(5, 10, 15); // Three arguments
?>
