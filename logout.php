<?php
session_start();  // Start the session

// Destroy the session and remove all session variables
session_unset();
session_destroy();

// Optionally, delete the session cookie if it exists
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"], $params["secure"], $params["httponly"]
    );
}

// Redirect to the login page
header("Location: login.php");
exit();
