<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
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
        <h2>String Functions</h2>
        <form method="post">
            <input type="text" name="inputString" placeholder="Enter a string">
            <input type="text" name="wordToReplace" placeholder="Word to replace">
            <input type="text" name="replacementWord" placeholder="Replacement word">
            <button type="submit" name="performOperations">Perform Operations</button>
        </form>
        <div class="result">
            <?php
                if(isset($_POST['performOperations'])) {
                    $inputString = $_POST['inputString'];
                    $wordToReplace = $_POST['wordToReplace'];
                    $replacementWord = $_POST['replacementWord'];

                    function isLowerCase($str) {
                        return $str === strtolower($str);
                    }

                    function reverseString($str) {
                        return strrev($str);
                    }

                    function removeWhiteSpaces($str) {
                        return preg_replace('/\s+/', '', $str);
                    }

                    function replaceWord($str, $wordToReplace, $replacementWord) {
                        return str_replace($wordToReplace, $replacementWord, $str);
                    }

                    echo "Is Lowercase: " . (isLowerCase($inputString) ? 'true' : 'false') . "<br>";
                    echo "Reversed: " . reverseString($inputString) . "<br>";
                    echo "No Whitespaces: " . removeWhiteSpaces($inputString) . "<br>";
                    echo "Replaced Word: " . replaceWord($inputString, $wordToReplace, $replacementWord);
                }
            ?>
        </div>
    </div>
</body>
</html>
