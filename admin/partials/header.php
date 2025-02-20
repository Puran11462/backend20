<?php
include '../config/constants.php'
?>'
<?php
include 'login-check.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps:wght@400;700&family=Poppins:ital,
    wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" 
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo SITEURL; ?>admin/admin.css">

    <title>Document</title>
    <style>
body {
    font-family: 'Poppins', sans-serif;
    background-color: #fff;
    color: #333;
    margin: 0;
    padding: 0;
}

html {
    scroll-behavior: smooth;
}
.clearfix::after {
   float:none;
   clear:both;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: static;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    padding: 10px 20px;
    height: auto; 
}

.navbar-nav {
    display: flex;
    justify-content: center;
    align-items: center;
}

.navbar-nav .nav-link {
    font-weight: 700;
    font-size: 16px;
    background: linear-gradient(90deg, white, cyan);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin: 5px 10px;
    transition: all 0.3s ease-in-out;
}

.navbar-nav .nav-link:hover {
    color: cyan !important;
    text-shadow: 0px 0px 10px rgba(255, 128, 0, 0.8);
    border-radius: 10px;
    border: 2px solid cyan;
    padding: 5px 10px;
}

.navbar-nav .nav-link.active {
    color: cyan;
}

.logo {
    max-width: 120px;
    height: auto;
}

/* Navbar icons */
.navbar .d-flex a {
    color: white;
    font-size: 20px;
    transition: all 0.3s ease-in-out;
}

.navbar .d-flex a:hover {
    color: cyan;
    transform: scale(1.1);
}

.navbar-toggler {
    border: none;
    background: none;
}

.navbar-toggler-icon {
    color: white;
}
.col-4{
    width:18%;
    background-color: #fff;
    margin:1%;
    padding:2%;
 float:left;
}

    </style>
    
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50" tabindex="0">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="position-absolute top-(-9) start-0">
          <a href="admin/index.php"><img src="../images/logo.jpg" alt="Logo" class="logo"></a>
        </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link gradient-text" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link gradient-text" href="manage_category.php">Category</a></li>
                    <li class="nav-item"><a class="nav-link gradient-text" href="manage_admin.php">Admin</a></li>
                    <li class="nav-item"><a class="nav-link gradient-text" href="manage_order.php">Order</a></li>
                    <li class="nav-item"><a class="nav-link gradient-text" href="logout.php">Logout</a></li>


                    
                </ul>
            </div>
    </nav>
