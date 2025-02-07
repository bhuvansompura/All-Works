<?php

// $session_start();
include "conn.php";

if (isset($_POST['login'])) {
   $email = $_POST['email'];
   $password = $_POST['password'];


   $sql =  "SELECT * FROM test WHERE email = '$email' and password = '$password'";
   $res = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    if ($count==1) {
        header("location:adminpanel.php");
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
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        nav {
            background-color: #333;
            color: white;
            padding: 10px 0;
        }

        nav ul {
            display: flex;
            justify-content: center;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin: 0 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 18px;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .auth-container {
            display: flex;
            justify-content: center;
            padding: 50px 0;
        }

        .form-container {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border-radius: 8px;
            width: 400px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        .form-container input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-container button {
            width: 100%;
            padding: 12px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #555;
        }

        .switch-form {
            text-align: center;
            margin-top: 15px;
        }

        .switch-form a {
            color: #333;
            font-weight: 500;
            text-decoration: none;
        }

        .switch-form a:hover {
            text-decoration: underline;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>

<body>

    <nav>
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="auth-container">
            <!-- Login Form -->
            <div class="form-container">
                <h2>Login</h2>
                <form method="POST">
                    <label for="login-email">Email</label>
                    <input type="email" id="login-email" name="email" required>

                    <label for="login-password">Password</label>
                    <input type="password" id="login-password" name="password" required>

                    <button type="submit" name="login">Login</button>

                    <div class="switch-form">
                        <p>Don't have an account? <a href="register.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Your Website. All rights reserved.</p>
    </footer>

</body>

</html>