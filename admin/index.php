<?php
include 'partials/header.php'?>
<style>
.clearfix::after {
   float:none;
   clear:both;
}

.col-4{
    width:18%;
    background-color: #fff;
    margin:1%;
    padding:2%;
 float:left;
 background-color:rgba(248, 250, 249, 0.62);
}

.main-content {
        padding: 3% 0px;
        background-color: #f8f9fa;
        color: #333;
        font-family: 'Poppins', sans-serif;
    } 
 
</style>
    <div class="main-content">
        <div class="wrapper">
            <h1>Dashboard</h1>
            <br><br>
            <?php
                if(isset($_SESSION["login"]))
                {
                // Your code here
                echo $_SESSION["login"];
                unset($_SESSION["login"]);
            }
            ?>
            <br><br>
            <div class="col-4 text-center">
                <?php
                 $sql="SELECT * FROM tbl_admin";

                 $res=mysqli_query($conn,$sql);
     
                 $count=mysqli_num_rows($res);
     

                ?>
                <h1><?php echo $count;?></h1>
                <br/>
                Admin
            </div>
            <div class="col-4 text-center">
            <?php
            $sql2 = "SELECT * FROM tbl_category";

           $res2 = mysqli_query($conn, $sql2); 

        $count2 = mysqli_num_rows($res2);
        ?>
        <h1><?php echo $count2; ?></h1>
       <br/>
        Categories
    </div>
    <div class="col-4 text-center">
                    <?php
                    $sql3 = "SELECT * FROM tbl_order"; 

                    $res3 = mysqli_query($conn, $sql3);
                    $count3 = mysqli_num_rows($res3); 

                    ?>
                    <h1><?php echo $count3; ?></h1> 
                       Total Orders
            </div> 
    </div>
    <div class="clearfix"></div>


<?php include 'partials/footer.php'?>






