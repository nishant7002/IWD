<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Salary Calculator</title>
</head>
<body>
    <h1>Employee Salary Calculator</h1>
    <form action="" method="post">
        <label for="basic">Basic Salary:</label>
        <input type="number" id="basic" name="basic" step="0.01" min="0" required><br>
        <button type="submit" name="calculate">Calculate</button>
    </form>
    <?php
    if (isset($_POST['calculate'])) {
        $basic = $_POST['basic'];

        $da = $basic * 0.5;
        $hra = $basic * 0.1;
        $medical = $basic * 0.04;
        $gross_salary = $basic + $da + $hra + $medical;

        $insurance = $gross_salary * 0.07;
        $pf = $gross_salary * 0.05;
        $deduction = $insurance + $pf;

        $net_salary = $gross_salary - $deduction;

        echo "<p>Gross Salary: {$gross_salary}</p>";
        echo "<p>Deduction: {$deduction}</p>";
        echo "<p>DA (Dearness Allowance): {$da}</p>";
        echo "<p>HRA (House Rent Allowance): {$hra}</p>";
        echo "<p>Medical: {$medical}</p>";
        echo "<p>Insurance: {$insurance}</p>";
        echo "<p>PF (Provident Fund): {$pf}</p>";
        echo "<p>Net Salary: {$net_salary}</p>";
    }
    ?>
</body>
</html>