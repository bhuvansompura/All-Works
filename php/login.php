<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Agriculture Website</title>
  <!-- <link rel="stylesheet" href="styles.css"> -->
   <style>
    /* Basic styles for the login page */
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

/* Login Section Styling */
.login {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  padding: 20px;
  background-color: #e8f5e9;
}

.login-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: white;
  padding: 3em;
  border-radius: 12px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  max-width: 1200px;
  width: 100%;
}

.login-image img {
  max-width: 400px;
  border-radius: 10px;
}

.login-form {
  max-width: 500px;
  width: 100%;
}

.login-form h2 {
  font-size: 2em;
  color: #4CAF50;
  margin-bottom: 1.5em;
}

.login-form label {
  display: block;
  margin-bottom: 0.5em;
  font-weight: bold;
  color: #333;
}

.login-form input {
  width: 100%;
  padding: 12px;
  margin-bottom: 1em;
  border: 1px solid #ddd;
  border-radius: 8px;
}

.login-form button {
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

.login-form button:hover {
  background-color: #388E3C; /* Darker green */
}

.login-form p {
  text-align: center;
}

.login-form a {
  text-decoration: none;
  color: #4CAF50;
}

.login-form a:hover {
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
  .login-container {
    flex-direction: column;
    align-items: center;
  }

  .login-image img {
    max-width: 300px;
    margin-bottom: 2em;
  }

  .login-form {
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

  <section class="login">
    <div class="login-container">
      <div class="login-image">
        <img src="images/pic-1.jpeg" alt="Agriculture Theme" /> <!-- Image to match the theme -->
      </div>
      <div class="login-form">
        <h2>Login to Your Account</h2>
        <form action="login_action.php" method="POST">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required placeholder="Enter your username">

          <label for="password">Password</label>
          <input type="password" id="password" name="password" required placeholder="Enter your password">

          <button type="submit">Login</button>

          <p>Don't have an account? <a href="registration.php">Create one here</a></p>
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
