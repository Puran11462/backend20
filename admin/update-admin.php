<?php
include ("partials/header.php");
?>

<style>
    .wrapper {
    display: flex;
    justify-content: center; /* Centers horizontally */
    align-items: center; /* Centers vertically */
    height: 40vh; /* Full height of viewport */
}
h1{
    text-align: left;}

</style>
<div class="main-content"></div>
<div class="wrapper">
    <h1>Update Admin</h1>


    
   <br><br>
   <?php
   $id = $_GET["id"];

    $sql = "SELECT * FROM tbl_admin WHERE id=$id";

    $res=mysqli_query($conn,$sql);

    //check whether the query is executed or not
    if($res==true)
    {

       $count=mysqli_num_rows($res);

       if($count==1){
      $row=mysqli_fetch_assoc($res);
      $full_name=$row["full_name"];
      $username=$row["username"];

      

       }else{
           header("location:".SITEURL.'admin/manage_admin.php');
       }
    }
   
   
   ?>
  
    <form action="" method="POST">
        <table class="tbl-30">
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="full_name" value="<?php echo $full_name;?>"></td>
            </tr>

            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" value="<?php echo $username;?>"></td>
            </tr>


                <br>
                <br>
                <td colspan="2">
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                    <br /><br />
                    <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
                </td>
            </tr>
        </table>
</div>
<?php

if (isset($_POST['submit'])) {
    
    if (isset($_POST["id"])) {
        $id = $_POST["id"];
        $full_name = $_POST["full_name"];
        $username = $_POST["username"];

        // Debugging output (optional)
        echo "ID: $id <br>";
        echo "Full Name: $full_name <br>";
        echo "Username: $username <br>";

        
    } else {
        
        echo "ID is not set in the POST data.
        
        ";
    }
   
    $sql = "UPDATE tbl_admin SET
    full_name='$full_name',
    username='$username'
    WHERE id=$id
    ";

    
   $res=mysqli_query($conn,$sql);

   
   if($res==true){
   
    $_SESSION["update"] = "<div class='success'>Admin Updated Successfully;.</div>";
    header("location:".SITEURL.'admin/manage_admin.php');
   }else{
    $_SESSION["update"] = "<div class='error'>Failed to delete ;.</div>";
    header("location:".SITEURL.'admin/manage_admin.php');
   }

}
?>
<?php
include ("partials/footer.php");?>