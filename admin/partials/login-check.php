<?php
if(!isset($_SESSION["user"]))
{
    $_SESSION["no-login-message"]="<div class='error text-center'>You must log in first.</div>";
    header("location:".SITEURL."admin/login.php");
}
?>