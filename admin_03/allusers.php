<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users - Admin Panel</title>
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

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th,
        table td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Action Button Styling */
        .action-btns a {
            padding: 10px 15px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            margin-right: 10px;
        }

        .action-btns a:hover {
            background-color: #555;
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
                <li><a href="admin.php">Dashboard</a></li>
                <li><a href="manage-users.php">Manage Users</a></li>
                <li><a href="manageservices.php">Manage Services</a></li>
                <li><a href="site-settings.php">Site Settings</a></li>
                <li><a href="reports.php">Reports</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

        <!-- Content Area -->
        <div class="content">
            <h2>Manage Users</h2>

            <!-- User Table -->
            <table>
                <thead>
                    <tr>
                        <th>Sr.No.</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?Php
                     include "conn.php";
                     $sql = "SELECT * FROM test";
                     $res = mysqli_query($conn , $sql);
                      if ($res) {
                        while ($row = mysqli_fetch_assoc($res)) {
                          $id= $row['id'];
                          $name= $row['name'];
                          $email= $row['email'];
                          echo '
                           <tr>
                      <th scope="row">'.$id.'</th>
                               <td>'.$name.'</td>
                               <td>'.$email.'</td>
                               <td class="action-btns">
                            <a href="edit.php?editid='.$id.'">Edit</a>
                            <a href="delete.php?deleteid='.$id.'">Delete</a>
                        </td>
                               </tr>';
                               
                            
                        }
                      
                      } 
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Your Website. All rights reserved.</p>
    </footer>

</body>

</html>
