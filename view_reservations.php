<?php
include 'config/constants.php'; 

$sql = "SELECT * FROM table_reservations ORDER BY reservation_date DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Reservations</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5"><h2 class="text-center text-decoration-underline about-title mb-4" style="font-weight: 900; color: red;">
            Your <span style="color: blue; font-weight: 900;">Reservations</span>
        </h2>
 
    <table class="table table-bordered table-striped mt-4">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>No of People</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['customer_name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['no_of_people']; ?></td>
                    <td><?php echo $row['reservation_date']; ?></td>
                    <td><?php echo $row['reservation_time']; ?></td>
                    <td><?php echo ucfirst($row['status']); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <div class="text-center mt-3">
        <a href="book.php" class="btn btn-primary">Make Another Reservation</a>
    </div>
</div>

</body>
</html>
