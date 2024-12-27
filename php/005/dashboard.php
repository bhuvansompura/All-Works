<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f9;
    }
    .container {
      display: flex;
      min-height: 100vh;
    }
    .sidebar {
      width: 250px;
      background-color: #333;
      color: white;
      padding-top: 20px;
    }
    .sidebar ul {
      list-style-type: none;
      padding: 0;
    }
    .sidebar ul li {
      padding: 15px;
      text-align: center;
    }
    .sidebar ul li:hover {
      background-color: #575757;
    }
    .main-content {
      flex-grow: 1;
      padding: 20px;
    }
    .header {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      text-align: center;
    }
    .card {
      background-color: white;
      padding: 20px;
      margin: 10px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card h3 {
      margin-top: 0;
    }
    .card-container {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
    }
  </style>
</head>
<body>

  <div class="container">
    <!-- Sidebar -->
    <div class="sidebar">
      <ul>
        <li>Dashboard</li>
        <li>Users</li>
        <li>Settings</li>
        <li>Reports</li>
        <li><a href="admin.php" style="color: #f4f4f9;">Back</a></li>
      </ul>
    </div>

    <!-- Main content -->
    <div class="main-content">
      <div class="header">
        <h1>Welcome to the Dashboard</h1>
      </div>

      <div class="card-container">
        <div class="card">
          <h3>New Users</h3>
          <p>120 new users today</p>
        </div>
        <div class="card">
          <h3>Sales</h3>
          <p>$5,000 sales today</p>
        </div>
        <div class="card">
          <h3>Tasks</h3>
          <p>45 tasks completed today</p>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
