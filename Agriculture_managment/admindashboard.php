<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Admin Panel - Dashboard</title>
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

        .card-header {
            background-color: #4caf50;
            color: white;
        }

        .card-body {
            background-color: #f9f9f9;
        }

        .dashboard-card {
            margin-top: 20px;
        }

        footer {
            background-color: #2f4f4f;
            color: white;
            padding: 10px 0;
            position: absolute;
            width: 100%;
            bottom: 0;
        }

    </style>
</head>

<body>
    <!-- Sidebar -->
    <div id="sidebar">
        <h3 class="text-center">Agriculture Admin</h3>
        <a href="admindashboard.php" id="dashboard">Dashboard</a>
        <a href="farmdata.php" id="farm-data">Farm Data</a>
        <a href="equipment.php" id="equipment">Equipment</a>
        <a href="staff.php" id="staff">Staff</a>
        <a href="reports.html" id="reports">Reports</a>
        <a href="settings.html" id="settings">Settings</a>
        <a href="logout.html" id="logout">Logout</a>
    </div>

    <!-- Main content -->
    <div class="content">
        <h2>Dashboard</h2>
        <p>Welcome to the Agriculture Admin Panel. Here’s a quick overview of farm operations.</p>

        <!-- Overview Stats -->
        <div class="row">
            <!-- Crop Stats Card -->
            <div class="col-md-4">
                <div class="card dashboard-card">
                    <div class="card-header">
                        <i class="fas fa-seedling"></i> Crop Stats
                    </div>
                    <div class="card-body">
                        <p>Total Crops: 1000</p>
                        <p>Planted Area: 500 Ha</p>
                        <p>Harvested: 200 Ha</p>
                    </div>
                </div>
            </div>
            <!-- Equipment Status Card -->
            <div class="col-md-4">
                <div class="card dashboard-card">
                    <div class="card-header">
                        <i class="fas fa-tractor"></i> Equipment Status
                    </div>
                    <div class="card-body">
                        <p>Total Equipment: 50</p>
                        <p>Available: 20</p>
                        <p>In Maintenance: 5</p>
                    </div>
                </div>
            </div>
            <!-- Staff Count Card -->
            <div class="col-md-4">
                <div class="card dashboard-card">
                    <div class="card-header">
                        <i class="fas fa-users"></i> Staff Count
                    </div>
                    <div class="card-body">
                        <p>Total Staff: 150</p>
                        <p>Active Today: 120</p>
                        <p>Available for Tasks: 100</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Farm Performance (Placeholder for Charts) -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-chart-line"></i> Farm Performance Overview
                    </div>
                    <div class="card-body">
                        <p>This section would contain your charts for crop yields, weather trends, and other farm performance metrics.</p>
                        <!-- Placeholder for Chart -->
                        <div style="height: 250px; background-color: #f1f1f1; text-align: center;">
                            <h4>Performance Chart Placeholder</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Reports (Placeholder for data tables or recent activity) -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-file-alt"></i> Recent Reports
                    </div>
                    <div class="card-body">
                        <p>Below is a list of the most recent farm reports generated or updated.</p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Report Name</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Monthly Crop Report</td>
                                        <td>2025-02-01</td>
                                        <td>Completed</td>
                                    </tr>
                                    <tr>
                                        <td>Equipment Maintenance Report</td>
                                        <td>2025-02-05</td>
                                        <td>In Progress</td>
                                    </tr>
                                    <tr>
                                        <td>Staff Allocation Report</td>
                                        <td>2025-01-25</td>
                                        <td>Completed</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="text-center mt-5">
            <p>&copy; 2025 Agriculture Admin Panel</p>
        </footer>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // JavaScript to dynamically show different sections based on user interactions (if needed)
        $(document).ready(function () {
            // You can add any custom scripts here to dynamically load data, charts, etc.
        });
    </script>
</body>

</html>
