<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Admin Panel - Farm Data</title>
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

        .farm-card {
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
        <a href="adminsetting.php" id="settings">Settings</a>
        <a href="logout.php" id="logout">Logout</a>
    </div>

    <!-- Main content -->
    <div class="content">
        <h2>Farm Data</h2>
        <p>Manage and view farm data such as crop details, growth stages, and more.</p>

        <!-- Crop Details Table -->
        <div class="card">
            <div class="card-header">
                <i class="fas fa-seedling"></i> Crop Details
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Crop Name</th>
                                <th>Planting Date</th>
                                <th>Growth Stage</th>
                                <th>Area (Ha)</th>
                                <th>Expected Harvest Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Wheat</td>
                                <td>2024-10-01</td>
                                <td>Vegetative</td>
                                <td>100</td>
                                <td>2025-04-01</td>
                            </tr>
                            <tr>
                                <td>Corn</td>
                                <td>2024-11-15</td>
                                <td>Flowering</td>
                                <td>150</td>
                                <td>2025-05-15</td>
                            </tr>
                            <tr>
                                <td>Rice</td>
                                <td>2024-12-01</td>
                                <td>Early Germination</td>
                                <td>80</td>
                                <td>2025-06-01</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Soil Conditions -->
        <div class="card mt-4">
            <div class="card-header">
                <i class="fas fa-cloud-sun-rain"></i> Soil Conditions
            </div>
            <div class="card-body">
                <p>Monitor soil moisture, pH levels, and other soil conditions that are critical for crop health.</p>
                <div class="row">
                    <!-- Soil Moisture -->
                    <div class="col-md-4">
                        <div class="card farm-card">
                            <div class="card-header">Soil Moisture</div>
                            <div class="card-body">
                                <p>Current Moisture Level: 75%</p>
                                <p>Optimal Range: 60-80%</p>
                            </div>
                        </div>
                    </div>

                    <!-- Soil pH -->
                    <div class="col-md-4">
                        <div class="card farm-card">
                            <div class="card-header">Soil pH</div>
                            <div class="card-body">
                                <p>Current pH Level: 6.8</p>
                                <p>Optimal Range: 6.0 - 7.0</p>
                            </div>
                        </div>
                    </div>

                    <!-- Nutrient Level -->
                    <div class="col-md-4">
                        <div class="card farm-card">
                            <div class="card-header">Soil Nutrients</div>
                            <div class="card-body">
                                <p>Current Nitrogen Level: 45 ppm</p>
                                <p>Optimal Range: 30-50 ppm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Irrigation Status -->
        <div class="card mt-4">
            <div class="card-header">
                <i class="fas fa-tint"></i> Irrigation System
            </div>
            <div class="card-body">
                <p>View the status of irrigation across different fields.</p>
                <div class="row">
                    <!-- Field 1 Irrigation -->
                    <div class="col-md-4">
                        <div class="card farm-card">
                            <div class="card-header">Field 1</div>
                            <div class="card-body">
                                <p>Status: Active</p>
                                <p>Last Watered: 2025-02-01</p>
                            </div>
                        </div>
                    </div>

                    <!-- Field 2 Irrigation -->
                    <div class="col-md-4">
                        <div class="card farm-card">
                            <div class="card-header">Field 2</div>
                            <div class="card-body">
                                <p>Status: Inactive</p>
                                <p>Last Watered: 2025-01-28</p>
                            </div>
                        </div>
                    </div>

                    <!-- Field 3 Irrigation -->
                    <div class="col-md-4">
                        <div class="card farm-card">
                            <div class="card-header">Field 3</div>
                            <div class="card-body">
                                <p>Status: Active</p>
                                <p>Last Watered: 2025-02-05</p>
                            </div>
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
