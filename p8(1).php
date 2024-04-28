<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 40px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px #ccc;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 5px;
        }
        label {
            margin-top: 10px;
            display: block;
            font-weight: bold;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 4px;
            border: 1px solid #ddd;
            box-sizing: border-box; /* Include padding and border in input width */
        }
        input[type="submit"] {
            background-color: #5c67f2;
            color: white;
            border: none;
            padding: 10px 20px;
            text-transform: uppercase;
            margin-top: 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #4a54e1;
        }
    </style>
</head>
<body>
    <h1>Employee Information Form</h1>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="department">Department:</label>
        <input type="text" id="department" name="department" required><br><br>

        <label for="position">Position:</label>
        <input type="text" id="position" name="position" required><br><br>

        <input type="submit" value="Submit">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<h2>Your Information:</h2>";
            echo "Name: " . $_POST['name'] . "<br>";
            echo "Email: " . $_POST['email'] . "<br>";
            echo "Department: " . $_POST['department'] . "<br>";
            echo "Position: " . $_POST['position'] . "<br>";
        }
    ?>
</body>
</html>
