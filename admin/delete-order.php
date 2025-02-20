<?php
include("../config/constants.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the order from database
    $sql = "DELETE FROM tbl_order WHERE id=$id";
    $res = mysqli_query($conn, $sql);

    if ($res == true) {
        $_SESSION["delete"] = "<div class='success'>Order Deleted Successfully.</div>";
        header("location:".SITEURL."admin/manage_order.php");
        exit();
    } else {
        $_SESSION["delete"] = "<div class='error'>Failed to Delete Order.</div>";
        header("location:".SITEURL."admin/manage_order.php");
        exit();
    }
} else {
    // No ID provided, redirect
    header("location:".SITEURL."admin/manage_order.php");
    exit();
}
