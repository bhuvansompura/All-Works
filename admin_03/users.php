<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Panel</title>
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
        .users-panel {
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .actions {
            display: flex;
            gap: 10px;
        }
        .btn {
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .btn.edit {
            background-color: #4CAF50;
            color: white;
        }
        .btn.delete {
            background-color: #f44336;
            color: white;
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
        <footer style="padding: 20px; text-align: center; background-color: #222;">
            <p>&copy; 2025 Admin Panel</p>
        </footer>
    </div>
    <div class="content">
        <div class="header">
            <h1>Users Panel</h1>
        </div>
        <div class="users-panel">
            <h2>Manage Users</h2>
            <table>
                <thead>
                    <tr>
                        <th>Sr. No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Interests</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?Php
                     include "conn.php";
                     $sql = "SELECT * FROM test02";
                     $res = mysqli_query($conn , $sql);
                      if ($res) {
                        while ($row = mysqli_fetch_assoc($res)) {
                          $id= $row['id'];
                          $name= $row['name'];
                          $email= $row['email'];
                          $gender= $row['gender'];
                          $interests= $row['interests'];
                          echo '
                           <tr>
                      <th scope="row">'.$id.'</th>
                               <td>'.$name.'</td>
                               <td>'.$email.'</td>
                               <td>'.$gender.'</td>
                               <td>'.$interests.'</td>
                               <td>
                               <a href="edit.php?editid='.$id.'" class="btn edit">Edit</a>
                               <a href="delete.php?deleteid='.$id.'" class="btn delete">Delete</a>
                               </td>
                               </tr>';
                               
                            
                        }
                      
                      } 
                    ?>
                <!-- <tr>
                        <td></td>
                        <td>John Doe</td>
                        <td>johndoe@example.com</td>
                        <td>Admin</td>
                        <td class="actions">
                            <button class="btn edit">Edit</button>
                            <button class="btn delete">Delete</button>
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
