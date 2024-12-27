<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
  <style>
        /* Basic Reset */
body, h1, h2, h3, p, ul, li {
    margin: 0;
    padding: 0;
    list-style: none;
}
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    color: #333;
}

/* Navigation Bar */
nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #007BFF;
    color: white;
    padding: 10px 20px;
}
nav a {
    color: white;
    text-decoration: none;
    margin: 0 10px;
}
nav a:hover {
    text-decoration: underline;
}

/* Hero Section */
.hero {
    text-align: center;
    padding: 50px 20px;
    background: linear-gradient(to right, #007BFF, #00C6FF);
    color: white;
}
.hero h1 {
    font-size: 3rem;
    margin-bottom: 10px;
}
.hero p {
    font-size: 1.2rem;
}

/* Content Section */
.container {
    max-width: 1100px;
    margin: 20px auto;
    padding: 20px;
}
.section {
    margin-bottom: 30px;
}
.section h2 {
    margin-bottom: 10px;
    color: #007BFF;
}
.section p {
    margin-bottom: 10px;
}

/* Footer */
footer {
    text-align: center;
    padding: 10px 20px;
    background: #007BFF;
    color: white;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero h1 {
        font-size: 2rem;
    }
    .hero p {
        font-size: 1rem;
    }
}
    </style>
</head>
<body>
    
    <!-- Navigation Bar -->
    <nav>
        <div class="logo">
            <h1>My Website</h1>
        </div>
        <div class="links">
            <a href="home">Home</a>
            <a href="about">About</a>
            <a href="services">Services</a>
            <a href="register.php">sing up</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <h1>Welcome to My Website</h1>
        <p>Building a better web, one page at a time.</p>
    </section>

    <!-- Content Section -->
    <div class="container">
        <div class="section" id="about">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet accumsan arcu.</p>
        </div>
        <div class="section" id="services">
            <h2>Our Services</h2>
            <p>We offer a wide range of services to meet your needs, from web design to digital marketing.</p>
        </div>
        <div class="section" id="contact">
            <h2>Contact Us</h2>
            <p>Email us at <a href="mailto:info@example.com">info@example.com</a></p>
            <p>Follow us on <a href="#">Twitter</a> or <a href="#">Facebook</a>.</p>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>
</body>
</html>
