
<!-- Receiver Page (receiver.php) -->
<!-- Save this in a separate file named receiver.php in the same directory -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Receiver Page</title>
</head>
<body>
    <h1>Receiver Page</h1>
    <p>Received Information: <?php echo htmlspecialchars($_GET['info'] ?? 'Nothing received'); ?></p>
</body>
</html>
