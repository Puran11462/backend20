<?php 
include "../config/constants.php";
?>
<html>
    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" href="admin.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <style>
            * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body {
    background: linear-gradient(to right, #e2e2e2, rgba(0, 0, 255, 0.686));
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login {
    background: white;
    width: 400px;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 20px 35px rgba(0, 0, 1, 0.2);
    text-align: center;
}

h1 {
    font-size: 1.8rem;
    font-weight: bold;
    margin-bottom: 1.5rem;
}

input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: none;
    border-bottom: 2px solid #757575;
    background: transparent;
    font-size: 16px;
    transition: 0.3s ease-in-out;
}

input:focus {
    outline: none;
    border-bottom: 2px solid hsl(327, 90%, 28%);
}

.btn-primary {
    font-size: 1rem;
    padding: 10px;
    border-radius: 5px;
    border: none;
    width: 100%;
    background: rgb(125, 125, 235);
    color: white;
    cursor: pointer;
    transition: 0.3s;
    margin-top: 15px;
}

.btn-primary:hover {
    background: #07001f;
}

</style>
<body>
    <div class="login">
        <h1 class="text-center">Login</h1>
        <br><br>
      <?php
if(isset($_SESSION["no-login-message"])) {
    echo "<script>
        Swal.fire({
            icon: 'warning',
            title: 'Access Denied',
            text: '{$_SESSION["no-login-message"]}'
        });
    </script>";
    unset($_SESSION["no-login-message"]);
}
?>
<br><br>



        <form action="" method="POST">
        Username:
        <input type="text" name="username" placeholder="Enter Username">
        Password:
        <input type="password" name="password" placeholder="Enter Password">

        <input type="submit" name="submit" value="Login" class="btn-primary">
        </form>
        <script>
            function validateForm() {
            let username = document.getElementById("username").value.trim();
            let password = document.getElementById("password").value.trim();

            if (username === "" || password === "") {
                Swal.fire({
                    icon: 'warning',
                    title: 'Validation Error',
                    text: 'Both fields are required!'
                });
                return false; 
            }

            return true; 
        }
        </script>
       
    </div>
</body>
</html>
<?php
if(isset($_POST["submit"])){


$username=$_POST["username"];
$password=md5($_POST["password"]);
$sql="SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";
$res=mysqli_query($conn,$sql);


$count=mysqli_num_rows($res);

if($count==1){

$_SESSION["login"]="<div class='success'>Login Successful</div>";

$_SESSION["user"]= $username;

echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'Login Successful!',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = '".SITEURL."admin/index.php';
            });
        </script>";
    } else {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Login Failed',
                text: 'Username or Password is incorrect'
            }).then(() => {
                window.location.href = '".SITEURL."admin/login.php';
            });
        </script>";
    }
}
?>      
