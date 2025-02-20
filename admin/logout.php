<?php
include("../config/constants.php");

// Destroy session
session_destroy();

// Redirect to main index.php
header("Location: " . SITEURL . "index.php");
exit();
?>
