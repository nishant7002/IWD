<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Length and Word Count</title>
</head>
<body>
    <h1>String Length and Word Count</h1>
    <form action="" method="post">
        <label for="string">String:</label>
        <input type="text" id="string" name="string" required><br>
        <button type="submit" name="calculate">Calculate</button>
    </form>
    <?php
    if (isset($_POST['calculate'])) {
        $string = $_POST['string'];

        $length = 0;
        $word_count = 0;
        $in_word = false;

        for ($i = 0; $i < strlen($string); $i++) {
            if ($string[$i] != ' ') {
                $length++;
                $in_word = true;
            } else if ($in_word) {
                $word_count++;
                $in_word = false;
            }
        }

        if (!$in_word) {
            $word_count++;
        }

        echo "<p>Length: {$length}</p>";
        echo "<p>Word count: {$word_count}</p>";
    }
    ?>
</body>
</html>