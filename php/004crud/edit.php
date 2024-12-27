<?php

include "connect.php";
$id = $_GET['updateid'];
$sql = "SELECT * FROM crud WHERE id='$id'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
$name = $row['name'];
$email = $row['mobile'];
$email = $row['email'];
$age = $row['age'];
$dob = $row['dob'];
$password = $row['password'];

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];

    $sql = "UPDATE crud set id= '$id', name='$name', mobile='$mobile', email='$email',age='$age',dob='$dob', password='$password' WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        // echo "data successfully updated";
        header("location:alluser.php");
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
    <title>Registration-page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <form method="post">
            <div class="container">
                <div class="row">
                    <label for="name">user name</label>
                    <input type="text" name="name" id="name" placeholder="enter name" value="<?php echo $name;  ?>" required>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <label for="mobile">user mobile</label>
                    <input type="number" name="mobile" id="mobile" placeholder="enter mobile" value="<?php echo $mobile;  ?>"  required>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <label for="email">user email</label>
                    <input type="text" name="email" id="email" placeholder="enter email" value="<?php echo $email;  ?>" required>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <label for="age">user age</label>
                    <input type="text" name="age" id="age" placeholder="enter age" value="<?php echo $age;  ?>" required>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <label for="dob">user dob</label>
                    <input type="date" name="dob" id="dob" placeholder="enter dob" value="<?php echo $dob;  ?>" required>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <label for="password">user password</label>
                    <input type="password" name="password" id="password" placeholder="enter password" value="<?php echo $password;  ?>" required>
                </div>
            </div>
            <div class="btn-container">
                <input type="submit" name="update" value="update">
            </div>
        </form>
    </div>
</body>
</html>