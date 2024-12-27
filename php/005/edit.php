<?php

include "connect.php";

    $id = $_GET['editid'];
    $edit = "SELECT * FROM school Where id ='$id'";
    $result = mysqli_query($conn,$edit);
    $row= mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $dob = $row['dob'];
    $gender = $row['gender'];
    $address = $row['address'];

    if (isset($_POST['edit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $password = $_POST['password'];
    
        $sql = "UPDATE school set id= '$id', name='$name',email='$email',phone='$phone',dob='$dob',gender='$gender',address='$address', password='$password' WHERE id='$id'";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            // echo "data successfully updated";
            header("location:allusers.php");
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
    <title>School Registration Form</title>
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
        <h2>School Registration Form</h2>
        <form method="post">
            <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required value=<?php echo $name;  ?>>
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required value=<?php echo $email;  ?>>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required value=<?php echo $phone;  ?>>
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required value=<?php  echo $dob;  ?>>
            </div>
            
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required value=<?php echo $gender;  ?>>
                    <option value="">Select Gender</option>
                    <option value="male" <?php echo ($gender == 'male') ? 'selected' : ''; ?>>Male</option>
                    <option value="female" <?php echo ($gender == 'female') ? 'selected' : ''; ?>>Female</option>
                    <option value="other" <?php echo ($gender == '') ? 'selected' : ''; ?>>Other</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="4" placeholder="Enter your address" required><?php echo $address;  ?></textarea>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
            </div>
            
            <div class="button">
                <button type="submit" name="edit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>