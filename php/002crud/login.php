<?php 

include "conn.php";

if (isset($_POST['login'])) {
   $email= $_POST['email'];
   $password = $_POST['password'];

   $login = "SELECT * FROM test01 WHERE email= '$email' AND password = '$password'";
   $result = mysqli_query($conn,$login);
   $count = mysqli_num_rows($result);
   if ($count==1) {
    header("location:admin.php");
   }else {
    header("location:login.php");
    echo '<script>alert("login failed ")</script>';
   }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        /* Global styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e0f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h2 {
            color: #00796b;
            margin-bottom: 20px;
            font-size: 28px;
            text-align: center;
        }

        /* Form container */
        form {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 30px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        /* Form elements styling */
        label {
            font-size: 14px;
            color: #00796b;
            margin-bottom: 8px;
            display: inline-block;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 16px;
            border: 2px solid #00796b;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
            transition: border 0.3s ease;
        }

        input[type="email"]:focus, input[type="password"]:focus {
            border-color: #004d40;
        }

        /* Submit button styling */
        button {
            width: 100%;
            padding: 14px;
            background-color: #00796b;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #004d40;
        }

        /* Media query for responsiveness */
        @media (max-width: 480px) {
            h2 {
                font-size: 24px;
            }

            form {
                padding: 20px;
                width: 90%;
            }

            input[type="email"], input[type="password"] {
                padding: 10px;
            }

            button {
                padding: 12px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

<h2>Login</h2>

<form method="POST" id="loginForm">
    <!-- Email field -->
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required placeholder="Enter your email"><br>

    <!-- Password field -->
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required minlength="8" placeholder="Enter your password"><br>

    <!-- Submit button -->
    <button type="submit" name="login">Login</button>
</form>

<script>
    document.getElementById("loginForm").addEventListener("submit", function(event) {
        // Optional custom validation can be added here
        alert("Login submitted successfully!");
    });
</script>

</body>
</html>