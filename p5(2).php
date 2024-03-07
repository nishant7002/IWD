<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort Array</title>
    <style>
        body {
            text-align: center; 
        }
        form {
            display: inline-block; 
        }
    </style>
</head>
<body>
    <h1>Sort Array</h1>
    <form action="" method="post">
        <label for="array">Array:</label>
        <input type="text" id="array" name="array" required><br>
        <button type="submit" name="calculate">Calculate</button>
    </form>
    <?php
    if (isset($_POST['calculate'])) {
        $array = $_POST['array'];
        $array = explode(',', $array);
        
        $n = count($array);
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($array[$j] > $array[$j + 1]) {
                    
                    $temp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temp;
                }
            }
        }
        echo "<p>Sorted array:</p>";
        echo "<ul style='list-style-type: none; padding: 0;'>";
        foreach ($array as $value) {
            echo "<li>{$value}</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
