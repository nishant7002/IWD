<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        body {
            text-align: center;
        }
        table {
            margin: auto;
        }
    </style>
</head>
<body>
    
    <h1>Multiplication Table</h1>
    <form action="" method="post" style="display: inline-block; text-align: left;">
        <label for="number">Number:</label>
        <input type="number" id="number" name="number" min="1" required><br>
        <button type="submit" name="calculate">Calculate</button>
    </form>
    <?php
    if (isset($_POST['calculate'])) {
        $number = $_POST['number'];

        echo "<p>Multiplication table for {$number}:</p>";
        echo "<table border='1'>";
        echo "<tr><th>Operation</th><th>Result</th></tr>";

        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>{$number} x {$i} = </td><td>";
            echo $number * $i;
            echo "</td></tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>
