<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Define regular expressions for validation
        $namePattern = "/^[a-zA-Z ]+$/";
        $emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
        $departmentPattern = "/^[a-zA-Z0-9 ]+$/";
        $positionPattern = "/^[a-zA-Z0-9 ]+$/";

        // Retrieve POST data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $department = $_POST['department'];
        $position = $_POST['position'];

        // Validate data
        $nameValid = preg_match($namePattern, $name);
        $emailValid = preg_match($emailPattern, $email);
        $departmentValid = preg_match($departmentPattern, $department);
        $positionValid = preg_match($positionPattern, $position);

        if ($nameValid && $emailValid && $departmentValid && $positionValid) {
            echo "<h2>Validated Information:</h2>";
            echo "Name: " . htmlspecialchars($name) . "<br>";
            echo "Email: " . htmlspecialchars($email) . "<br>";
            echo "Department: " . htmlspecialchars($department) . "<br>";
            echo "Position: " . htmlspecialchars($position) . "<br>";
        } else {
            echo "<h2>Error:</h2>";
            echo "Invalid input detected. Please ensure all fields contain appropriate characters.<br>";
        }
    }
?>
