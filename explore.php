<?php
include("config/constants.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    
    <link rel="stylesheet" href="style.css">

    <title>All Menu</title>
    <style>
        
        .con {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            background-color: blue;
            padding: 20px 0;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            height: 80px;

        }

        .search-bar {
            width: 100%;
            max-width: 400px;
            display: flex;
            align-items: center;
            background: #fff;
            padding: 5px 10px;
            border-radius: 25px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .search-bar input {
            width: 100%;
            border: none;
            padding: 10px;
            outline: none;
            border-radius: 25px;
        }

        .search-bar button {
            background: #ff4500;
            border: none;
            padding: 10px 15px;
            border-radius: 25px;
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }

        .search-bar button:hover {
            background: #e63900;
        }

        body {
            padding-top: 80px;
        }

       
        .card {
            background: #f8f8f8;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
        }

       
        .card-img-top {
            width: 100%;
            height: 180px; 
            object-fit: cover;
            border-radius: 10px;
        }

        .card-body h5 {
            font-weight: bold;
            font-size: 1.2rem;
            color: #333;
        }

        .card-body p {
            font-size: 1rem;
            color: #666;
        }

        /* Button Styling */
        .btn-danger {
            font-size: 14px;
            padding: 8px 20px;
            border-radius: 30px;
            transition: 0.3s ease-in-out;
        }

        .btn-danger:hover {
            background-color: #b52b27;
        }
    </style>
</head>
<body>

<section class="categories">
    <div class="con">
        <form class="search-bar">
            <input type="text" id="searchInput" placeholder="Search food...">
            <button type="button"><i class="bi bi-search"></i></button>
        </form>
    </div>

    <div class="container">
        <h2 class="text-center text-decoration-underline about-title mb-4" style="font-weight: 900; color: red;">
            Explore <span style="color: blue; font-weight: 900;">Foods</span>
        </h2>

        <div class="row g-4"> 
            <?php
            $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' LIMIT 9";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);

            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $image_name = $row['image_name'];
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12"> 
                        <div class="card">
                            <?php
                            if ($image_name == "") {
                                echo "<div class='error'>Image not available.</div>";
                            } else {
                                ?>
                                <img src="<?php echo SITEURL; ?>images/category<?php echo $image_name; ?>" 
                                    alt="Category Image" class="card-img-top">
                                <?php
                            }
                            ?>
                            <div class="card-body">
                            <h4><strong>Thakali Khana Set</strong> <span>€15</span></h4>
                                <h5 class="card-title"><?php echo $title; ?></h5>
                                <p class="card-text">Authentic and delicious food.</p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<div class='error'>Category not added.</div>";
            }
            ?>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center" style="min-height: 10vh;">
    <a href="index.php">
        <button class="btn btn-primary">Back to Home</button>
    </a>
</div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
