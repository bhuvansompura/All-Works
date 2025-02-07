<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Header Navigation */
        nav {
            background-color: #333;
            color: white;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
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

        /* Hero Section */
        .hero {
            background-image: url('https://via.placeholder.com/1600x600');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 100px 20px;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
        }

        .hero .cta-btn {
            padding: 15px 30px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            font-weight: 500;
        }

        .hero .cta-btn:hover {
            background-color: #555;
        }

        /* Services Section */
        .services {
            padding: 60px 20px;
            text-align: center;
            background-color: #f9f9f9;
        }

        .services h2 {
            font-size: 36px;
            margin-bottom: 30px;
        }

        .services .service-card {
            display: inline-block;
            width: 30%;
            margin: 0 10px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .services .service-card:hover {
            transform: translateY(-10px);
        }

        .services .service-card h3 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .services .service-card p {
            font-size: 16px;
            color: #777;
        }

        /* Contact Section */
        .contact {
            padding: 60px 20px;
            text-align: center;
        }

        .contact h2 {
            font-size: 36px;
            margin-bottom: 30px;
        }

        .contact p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .contact a {
            color: #333;
            font-size: 18px;
            font-weight: 500;
            text-decoration: none;
        }

        .contact a:hover {
            text-decoration: underline;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
    <nav>
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Welcome to Our Website!</h1>
        <p>Your gateway to amazing services and features.</p>
        <a href="#services" class="cta-btn">Explore Our Services</a>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <h2>Our Services</h2>
        <div class="service-card">
            <h3>Web Development</h3>
            <p>We build modern, responsive websites to meet your business needs.</p>
        </div>
        <div class="service-card">
            <h3>App Development</h3>
            <p>Creating cross-platform mobile applications that engage users.</p>
        </div>
        <div class="service-card">
            <h3>SEO Optimization</h3>
            <p>Boost your search engine rankings and grow your online presence.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <h2>Contact Us</h2>
        <p>Have any questions or want to get started? Reach out to us!</p>
        <a href="mailto:info@yourwebsite.com">Email Us</a>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Your Website. All rights reserved.</p>
    </footer>

</body>

</html>
