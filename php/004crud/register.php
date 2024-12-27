<?php
 include "connect.php";

 if (isset($_POST['register'])) {
   $name = $_POST['name'];
   $mobile = $_POST['mobile'];
   $email = $_POST['email'];
   $age = $_POST['age'];
   $dob = $_POST['dob'];
   $password = $_POST['password'];
     
   $sql = "INSERT INTO crud(name,mobile,email,age,dob,password) value('$name','$mobile','$email','age','$dob','$password')";
   $res = mysqli_query($conn,$sql);
   if ($res) {
       echo "registration successfully";
       header("location:login.php");
   }else {
       die(mysqli_error($conn));
   }

 }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration-page</title>
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
                    <label for="mobile">user mobile</label>
                    <input type="number" name="mobile" id="mobile" placeholder="enter mobile" required>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <label for="email">user email</label>
                    <input type="text" name="email" id="email" placeholder="enter email" required>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <label for="age">user age</label>
                    <input type="text" name="age" id="age" placeholder="enter age" required>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <label for="dob">user dob</label>
                    <input type="date" name="dob" id="dob" placeholder="enter dob" required>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <label for="password">user password</label>
                    <input type="password" name="password" id="password" placeholder="enter password" required>
                </div>
            </div>
            <div class="btn-container">
                <input type="submit" name="register" value="register">
            </div><br>
            <div class="a-container" style="text-align: center;">
                Already sing-in-<a href="login.php">login here</a>
            </div>
        </form>
    </div>
</body>
</html>