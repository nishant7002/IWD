<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time Formats</title>
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
        input[type="text"], button {
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
        <h2>Current Date and Time Formats</h2>
        <form method="post">
            
            <button type="submit" name="showDateTime">Show Date and Time</button>
        </form>
        <div class="result">
            <?php
                if(isset($_POST['showDateTime'])) {
                    
                    
                    date_default_timezone_set('UTC');
                    
                    echo "Current Date and Time: " . date("Y-m-d H:i:s") . "<br>";
                    echo "Date in d/m/Y format: " . date("d/m/Y") . "<br>";
                    echo "Time in 12-hour format with AM/PM: " . date("h:i:s A") . "<br>";
                    echo "Day of the week: " . date("l") . "<br>";
                    echo "Day of the year: " . date("z") . "<br>";
                    echo "Week of the year: " . date("W") . "<br>";
                }
            ?>
        </div>
    </div>
</body>
</html>
