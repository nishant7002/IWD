<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sender Page</title>
</head>
<body>
    <h1>Sender Page</h1>
    <form action="receiver.p8(4).php" method="post">
        <label for="info">Enter Information:</label>
        <input type="text" id="info" name="info">
        <input type="hidden" name="hiddenInfo" value="This is hidden">
        <button type="submit">Send to Receiver</button>
    </form>
</body>
</html>
