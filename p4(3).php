<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Numbers</title>
    <style>
        body {
            display: flex;
            
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }
        form, p, ul {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Fibonacci Numbers</h1>
    <form action="" method="post">
        <label for="term">Term:</label>
        <input type="number" id="term" name="term" min="1" required><br>
        <button type="submit" name="calculate">Calculate</button>
    </form>
    <?php
    if (isset($_POST['calculate'])) {
        $term = $_POST['term'];

        $a = 0;
        $b = 1;

        echo "<p>Fibonacci numbers up to term {$term}:</p>";
        echo "<ul>";
        while ($a <= $term) {
            echo "<li>{$a}</li>";
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
