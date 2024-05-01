<?php
// Connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emp_name = $_POST['emp_name'];
    $emp_position = $_POST['emp_position'];
    $emp_salary = $_POST['emp_salary'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO employees (name, position, salary) VALUES (?, ?, ?)");
    $stmt->bind_param("ssd", $emp_name, $emp_position, $emp_salary);

    // Execute the statement
    $stmt->execute();

    echo "New records created successfully";

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Form</title>
</head>
<body>
    <h1>Employee Information Form</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="emp_name">Name:</label><br>
        <input type="text" id="emp_name" name="emp_name" required><br>
        <label for="emp_position">Position:</label><br>
        <input type="text" id="emp_position" name="emp_position" required><br>
        <label for="emp_salary">Salary:</label><br>
        <input type="number" id="emp_salary" name="emp_salary" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
