<?php
session_start();
session_unset();  // Unset all session variables
session_destroy(); // Destroy the session
header("Location: /project"); // Redirect to home or login page
exit();
?>
