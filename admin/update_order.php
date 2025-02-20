<?php
include("partials/header.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the specific order
    $sql = "SELECT * FROM tbl_order WHERE id=$id";
    $res = mysqli_query($conn, $sql);

    if ($res == true) {
        $count = mysqli_num_rows($res);

        if ($count == 1) {
            $row = mysqli_fetch_assoc($res);
            $food             = $row['food'];
            $price            = $row['price'];
            $qty              = $row['qty'];
            $total            = $row['total'];
            $order_date       = $row['order_date'];
            $status           = $row['status'];
            $customer_name    = $row['customer_name'];
            $customer_contact = $row['customer_contact'];
            $customer_email   = $row['customer_email'];
            $customer_address = $row['customer_address'];
        } else {
            $_SESSION['no-order-found'] = "<div class='error'>Order Not Found.</div>";
            header("location:".SITEURL."admin/manage_order.php");
            exit();
        }
    }
} else {
    header("location:".SITEURL."admin/manage_order.php");
    exit();
}

// Handle the update form submission
if (isset($_POST['submit'])) {
    $id               = $_POST['id'];
    $food             = mysqli_real_escape_string($conn, $_POST['food']);
    $price            = floatval($_POST['price']);
    $qty              = intval($_POST['qty']);
    $total            = $price * $qty;
    $status           = mysqli_real_escape_string($conn, $_POST['status']);
    $customer_name    = mysqli_real_escape_string($conn, $_POST['customer_name']);
    $customer_contact = mysqli_real_escape_string($conn, $_POST['customer_contact']);
    $customer_email   = mysqli_real_escape_string($conn, $_POST['customer_email']);
    $customer_address = mysqli_real_escape_string($conn, $_POST['customer_address']);

    $sql2 = "UPDATE tbl_order SET
        food='$food',
        price='$price',
        qty='$qty',
        total='$total',
        status='$status',
        customer_name='$customer_name',
        customer_contact='$customer_contact',
        customer_email='$customer_email',
        customer_address='$customer_address'
        WHERE id=$id";

    $res2 = mysqli_query($conn, $sql2);

    if ($res2 == true) {
        $_SESSION["update"] = "<div class='success'>Order Updated Successfully.</div>";
        header("location:".SITEURL."admin/manage_order.php");
        exit();
    } else {
        $_SESSION["update"] = "<div class='error'>Failed to Update Order.</div>";
        header("location:".SITEURL."admin/manage_order.php");
        exit();
    }
}
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Order</h1>
        <br><br>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Food:</td>
                    <td><input type="text" name="food" value="<?php echo $food; ?>"></td>
                </tr>
                <tr>
                    <td>Price:</td>
                    <td><input type="number" step="0.01" name="price" value="<?php echo $price; ?>"></td>
                </tr>
                <tr>
                    <td>Quantity:</td>
                    <td><input type="number" name="qty" value="<?php echo $qty; ?>"></td>
                </tr>
                <tr>
                    <td>Status:</td>
                    <td>
                        <select name="status">
                            <option <?php if($status=="pending") {echo "selected";} ?> value="pending">Pending</option>
                            <option <?php if($status=="processing") {echo "selected";} ?> value="processing">Processing</option>
                            <option <?php if($status=="delivered") {echo "selected";} ?> value="delivered">Delivered</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Customer Name:</td>
                    <td><input type="text" name="customer_name" value="<?php echo $customer_name; ?>"></td>
                </tr>
                <tr>
                    <td>Contact:</td>
                    <td><input type="text" name="customer_contact" value="<?php echo $customer_contact; ?>"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="customer_email" value="<?php echo $customer_email; ?>"></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><textarea name="customer_address" cols="30" rows="5"><?php echo $customer_address; ?></textarea></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Order" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include("partials/footer.php"); ?>
