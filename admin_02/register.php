<?php

 include "conn.php";

 if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $interets = $_POST['interests'];
 
 
    $sql = "INSERT INTO test02(name,email,password,gender,interests) values('$name','$email','$password','$gender','$interets')";
    // echo($sql); 
    $res = mysqli_query($conn,$sql);
     if ($res) {
        //  echo "registration successfully";
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
    <title>Registration Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .registration-form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .registration-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-group .checkbox-group {
            display: flex;
            align-items: center;
        }
        .form-group .checkbox-group input {
            width: auto;
            margin-right: 10px;
        }
        .form-group .checkbox-group label {
            margin: 0;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .form-group button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form class="registration-form" method="post">
        <h2>Registration Form</h2>
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select id="gender" name="gender" required>
                <option value="">Select your gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label>Interests</label>
            <div class="checkbox-group">
                <input type="checkbox" id="interest1" name="interests" value="coding">
                <label for="interest1">Coding</label>
            </div>
            <div class="checkbox-group">
                <input type="checkbox" id="interest2" name="interests" value="sports">
                <label for="interest2">Sports</label>
            </div>
            <div class="checkbox-group">
                <input type="checkbox" id="interest3" name="interests" value="music">
                <label for="interest3">Music</label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" name="submit" id="submit">Register</button>
        </div>
    </form>
</body>
</html>