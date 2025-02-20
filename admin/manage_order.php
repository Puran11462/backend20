<?php include 'partials/header.php'?>
<style>
    .tbl-full {
    width: 100%;
    border-collapse: collapse;
}

.tbl-full tr th,
.tbl-full tr td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

.btn-secondary {
    background-color: green;
    color: white;
    padding: 5px 10px;
    text-decoration: none;
    border-radius: 5px;
}

.btn-secondary:hover {
    background-color: darkgreen;
}

.btn-danger {
    background-color: red;
    color: white;
    padding: 5px 10px;
    text-decoration: none;
    border-radius: 5px;
}

.btn-danger:hover {
    background-color: darkred;
}
</style>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Orders</h1>
        <br><br>

        <?php
        // Display session messages 
        if (isset($_SESSION["update"])) {
            echo $_SESSION["update"];
            unset($_SESSION["update"]);
        }
        if (isset($_SESSION["delete"])) {
            echo $_SESSION["delete"];
            unset($_SESSION["delete"]);
        }
        ?>

        <table class="tbl-full">
            <tr>
                <th>ID</th>
                <th>Food</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Total</th>
                <th>Order Date</th>
                <th>Status</th>
                <th>Customer Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>

            <?php
            // Fetch orders
            $sql = "SELECT * FROM tbl_order ORDER BY id DESC";
            $res = mysqli_query($conn, $sql);

            if ($res == true) {
                $count = mysqli_num_rows($res);

                if ($count > 0) {
                    $sn = 1;
                    while ($row = mysqli_fetch_assoc($res)) {
                        $id               = $row['id'];
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
                        ?>
                        <tr>
                            <td><?php echo $sn++; ?></td>
                            <td><?php echo $food; ?></td>
                            <td><?php echo $price; ?></td>
                            <td><?php echo $qty; ?></td>
                            <td><?php echo $total; ?></td>
                            <td><?php echo $order_date; ?></td>
                            <td><?php echo $status; ?></td>
                            <td><?php echo $customer_name; ?></td>
                            <td><?php echo $customer_contact; ?></td>
                            <td><?php echo $customer_email; ?></td>
                            <td><?php echo $customer_address; ?></td>
                            <td>
                                <a href="<?php echo SITEURL; ?>admin/update-order.php?id=<?php echo $id; ?>" class="btn-secondary">Update</a>
                                <a href="<?php echo SITEURL; ?>admin/delete-order.php?id=<?php echo $id; ?>" class="btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='12'><div class='error'>No Orders Found.</div></td></tr>";
                }
            }
            ?>
        </table>
    </div>
</div>

<?php
include("partials/footer.php"); 
?>

<?php include 'partials/footer.php'?>