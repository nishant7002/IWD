<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Company Finder</title>
    <style>
        body {
            text-align: center;
        }
        form {
            display: inline-block;
            text-align: left;
        }
    </style>
</head>
<body>
    <div style="text-align: center;">
        <h1>Car Company Finder</h1>
        <form action="" method="post">
            <label for="car">Car:</label>
            <input type="text" id="car" name="car" required><br>
            <button type="submit" name="find">Find</button>
        </form>
        <?php
        if (isset($_POST['find'])) {
            $car = strtolower($_POST['car']);

            $car_companies = [
                'safari' => 'Tata',
                'nexon' => 'Tata',
                'tigor' => 'Tata',
                'tiago' => 'Tata',
                'xuv700' => 'Mahindra',
                'xuv300' => 'Mahindra',
                'bolero' => 'Mahindra',
                'i20' => 'Hyundai',
                'verna' => 'Hyundai',
                'venue' => 'Hyundai',
                'creta' => 'Hyundai',
                'swift' => 'Suzuki',
                'alto' => 'Suzuki',
                'baleno' => 'Suzuki',
                'brezza' => 'Suzuki'
            ];

            if (array_key_exists($car, $car_companies)) {
                $company = $car_companies[$car];
                echo "<p>The car {$car} belongs to the company {$company}.</p>";
            } else {
                echo "<p>The car {$car} was not found in the list.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
