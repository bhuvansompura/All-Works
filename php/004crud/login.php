<?php

include "connect.php";

if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM crud Where name='$name' AND password='$password'";
    // echo $sql;
    $res = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    if ($count==1) {
        header("location:alluser.php");
    }else {
        
        echo '<script>
        alert("login failed!  user and password invalid");
        </script>';
    }
}
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <form method="post">
            <div class="container">
                <div class="row">
                    <label for="name">user name</label>
                    <input type="text" name="name" id="name" placeholder="enter name" required>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <label for="password">user password</label>
                    <input type="password" name="password" id="password" placeholder="enter password" required>
                </div>
            </div>
            <div class="btn-container">
                <input type="submit" name="login" value="login">
            </div><br>
            <div class="a-container" style="text-align: center;">
                create new account-<a href="register.php">register here</a>
            </div>
        </form>
    </div>
</body>
</html>