
<!-- Save this in a separate file named receiver.p8(4).php in the same directory -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Receiver Page</title>
</head>
<body>
    <h1>Receiver Page</h1>
    <p>Received Information: <?php echo htmlspecialchars($_POST['info'] ?? 'Nothing received'); ?></p>
    <p>Hidden Information: <?php echo htmlspecialchars($_POST['hiddenInfo'] ?? 'No hidden info'); ?></p>
</body>
</html>
