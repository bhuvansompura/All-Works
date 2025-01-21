<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        nav {
            background-color: #333;
            color: white;
            padding: 10px 0;
        }

        nav ul {
            display: flex;
            justify-content: center;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin: 0 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 18px;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .about-container {
            display: flex;
            justify-content: center;
            padding: 50px 0;
        }

        .about-content {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border-radius: 8px;
            width: 100%;
            max-width: 800px;
        }

        .about-content h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .about-content p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>

<body>

    <nav>
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="about-container">
            <div class="about-content">
                <h2>About Us</h2>
                <p>Welcome to our website! We are a company dedicated to providing excellent services in the field of technology, innovation, and customer satisfaction. Our team is comprised of experts in various fields, including software development, project management, and digital marketing.</p>
                <p>Our mission is to deliver high-quality products and solutions to help businesses thrive in an ever-evolving digital world. We believe in the power of collaboration, creativity, and continuous improvement, which has driven us to become a leader in our industry.</p>
                <p>At our core, we value integrity, innovation, and customer-centricity. We strive to exceed expectations and help our clients achieve their goals. Whether you're a small startup or a large enterprise, we're here to support your journey toward success.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Your Website. All rights reserved.</p>
    </footer>

</body>

</html>