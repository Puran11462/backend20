<?php
include 'config/constants.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $people = mysqli_real_escape_string($conn, $_POST['people']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);

    
    $sql = "INSERT INTO table_reservations (customer_name, email, phone, no_of_people, reservation_date, reservation_time) 
            VALUES ('$name', '$email', '$phone', '$people', '$date', '$time')";

    if (mysqli_query($conn, $sql)) {
    
        header("Location: /sagar/view_reservations.php");
        exit();
    } else {
        echo "<script>
                alert('Error: " . mysqli_error($conn) . "');
                window.location.href='reservation.php';
              </script>";
    }
}
?>
