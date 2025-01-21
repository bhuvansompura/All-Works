<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
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

        /* Service Sections */
        .services-section {
            padding: 60px 20px;
            background-color: #f9f9f9;
        }

        .services-section h2 {
            font-size: 36px;
            text-align: center;
            margin-bottom: 40px;
        }

        .service-item {
            background-color: white;
            padding: 40px;
            margin: 20px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .service-item:hover {
            transform: translateY(-10px);
        }

        .service-item h3 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .service-item p {
            font-size: 18px;
            color: #777;
        }

        .service-item ul {
            list-style-type: none;
            padding-left: 20px;
            margin-top: 20px;
        }

        .service-item ul li {
            font-size: 16px;
            margin-bottom: 10px;
            color: #555;
        }

        /* Contact Section */
        .contact-section {
            padding: 60px 20px;
            text-align: center;
        }

        .contact-section h2 {
            font-size: 36px;
            margin-bottom: 30px;
        }

        .contact-section p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .contact-section a {
            color: #333;
            font-size: 18px;
            font-weight: 500;
            text-decoration: none;
        }

        .contact-section a:hover {
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
                <li><a href="about.php">About</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Our Services</h1>
        <p>Explore the range of services we offer to meet your needs.</p>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <h2>What We Offer</h2>

        <!-- Service Item 1 -->
        <div class="service-item">
            <h3>Web Development</h3>
            <p>Our web development services are designed to create modern, responsive, and high-performance websites that meet the specific needs of your business.</p>
            <ul>
                <li>Custom websites</li>
                <li>E-commerce solutions</li>
                <li>Content Management Systems (CMS)</li>
                <li>SEO optimization</li>
            </ul>
        </div>

        <!-- Service Item 2 -->
        <div class="service-item">
            <h3>App Development</h3>
            <p>We provide mobile app development for both iOS and Android platforms, ensuring seamless user experiences and top-notch performance.</p>
            <ul>
                <li>Cross-platform app development</li>
                <li>Native app development</li>
                <li>User-friendly interfaces</li>
                <li>App maintenance and support</li>
            </ul>
        </div>

        <!-- Service Item 3 -->
        <div class="service-item">
            <h3>SEO Optimization</h3>
            <p>Our SEO optimization services help improve your website’s visibility on search engines, driving more traffic to your site and increasing conversions.</p>
            <ul>
                <li>Keyword research</li>
                <li>On-page optimization</li>
                <li>Content creation</li>
                <li>Link building</li>
            </ul>
        </div>

        <!-- Service Item 4 -->
        <div class="service-item">
            <h3>Digital Marketing</h3>
            <p>We provide comprehensive digital marketing strategies that help businesses connect with their audience and drive more sales through various online platforms.</p>
            <ul>
                <li>Social media marketing</li>
                <li>Pay-per-click (PPC) advertising</li>
                <li>Email marketing</li>
                <li>Content marketing</li>
            </ul>
        </div>

    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <h2>Get in Touch</h2>
        <p>If you have any questions or would like to get started with one of our services, feel free to contact us!</p>
        <a href="mailto:info@yourwebsite.com">Email Us</a>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Your Website. All rights reserved.</p>
    </footer>

</body>

</html>
