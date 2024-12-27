<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        /* Global styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e0f7fa;
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        /* Sidebar styles */
        .sidebar {
            width: 250px;
            background-color: #00796b;
            color: white;
            padding: 20px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 12px;
            border-bottom: 1px solid #004d40;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .sidebar ul li:hover {
            background-color: #004d40;
        }

        /* Main content area */
        .main-content {
            flex-grow: 1;
            background-color: #ffffff;
            padding: 20px;
            overflow-y: auto;
        }

        /* Header styles */
        .header {
            background-color: #00796b;
            color: white;
            padding: 15px;
            text-align: center;
            position: relative;
        }

        .header .logout {
            position: absolute;
            right: 20px;
            top: 15px;
            color: white;
            cursor: pointer;
        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #00796b;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #00796b;
            color: white;
        }

        td {
            background-color: #f1f1f1;
        }

        /* Media query for responsiveness */
        @media (max-width: 768px) {
            body {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                height: auto;
            }

            .main-content {
                padding: 10px;
            }
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h2>Admin Panel</h2>
    <ul>
        <li onclick="loadContent('dashboard')">Dashboard</li>
        <li onclick="loadContent('users')">Users</li>
        <li onclick="loadContent('settings')">Settings</li>
        <li onclick="loadContent('reports')">Reports</li>
    </ul>
</div>

<!-- Main Content Area -->
<div class="main-content">
    <div class="header">
        <h2>Admin Dashboard</h2>
        <a href="logout.php"><span class="logout" onclick="logout()">Logout</span></a>
    </div>

    <div id="contentArea">
        <h3>Welcome to the Admin Panel</h3>
        <p>Click on the sidebar to navigate through different sections.</p>
    </div>
</div>

<script>
    // Function to load content dynamically
    function loadContent(section) {
        const contentArea = document.getElementById("contentArea");

        // Switch based on section clicked
        switch (section) {
            case 'dashboard':
                contentArea.innerHTML = "<h3>Dashboard</h3><p>This is the Dashboard section.</p>";
                break;
            case 'users':
                contentArea.innerHTML = generateUserTable();
                break;
            case 'settings':
                contentArea.innerHTML = "<h3>Settings</h3><p>This is where you can modify settings.</p>";
                break;
            case 'reports':
                contentArea.innerHTML = "<h3>Reports</h3><p>Here you can view various reports.</p>";
                break;
            default:
                contentArea.innerHTML = "<h3>Welcome to the Admin Panel</h3><p>Click on the sidebar to navigate.</p>";
        }
    }

    // Generate Users Table with sample data
    function generateUserTable() {
        return `
            <h3>Users</h3>
            <table>
                <thead>
                    <tr>
                        <th>Sr.No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Dob</th>
                        <th>Gender</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
            include "conn.php";
            $sql = "SELECT * FROM test01";
            $result = mysqli_query($conn,$sql);
            if ($result) {
                
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $mobile = $row['mobile'];
                $dob = $row['dob'];
                $gender = $row['gender'];

                echo '
                <tr>
                <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>
                    <td>'.$dob.'</td>
                    <td>'.$gender.'</td>
                    <td>
                <a href="edit.php?editid='.$id.'">Edit</a>
                <a href="delete.php?deleteid='.$id.'">Delete</a>
                </tr>';
                }
            }
                
                ?>
                </tbody>
            </table>
        `;
    }

    // Logout function
    function logout() {
        alert("You have been logged out!");
        // Logic to redirect to the login page or logout action can go here
    }
</script>

</body>
</html>
