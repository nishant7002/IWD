<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GTU Grade Calculator</title>
    <style>
        body {
            text-align: center;
        }
        form {
            display: inline-block;
            text-align: left;
        }
        table {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <h1>GTU Grade Calculator</h1>
    <form action="" method="post">
        <label for="Subject1">Subject 1:</label>
        <input type="number" id="Subject1" name="Subject1" min="0" max="100" required><br>
        <label for="Subject2">Subject 2:</label>
        <input type="number" id="Subject2" name="Subject2" min="0" max="100" required><br>
        <label for="Subject3">Subject 3:</label>
        <input type="number" id="Subject3" name="Subject3" min="0" max="100" required><br>
        <label for="Subject4">Subject 4:</label>
        <input type="number" id="Subject4" name="Subject4" min="0" max="100" required><br>
        <button type="submit" name="calculate">Calculate</button>
    </form>
    <?php
    if (isset($_POST['calculate'])) {
        $Subject1 = $_POST['Subject1'];
        $Subject2 = $_POST['Subject2'];
        $Subject3 = $_POST['Subject3'];
        $Subject4 = $_POST['Subject4'];

        $grades = [
            'AA' => [85, 100],
            'AB' => [75, 84],
            'BB' => [65, 74],
            'BC' => [55, 64],
            'CC' => [45, 54],
            'CD' => [40, 44],
            'DD' => [35, 39],
            'FF' => [0, 34]
        ];

        $results = [
            'Subject1' => 'FAIL',
            'Subject2' => 'FAIL',
            'Subject3' => 'FAIL',
            'Subject4' => 'FAIL'
        ];

        $totalScore = 0;
        $subjectsCount = 4;

        foreach ($grades as $grade => $range) {
            if ($Subject1 >= $range[0] && $Subject1 <= $range[1]) {
                $results['Subject1'] = $grade;
                $totalScore += $Subject1;
            }
            if ($Subject2 >= $range[0] && $Subject2 <= $range[1]) {
                $results['Subject2'] = $grade;
                $totalScore += $Subject2;
            }
            if ($Subject3 >= $range[0] && $Subject3 <= $range[1]) {
                $results['Subject3'] = $grade;
                $totalScore += $Subject3;
            }
            if ($Subject4 >= $range[0] && $Subject4 <= $range[1]) {
                $results['Subject4'] = $grade;
                $totalScore += $Subject4;
            }
        }

        $averageScore = $totalScore / $subjectsCount;
        $overallGrade = 'FAIL';
        foreach ($grades as $grade => $range) {
            if ($averageScore >= $range[0] && $averageScore <= $range[1]) {
                $overallGrade = $grade;
                break;
            }
        }

        echo "<table border='1'>";
        echo "<tr><th>Subject</th><th>Grade</th></tr>";
        foreach ($results as $subject => $grade) {
            echo "<tr><td>{$subject}</td><td>{$grade}</td></tr>";
        }
        echo "<tr><td>Overall</td><td>{$overallGrade}</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>
