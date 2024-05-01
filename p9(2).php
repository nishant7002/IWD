<?php
// Set a cookie for demonstration
$cookie_name = "user_visit";
$cookie_value = "You have visited this page ";
if(!isset($_COOKIE[$cookie_name])) {
    $visit_count = 1;
} else {
    $visit_count = (int)$_COOKIE[$cookie_name] + 1;
}
setcookie($cookie_name, $visit_count, time() + (86400 * 30), "/"); // 86400 = 1 day

echo "<h1>Welcome to the Cookie Demo Page</h1>";
if(!isset($_COOKIE[$cookie_name])) {
    echo "<p>This is your first visit to this page.</p>";
} else {
    echo "<p>" . $cookie_value . $_COOKIE[$cookie_name] . " times.</p>";
}

// Provide a link to reset the cookie
echo '<p><a href="?reset=true">Reset Visit Count</a></p>';

// Check if reset has been requested
if (isset($_GET['reset']) && $_GET['reset'] == 'true') {
    setcookie($cookie_name, "", time() - 3600, "/"); // Delete the cookie by setting its expiration in the past
    header("Location: p9(2).php"); // Redirect to the same page to see the reset effect
    exit;
}
?>
