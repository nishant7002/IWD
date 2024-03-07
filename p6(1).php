<!DOCTYPE html>
<html lang="en">
<head>
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Calculator</title>
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
        <h2>Calculate Currency Notes</h2>
        <input type="number" id="amount" placeholder="Enter amount in Rs.">
        <button onclick="calculateNotes()">Calculate</button>
        <div class="result" id="result"></div>
    </div>

    <script>
        function calculateNotes() {
            let amount = document.getElementById('amount').value;
            let denominations = [100, 50, 20, 10, 5, 2, 1];
            let result = "";

            let i = 0;
            while (i < denominations.length) {
                if (amount >= denominations[i]) {
                    let notes = Math.floor(amount / denominations[i]);
                    amount = amount % denominations[i];
                    result += `${notes} note(s) of Rs. ${denominations[i]}<br>`;
                }
                i++;
            }

            if (result === "") {
                result = "No notes needed.";
            }

            document.getElementById('result').innerHTML = result;
        }
    </script>
</body>
</html>
