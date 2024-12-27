<?php
include "connect.php";

if (isset($_POST['login'])) {
   $name = $_POST['name'];
   $password = $_POST['password'];


   $sql =  "SELECT * FROM school WHERE name = '$name' and password = '$password'";
   $res = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    if ($count==1) {
        // echo "login successfully";
        header("location:admin.php");
    }else {
       header("login.php");
        echo '<script>alert("login failed ")</script>';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Registration Form</title>
    <!-- <script>
        if (window.history.replaceState) {
            window.history.replaceState(null,null,window.location.href);
        }
    </script> -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input:focus, select:focus, textarea:focus {
            border-color: #007BFF;
            outline: none;
        }

        .button {
            display: flex;
            justify-content: center;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>School Login Form</h2>
        <form method="post">
            <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
            </div>

            <div class="button">
                <button type="submit" name="login">Login</button>
            </div>
             <div class="a-container" style="text-align: center; padding: 10px; margin:10px">
                 create new account <a href="register.php">Here</a>

             </div>
            
        </form>
    </div>
</body>
</html>