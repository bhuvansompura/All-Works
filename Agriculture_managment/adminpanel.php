<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Sidebar Styling */
        #sidebar {
            height: 100vh;
            background-color: #2f4f4f;
            color: white;
            position: fixed;
            width: 250px;
            top: 0;
            left: 0;
            padding-top: 20px;
        }

        #sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        #sidebar a:hover {
            background-color: #4caf50;
        }

        /* Main content */
        .content {
            margin-left: 260px;
            padding: 20px;
        }

        .dashboard-card {
            margin-top: 20px;
        }

        .card-header {
            background-color: #4caf50;
            color: white;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div id="sidebar">
        <h3 class="text-center">Agriculture Admin</h3>
        <a href="admindashboard.php" id="dashboard">Dashboard</a>
        <a href="farmdata.php" id="farm-data">Farm Data</a>
        <a href="#" id="reports">Reports</a>
        <a href="adminsetting.php" id="settings">Settings</a>
        <a href="logout.php" id="logout">Logout</a>
    </div>

    <!-- Main content -->
    <div class="content">
        <div id="dashboard-content">
            <h2>Welcome to the Agriculture Dashboard</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card dashboard-card">
                        <div class="card-header">
                            <i class="fas fa-seedling"></i> Crop Stats
                        </div>
                        <div class="card-body">
                            <p>Total Crops: 1000</p>
                            <p>Planted Area: 500 Ha</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card dashboard-card">
                        <div class="card-header">
                            <i class="fas fa-tractor"></i> Equipment
                        </div>
                        <div class="card-body">
                            <p>Total Equipment: 50</p>
                            <p>Available for use: 20</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card dashboard-card">
                        <div class="card-header">
                            <i class="fas fa-users"></i> Staff
                        </div>
                        <div class="card-body">
                            <p>Total Staff: 150</p>
                            <p>Active Today: 120</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="farm-data-content" style="display: none;">
            <h2>Farm Data Management</h2>
            <p>Manage crops, irrigation, and land usage here.</p>
        </div>

        <div id="reports-content" style="display: none;">
            <h2>Reports</h2>
            <p>View and analyze farm data reports.</p>
        </div>

        <div id="settings-content" style="display: none;">
            <h2>Settings</h2>
            <p>Configure the system settings.</p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-5">
        <p>&copy; 2025 Agriculture Admin Panel</p>
    </footer>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // JavaScript for dynamic content
        $(document).ready(function () {
            $('#dashboard').click(function () {
                $('#dashboard-content').show();
                $('#farm-data-content').hide();
                $('#reports-content').hide();
                $('#settings-content').hide();
            });

            $('#farm-data').click(function () {
                $('#dashboard-content').hide();
                $('#farm-data-content').show();
                $('#reports-content').hide();
                $('#settings-content').hide();
            });

            $('#reports').click(function () {
                $('#dashboard-content').hide();
                $('#farm-data-content').hide();
                $('#reports-content').show();
                $('#settings-content').hide();
            });

            $('#settings').click(function () {
                $('#dashboard-content').hide();
                $('#farm-data-content').hide();
                $('#reports-content').hide();
                $('#settings-content').show();
            });

            $('#logout').click(function () {
                alert('Logged out');
                // Implement logout functionality here
            });
        });
    </script>
</body>

</html>
