<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
            background-color: #f4f4f9;
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
        main {
            flex: 1;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .content {
            text-align: center;
            max-width: 800px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .content h1 {
            margin-bottom: 20px;
            color: #333;
        }
        .content p {
            color: #555;
            line-height: 1.6;
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
        <h1>About Us</h1>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.html">About</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
    </nav>
    <main>
        <div class="content">
            <h1>Who We Are</h1>
            <p>
                Welcome to our website! We are dedicated to providing the best services to our customers. 
                Our team is composed of passionate professionals who work hard to meet your needs and exceed your expectations.
            </p>
            <p>
                Our mission is to deliver high-quality solutions while building long-lasting relationships with our clients. 
                We believe in innovation, integrity, and excellence in all that we do.
            </p>
        </div>
    </main>
    <footer>
        <p>&copy; 2025 Your Website Name. All rights reserved.</p>
    </footer>
</body>
</html>