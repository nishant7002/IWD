<?php
session_start(); // Start the session

// Check if session variable is set, if not set it
if (!isset($_SESSION['page_count'])) {
    $_SESSION['page_count'] = 1;
} else {
    $_SESSION['page_count'] += 1;
}

echo "<h1>Welcome to the Session Demo Page</h1>";
echo "<p>You have visited this page " . $_SESSION['page_count'] . " times.</p>";

// Provide a link to reset the session count
echo '<p><a href="?reset=true">Reset Page Count</a></p>';

// Check if reset has been requested
if (isset($_GET['reset']) && $_GET['reset'] == 'true') {
    unset($_SESSION['page_count']); // Reset the session variable
    header("Location: p9(1).php"); // Redirect to the same page to see the reset effect
    exit;
}
?>