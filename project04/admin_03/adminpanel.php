<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
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

        /* Admin Panel */
        .admin-panel {
            display: flex;
            padding: 30px;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #333;
            color: white;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: white;
            font-weight: 500;
            text-decoration: none;
            font-size: 18px;
        }

        .sidebar ul li a:hover {
            text-decoration: underline;
        }

        /* Content Area */
        .content {
            flex-grow: 1;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-left: 30px;
        }

        .content h2 {
            font-size: 36px;
            margin-bottom: 30px;
        }

        .card {
            background-color: #f9f9f9;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 16px;
            color: #777;
        }

        .card a {
            color: #333;
            font-weight: 500;
            text-decoration: none;
            font-size: 18px;
        }

        .card a:hover {
            text-decoration: underline;
        }

        /* Footer */
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

    <!-- Navigation Bar -->
    <nav>
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="adminpanel.php">Admin</a></li>
            </ul>
        </div>
    </nav>

    <!-- Admin Panel -->
    <div class="admin-panel">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Admin Dashboard</h2>
            <ul>
                <li><a href="adminpanel.php">Dashboard</a></li>
                <li><a href="allusers.php">Manage Users</a></li>
                <li><a href="manageservices.php">Manage Services</a></li>
                <li><a href="#">Site Settings</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

        <!-- Content Area -->
        <div class="content">
            <h2>Welcome to the Admin Panel</h2>

            <!-- Dashboard Cards -->
            <div class="card">
                <h3>Overview</h3>
                <p>Here you can manage your site, users, services, and view reports.</p>
            </div>

            <div class="card">
                <h3>Manage Users</h3>
                <p>View, add, or remove users from your platform. <a href="#">Manage Now</a></p>
            </div>

            <div class="card">
                <h3>Manage Services</h3>
                <p>Edit or add new services offered on your website. <a href="#">Manage Now</a></p>
            </div>

            <div class="card">
                <h3>Site Settings</h3>
                <p>Update site settings such as SEO and appearance. <a href="#">Manage Now</a></p>
            </div>

            <div class="card">
                <h3>Reports</h3>
                <p>View and analyze reports for user activities, website traffic, and more. <a href="#">View Reports</a></p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Your Website. All rights reserved.</p>
    </footer>

</body>

</html>
