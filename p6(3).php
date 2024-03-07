<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Functions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="number"], button {
            padding: 10px;
            margin: 10px 0;
            display: block;
            width: 100%;
        }
        .result {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Math Functions</h2>
        <form method="post">
            <input type="number" name="minRange" placeholder="Minimum Range">
            <input type="number" name="maxRange" placeholder="Maximum Range">
            <input type="number" name="decimalNumber" placeholder="Decimal Number">
            <input type="number" name="angle" placeholder="Angle in Degrees">
            <button type="submit" name="generate">Generate</button>
        </form>
        <div class="result">
            <?php
                if(isset($_POST['generate'])) {
                    $minRange = $_POST['minRange'];
                    $maxRange = $_POST['maxRange'];
                    $decimalNumber = $_POST['decimalNumber'];
                    $angle = $_POST['angle'];

                    // Generate a random number
                    $randomNumber = rand($minRange, $maxRange);
                    echo "Random Number: $randomNumber<br>";

                    // Display binary, octal, and hexadecimal
                    echo "Binary: " . decbin($decimalNumber) . "<br>";
                    echo "Octal: " . decoct($decimalNumber) . "<br>";
                    echo "Hexadecimal: " . dechex($decimalNumber) . "<br>";

                    // Display sin, cos, and tan
                    $angleInRadians = deg2rad($angle);
                    echo "Sin: " . sin($angleInRadians) . "<br>";
                    echo "Cos: " . cos($angleInRadians) . "<br>";
                    echo "Tan: " . tan($angleInRadians) . "<br>";
                }
            ?>
        </div>
    </div>
</body>
</html>

