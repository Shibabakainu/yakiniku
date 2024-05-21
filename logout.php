<?php
session_start();
session_destroy();
header("Location: profile/login.php"); // Redirect to login page
exit;
?>
