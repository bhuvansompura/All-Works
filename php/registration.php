<?php
 
 include "conn.php";

if (isset($_POST['register'])) {
 $name =$_POST['name'];
  $email=$_POST['email'];
  $password = $_POST['password'];
   $cpassword = $_POST['cpassword'];
  if ($password == $cpassword) {

    $sql = "INSERT INTO agri(name,email,password) VALUE('$name','$email','$password')";
    // echo $sql;
    $result = mysqli_query($conn,$sql);
    if ($result) {
      // echo "registration successfully";
      header("location:login.php");
  }else {
      die(mysqli_error($conn));
  }
    // echo "registration succesfullly";
  }else {
   echo '<script>alert("password and confirm password dose not match!")</script>';
  }
}






?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Agriculture Website</title>
  <!-- <link rel="stylesheet" href="styles.css"> -->
<style>
  body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #f0f8f0;
  color: #333;
  margin: 0;
  padding: 0;
}

/* Header Styling */
header {
  background-color: #4CAF50;
  padding: 1em 0;
  text-align: center;
}

nav ul {
  list-style-type: none;
  padding: 0;
}

nav ul li {
  display: inline;
  margin: 0 20px;
}

nav ul li a {
  text-decoration: none;
  color: white;
  font-weight: bold;
  font-size: 1.1em;
}

nav ul li a:hover {
  color: #FFEB3B;  /* Bright yellow hover effect */
}

/* Registration Section Styling */
.register {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  padding: 20px;
  background-color: #e8f5e9;
}

.register-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: white;
  padding: 3em;
  border-radius: 12px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  max-width: 1400px; /* Increased the max width */
  width: 100%;
}

.register-image img {
  max-width: 600px; /* Increased max width of the image */
  width: 100%;
  border-radius: 10px;
}

.register-form {
  max-width: 500px;
  width: 100%;
}

.register-form h2 {
  font-size: 2.5em; /* Increased font size */
  color: #4CAF50;
  margin-bottom: 1.5em;
}

.register-form label {
  display: block;
  margin-bottom: 0.5em;
  font-weight: bold;
  color: #333;
}

.register-form input {
  width: 100%;
  padding: 12px;
  margin-bottom: 1em;
  border: 1px solid #ddd;
  border-radius: 8px;
}

.register-form button {
  width: 100%;
  padding: 12px;
  background-color: #4CAF50;
  color: white;
  font-weight: bold;
  border: none;
  cursor: pointer;
  border-radius: 8px;
  transition: background-color 0.3s ease;
}

.register-form button:hover {
  background-color: #388E3C; /* Darker green */
}

.register-form p {
  text-align: center;
}

.register-form a {
  text-decoration: none;
  color: #4CAF50;
}

.register-form a:hover {
  color: #388E3C;
}

/* Social Links in the Footer */
footer {
  background-color: #4CAF50;
  color: white;
  padding: 2em 0;
  text-align: center;
}

footer .social-links {
  list-style-type: none;
  padding: 0;
}

footer .social-links li {
  display: inline;
  margin: 0 20px;
}

footer .social-links li a {
  text-decoration: none;
  color: white;
  font-size: 1.2em;
}

footer .social-links li a:hover {
  color: #FFEB3B;
}

/* Responsive Design for smaller screens */
@media (max-width: 768px) {
  .register-container {
    flex-direction: column;
    align-items: center;
  }

  .register-image img {
    max-width: 500px; /* Adjusted the max width for smaller screens */
    margin-bottom: 2em;
  }

  .register-form {
    width: 100%;
  }
}
</style>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="registration.php">Register</a></li>
      </ul>
    </nav>
  </header>

  <section class="register">
    <div class="register-container">
      <div class="register-image">
        <img src="images/pic-2.jpeg" alt="Agriculture Image" />
      </div>
      <div class="register-form">
        <h2>Create a New Account</h2>
        <form method="POST">
          <label for="username">Username</label>
          <input type="text" id="username" name="name" required placeholder="Enter your username">

          <label for="email">Email</label>
          <input type="email" id="email" name="email" required placeholder="Enter your email">

          <label for="password">Password</label>
          <input type="password" id="password" name="password" required placeholder="Create your password">

          <label for="confirm-password">Confirm Password</label>
          <input type="password" id="confirm-password" name="cpassword" required placeholder="Confirm your password">

          <button type="submit" name="register">Register</button>

          <p>Already have an account? <a href="login.php">Login here</a></p>
        </form>
      </div>
    </div>
  </section>

  <footer>
    <ul class="social-links">
      <li><a href="https://www.instagram.com" target="_blank">Instagram</a></li>
      <li><a href="https://www.facebook.com" target="_blank">Facebook</a></li>
      <li><a href="https://twitter.com" target="_blank">Twitter</a></li>
      <li><a href="https://www.google.com" target="_blank">Google</a></li>
    </ul>
  </footer>
</body>
</html>
