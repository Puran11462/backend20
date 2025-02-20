<?php
include 'config/constants.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['food'])) {
    // Get user input
    $food = mysqli_real_escape_string($conn, $_POST['food']);
    $price = floatval($_POST['price']);
    $qty = intval($_POST['qty']);
    $total = $price * $qty;
    $order_date = date("Y-m-d H:i:s");
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $customer_name = mysqli_real_escape_string($conn, $_POST['customer_name']);
    $customer_contact = mysqli_real_escape_string($conn, $_POST['customer_contact']);
    $customer_email = mysqli_real_escape_string($conn, $_POST['customer_email']);
    $customer_address = mysqli_real_escape_string($conn, $_POST['customer_address']);

    // Insert Order into Database
    $sql = "INSERT INTO tbl_order (food, price, qty, total, order_date, status, customer_name, customer_contact, customer_email, customer_address) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sdidssssss", $food, $price, $qty, $total, $order_date, $status, $customer_name, $customer_contact, $customer_email, $customer_address);
    $res = mysqli_stmt_execute($stmt);

    if ($res) {
        $order_message = "
            <div class='order-success'>
                ✅ <strong>Order Placed Successfully!</strong><br>
                <small><strong>Food:</strong> $food</small><br>
                <small><strong>Price:</strong> $$price</small><br>
                <small><strong>Quantity:</strong> $qty</small><br>
                <small><strong>Total:</strong> $$total</small><br>
            </div>";
    } else {
        $order_message = "<div class='error'>❌ Failed to place order.</div>";
    }

    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Order Form</title>
    <style>
        body {
            background-color: #25aae1;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
            position: relative;
        }

        /* 🔹 Success Message (Responsive) */
        .order-success {
            position: absolute;
            top: 20px;
            right: 20px;
            background: white;
            color: black;
            padding: 12px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            font-size: 14px;
            text-align: left;
        }

        .order-form {
            background-color: rgba(255, 255, 255, 0.2);
            width: 90%;
            max-width: 400px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .inputBox {
            width: 100%;
            margin-bottom: 15px;
            text-align: left;
        }

        .inputBox span {
            font-size: 14px;
            font-weight: bold;
            color: white;
            display: block;
            margin-bottom: 5px;
        }

        .inputBox input, .inputBox select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background: white;
        }

        .btn {
            background-color: #ff6b6b;
            color: white;
            border: none;
            padding: 12px 15px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s ease;
            width: 100%;
        }

        .btn:hover {
            background-color: #ff4f4f;
        }

        /* 🔹 Responsive Design */
        @media (max-width: 768px) {
            .order-success {
                position: relative;
                top: 0;
                right: 0;
                width: 90%;
                margin: 10px auto;
                text-align: center;
                font-size: 12px;
            }

            .order-form {
                width: 95%;
                max-width: 360px;
            }

            .btn {
                font-size: 16px;
                padding: 10px;
            }
        }

        @media (max-width: 480px) {
            .order-success {
                font-size: 12px;
                padding: 10px;
            }

            .inputBox span {
                font-size: 12px;
            }

            .btn {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>

    <!-- 🔹 Order Success Message (Responsive) -->
    <?php if (isset($order_message)) echo $order_message; ?>

    <section class="order">
        <h2 style="color: white;">Order Now</h2>
        <h1 style="color: white;">Free and Fast Delivery</h1>

        <form action="" method="POST" class="order-form">
            <div class="inputBox">
                <span>Food Item</span>
                <input type="text" name="food" required>
            </div>

            <div class="inputBox">
                <span>Price</span>
                <input type="number" step="0.01" name="price" required>
            </div>

            <div class="inputBox">
                <span>Quantity</span>
                <input type="number" name="qty" required>
            </div>

            <div class="inputBox">
                <span>Status</span>
                <select name="status">
                    <option value="pending">Pending</option>
                    <option value="processing">Processing</option>
                    <option value="delivered">Delivered</option>
                </select>
            </div>

            <div class="inputBox">
                <span>Customer Name</span>
                <input type="text" name="customer_name" required>
            </div>

            <div class="inputBox">
                <span>Contact</span>
                <input type="text" name="customer_contact" required>
            </div>

            <div class="inputBox">
                <span>Email</span>
                <input type="email" name="customer_email" required>
            </div>

            <div class="inputBox">
                <span>Address</span>
                <input type="text" name="customer_address" required>
            </div>

            <input type="submit" value="Order Now" class="btn">
        </form>
    </section>
</body>
</html>
