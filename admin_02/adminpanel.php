<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        .sidebar {
            width: 250px;
            background-color: #333;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .sidebar .menu {
            list-style: none;
            padding: 20px;
        }

        .sidebar .menu li {
            margin: 15px 0;
        }

        .sidebar .menu a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar .menu a:hover {
            background-color: #575757;
        }

        .logout-btn {
            margin: 20px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .logout-btn:hover {
            background-color: #45a049;
        }

        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            overflow-y: auto;
        }

        .header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .dashboard {
            padding: 20px;
        }

        .dashboard h2 {
            margin-bottom: 20px;
        }

        .card-container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            flex: 1;
            min-width: 250px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <ul class="menu">
            <li><a href="adminpanel.php">Dashboard</a></li>
            <li><a href="users.php">Users</a></li>
            <li><a href="#reports">Reports</a></li>
            <li><a href="#settings">Settings</a></li>
        </ul>
        <!-- <button class="logout-btn" >Logout</button> -->
        <a href="logout.php" class="logout-btn">Logout</a>
        
        <footer style="padding: 20px; text-align: center; background-color: #222;">
            <p>&copy; 2025 Admin Panel</p>
        </footer>
    </div>
    <div class="content">
        <div class="header">
            <h1>Admin Panel</h1>
        </div>
        <div class="dashboard" id="dashboard">
            <h2>Dashboard</h2>
        </div>
    </div>

</body>

</html>
