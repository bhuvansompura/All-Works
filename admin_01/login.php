<?php
// $session_start();
include "connect.php";

if (isset($_POST['login'])) {
   $name = $_POST['name'];
   $password = $_POST['password'];


   $sql =  "SELECT * FROM admin WHERE name = '$name' and password = '$password'";
   $res = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    if ($count==1) {
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
    <title>Document</title>
</head>
<body>
<style>
        /* General body styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Centering the form */
        form {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        /* Styling for container and rows */
        .container {
            margin-bottom: 15px;
        }

        .row {
            display: flex;
            flex-direction: column;
        }

        /* Label styling */
        label {
            font-size: 14px;
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
        }

        /* Input field styling */
        input[type="text"],
        input[type="number"],
        input[type="email"],
        input[type="password"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            outline: none;
            transition: border-color 0.3s ease-in-out;
        }


        /* Submit button styling */
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
<form method="post">
        <div class="container">
            <div class="row">
                <label for="fullname">Full Name</label>
                <input type="text" name="name" id="name" placeholder="enter name" required>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="enter password" required>
            </div>
        </div>
        <input type="submit" name="login">
        <div style="text-align: center;">
            Already login <a href="login.php">Login here</a>

        </div>
    </form>
</body>
</html>