<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Home Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
        }
        nav {
            display: flex;
            justify-content: center;
            background-color: #333;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            display: block;
        }
        nav a:hover {
            background-color: #ddd;
            color: black;
        }
        .auth-buttons {
            margin-left: auto;
            margin-right: 20px;
        }
        .auth-buttons a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            margin: 5px;
            background-color: #4CAF50;
            border-radius: 5px;
            font-size: 14px;
        }
        .auth-buttons a:hover {
            background-color: #45a049;
        }
        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: linear-gradient(to bottom, #f0f0f0, #e0e0e0);
        }
        section {
            margin: 20px 0;
            width: 100%;
            max-width: 800px;
            text-align: center;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Home Page</h1>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="#services">Services</a>
        <a href="contact.php">Contact</a>
        <div class="auth-buttons">
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
        </div>
    </nav>
    <main>
    </main>
    <footer>
        <p>&copy; 2025 Your Website Name. All rights reserved.</p>
    </footer>
</body>
</html>