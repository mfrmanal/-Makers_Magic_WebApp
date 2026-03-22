<?php
session_start();

// Destroy the session (as per PDF requirement)
session_unset();
session_destroy();

header("Location: login.php");
exit();
?>