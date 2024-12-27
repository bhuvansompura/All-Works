<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        /* Global reset and basic styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            line-height: 1.6;
            color: #333;
        }

        /* Header and Navigation */
        header {
            background-color: #00796b;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #004d40;
            padding: 10px 0;
        }

        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 16px;
            text-transform: uppercase;
        }

        nav a:hover {
            background-color: #00796b;
        }

        nav a.active {
            background-color: #004d40;
            color: #fafafa;
        }

        /* Main Content */
        .container {
            width: 80%;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            color: #00796b;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #555;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Button */
        .btn {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 14px;
            background-color: #00796b;
            color: white;
            text-align: center;
            font-size: 18px;
            border-radius: 8px;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #004d40;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            background-color: #00796b;
            color: white;
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            nav {
                flex-direction: column;
            }

            nav a {
                padding: 10px;
                text-align: center;
            }

            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>

<!-- Header -->
<header>
    <h1 style="color: #fafafa;">Welcome to Our Website</h1>
    <p>Your gateway to an amazing experience</p>
</header>

<!-- Navigation Bar -->
<nav>
    <a href="#home" class="active">Home</a>
    <a href="#services">Services</a>
    <a href="#about">About Us</a>
    <a href="#contact">Contact</a>
</nav>

<!-- Main Content -->
<div class="container" id="home">
    <h1>Home Page</h1>
    <p>Welcome to our homepage! We provide exceptional services to our customers and are happy to have you here.</p>
    <a href="register.php" class="btn">Register Now</a>
</div>

<!-- About Section -->
<div class="container" id="about">
    <h1>About Us</h1>
    <p>We are a team of dedicated professionals committed to providing the best service to our customers. Our company has a long-standing reputation for excellence.</p>
</div>

<!-- Services Section -->
<div class="container" id="services">
    <h1>Our Services</h1>
    <p>We offer a variety of services tailored to meet the needs of our clients. Whether you are looking for solutions in technology, consulting, or digital marketing, we have something for you.</p>
</div>

<!-- Contact Section -->
<div class="container" id="contact">
    <h1>Contact Us</h1>
    <p>If you have any questions or would like to know more about our services, feel free to contact us. We are here to help!</p>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Our Website. All rights reserved.</p>
</footer>

</body>
</html>
