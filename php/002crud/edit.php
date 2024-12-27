<?php

include "conn.php";
$id = $_GET['editid'];
$sql = "SELECT * FROM test01 WHERE id='$id'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$dob = $row['dob'];
$gender = $row['gender'];
$password = $row['password'];

if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    $edit = "UPDATE test01 set id= '$id', name='$name', email='$email',mobile='$mobile',dob='$dob',gender='$gender', password='$password' WHERE id=$id";
    $res = mysqli_query($conn, $edit);
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
    <title>Registration Form</title>
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

        input[type="text"], input[type="email"], input[type="tel"], input[type="date"], input[type="password"], input[type="radio"], input[type="checkbox"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 16px;
            border: 2px solid #00796b;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
            transition: border 0.3s ease;
        }

        input[type="text"]:focus, input[type="email"]:focus, input[type="tel"]:focus, input[type="date"]:focus, input[type="password"]:focus {
            border-color: #004d40;
        }

        /* Radio and checkbox */
        input[type="radio"], input[type="checkbox"] {
            width: auto;
            margin-right: 8px;
            vertical-align: middle;
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

        /* Terms and conditions text */
        .terms {
            font-size: 14px;
            color: #004d40;
            margin-bottom: 16px;
        }

        /* Error message styling */
        .error {
            color: red;
            font-size: 12px;
            margin-top: -12px;
            margin-bottom: 16px;
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

            input[type="text"], input[type="email"], input[type="tel"], input[type="date"], input[type="password"] {
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
<!-- <h2>Sample Form with Validation</h2> -->

<form method="POST" id="myForm">
    <!-- Full Name field -->
    <label for="name">Full Name:</label>
    <input type="text" id="name" name="name" required minlength="3" value="<?php echo $name;   ?>" maxlength="50" placeholder="Enter your full name"><br>

    <!-- Email field -->
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $email;   ?>" required placeholder="Enter your email"><br>

    <!-- Phone Number field -->
    <label for="mobile">Phone Number:</label>
    <input type="tel" id="mobile" name="mobile" value="<?php echo $mobile;   ?>" required pattern="^[0-9]{10}$" placeholder="Enter 10-digit phone number"><br>

    <!-- Date of Birth field -->
    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" value="<?php echo $dob;   ?>" required><br>

    <!-- Gender field -->
    <label>Gender:</label><br>
    <input type="radio" id="male" name="gender" value="male"<?php if ($gender == 'male') { echo "checked"; } ?> required> Male
    <input type="radio" id="female" name="gender" value="female"<?php if ($gender == 'female') { echo "checked"; } ?>  required> Female<br><br>

    <!-- Password field -->
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" value="<?php echo $password;   ?>" required minlength="8" placeholder="Enter your password"><br>

    <!-- Terms Agreement -->
    <label class="terms">
        <input type="checkbox" id="terms" name="terms" required> I agree to the terms and conditions
    </label><br><br>

    <!-- Submit button -->
    <button type="submit" name="edit">Submit</button>
</form>

<script>
    document.getElementById("myForm").addEventListener("submit", function(event) {
        // Optional custom validation can be added here
        alert("Form submitted successfully!");
    });
</script>

</body>
</html>