<?php

include "connect.php";
$id = $_GET['updateid'];
$sql = "SELECT * FROM admin WHERE id='$id'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
$name = $row['name'];
$mobile = $row['mobile'];
$email = $row['email'];
$password = $row['password'];

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE admin set id= '$id', name='$name', mobile='$mobile', email='$email', password='$password' WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        // echo "data successfully updated";
        header("location:admin.php");
    } else {
        die(mysqli_error($conn));
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

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #007BFF;
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
                <input type="text" name="name" id="name" placeholder="enter name" value="<?php echo $name;  ?>" required>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <label for="mobile">Mobile</label>
                <input type="number" name="mobile" id="mobile" placeholder="enter number" value="<?php echo $mobile; ?>" required>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="enter email" value="<?php echo $email;  ?>" required>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="enter password" value="<?php echo $password;  ?>" required>
            </div>
        </div>
        <input type="submit" name="update">
    </form>
    
</body>

</html>