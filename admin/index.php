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
            
    </div>
    <div class="clearfix"></div>


<?php include 'partials/footer.php'?>






