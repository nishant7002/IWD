<!DOCTYPE html>
<html>
<head>
    <title>Morse Code Encoder</title>
    <style>
        input[type=text] {
            width: 200px;
            height: 30px;
            padding: 5px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="userInput">Enter some text:</label><br>
        <input type="text" id="userInput" name="userInput"><br>
        <input type="submit" value="Encode">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $message = $_POST['userInput'];
        $morse_code = [
            'A' => '.-', 'B' => '-...', 'C' => '-.-.', 'D' => '-..', 'E' => '.', 'F' => '..-.',
            'G' => '--.', 'H' => '....', 'I' => '..', 'J' => '.---', 'K' => '-.-', 'L' => '.-..',
            'M' => '--', 'N' => '-.', 'O' => '---', 'P' => '.--.', 'Q' => '--.-', 'R' => '.-.',
            'S' => '...', 'T' => '-', 'U' => '..-', 'V' => '...-', 'W' => '.--', 'X' => '-..-',
            'Y' => '-.--', 'Z' => '--..', '1' => '.----', '2' => '..---', '3' => '...--',
            '4' => '....-', '5' => '.....', '6' => '-....', '7' => '--...', '8' => '---..',
            '9' => '----.', '0' => '-----', ' ' => '/'
        ];

        $encoded_message = '';

        for ($i = 0; $i < strlen($message); $i++) {
            $char = $message[$i];
            if (isset($morse_code[$char])) {
                $encoded_message .= $morse_code[$char] . ' ';
            } elseif ($char == ' ') {
                $encoded_message .= '/ ';
            }
        }

        echo "<p>Encoded message:</p>";
        echo "<pre>" . $encoded_message . "</pre>";
    }
    ?>
</body>
</html>