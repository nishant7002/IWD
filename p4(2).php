<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GTU Grade Calculator</title>
</head>
<body>
    <h1>GTU Grade Calculator</h1>
    <form action="" method="post">
        <label for="sub1">Subject 1:</label>
        <input type="number" id="sub1" name="sub1" min="0" max="100" required><br>
        <label for="sub2">Subject 2:</label>
        <input type="number" id="sub2" name="sub2" min="0" max="100" required><br>
        <label for="sub3">Subject 3:</label>
        <input type="number" id="sub3" name="sub3" min="0" max="100" required><br>
        <label for="sub4">Subject 4:</label>
        <input type="number" id="sub4" name="sub4" min="0" max="100" required><br>
        <button type="submit" name="calculate">Calculate</button>
    </form>
    <?php
    if (isset($_POST['calculate'])) {
        $sub1 = $_POST['sub1'];
        $sub2 = $_POST['sub2'];
        $sub3 = $_POST['sub3'];
        $sub4 = $_POST['sub4'];

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
            'sub1' => 'FAIL',
            'sub2' => 'FAIL',
            'sub3' => 'FAIL',
            'sub4' => 'FAIL'
        ];

        foreach ($grades as $grade => $range) {
            if ($sub1 >= $range[0] && $sub1 <= $range[1]) {
                $results['sub1'] = $grade;
            }
            if ($sub2 >= $range[0] && $sub2 <= $range[1]) {
                $results['sub2'] = $grade;
            }
            if ($sub3 >= $range[0] && $sub3 <= $range[1]) {
                $results['sub3'] = $grade;
            }
            if ($sub4 >= $range[0] && $sub4 <= $range[1]) {
                $results['sub4'] = $grade;
            }
        }

        echo "<table border='1'>";
        echo "<tr><th>Subject</th><th>Grade</th></tr>";
        foreach ($results as $subject => $grade) {
            echo "<tr><td>{$subject}</td><td>{$grade}</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>