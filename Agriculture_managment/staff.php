<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Admin Panel - Staff</title>
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

        .staff-card {
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

        .staff-table td,
        .staff-table th {
            text-align: center;
        }

    </style>
</head>

<body>
    <!-- Sidebar -->
    <div id="sidebar">
        <h3 class="text-center">Agriculture Admin</h3>
        <a href="dashboard.html" id="dashboard">Dashboard</a>
        <a href="farm-data.html" id="farm-data">Farm Data</a>
        <a href="equipment.html" id="equipment">Equipment</a>
        <a href="staff.html" id="staff">Staff</a>
        <a href="reports.html" id="reports">Reports</a>
        <a href="settings.html" id="settings">Settings</a>
        <a href="logout.html" id="logout">Logout</a>
    </div>

    <!-- Main content -->
    <div class="content">
        <h2>Staff Management</h2>
        <p>Manage and view the details of farm staff.</p>

        <!-- Staff List Table -->
        <div class="card">
            <div class="card-header">
                <i class="fas fa-users"></i> Staff List
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered staff-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>Farm Manager</td>
                                <td>(123) 456-7890</td>
                                <td>123 Main St, City, Country</td>
                                <td>Active</td>
                                <td><button class="btn btn-warning btn-sm">View</button></td>
                            </tr>
                            <tr>
                                <td>Jane Smith</td>
                                <td>Field Worker</td>
                                <td>(321) 654-0987</td>
                                <td>456 Oak Ave, City, Country</td>
                                <td>Inactive</td>
                                <td><button class="btn btn-warning btn-sm">View</button></td>
                            </tr>
                            <tr>
                                <td>Sam Green</td>
                                <td>Maintenance Technician</td>
                                <td>(555) 123-4567</td>
                                <td>789 Pine Rd, City, Country</td>
                                <td>Active</td>
                                <td><button class="btn btn-warning btn-sm">View</button></td>
                            </tr>
                            <tr>
                                <td>Amy Lee</td>
                                <td>Field Supervisor</td>
                                <td>(666) 987-6543</td>
                                <td>101 Maple Blvd, City, Country</td>
                                <td>Active</td>
                                <td><button class="btn btn-warning btn-sm">View</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Staff Status Overview -->
        <div class="card mt-4">
            <div class="card-header">
                <i class="fas fa-users-cog"></i> Staff Status Overview
            </div>
            <div class="card-body">
                <p>Monitor the overall status of farm staff, including the number of active and inactive employees.</p>
                <div class="row">
                    <!-- Total Staff -->
                    <div class="col-md-4">
                        <div class="card staff-card">
                            <div class="card-header">Total Staff</div>
                            <div class="card-body">
                                <p>Total Staff: 50</p>
                            </div>
                        </div>
                    </div>

                    <!-- Active Staff -->
                    <div class="col-md-4">
                        <div class="card staff-card">
                            <div class="card-header">Active Staff</div>
                            <div class="card-body">
                                <p>Active: 38</p>
                            </div>
                        </div>
                    </div>

                    <!-- Inactive Staff -->
                    <div class="col-md-4">
                        <div class="card staff-card">
                            <div class="card-header">Inactive Staff</div>
                            <div class="card-body">
                                <p>Inactive: 12</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add New Staff -->
        <div class="card mt-4">
            <div class="card-header">
                <i class="fas fa-user-plus"></i> Add New Staff
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="staff-name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="staff-name" placeholder="Enter name">
                    </div>
                    <div class="mb-3">
                        <label for="staff-position" class="form-label">Position</label>
                        <input type="text" class="form-control" id="staff-position" placeholder="Enter position">
                    </div>
                    <div class="mb-3">
                        <label for="staff-contact" class="form-label">Contact</label>
                        <input type="text" class="form-control" id="staff-contact" placeholder="Enter contact number">
                    </div>
                    <div class="mb-3">
                        <label for="staff-address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="staff-address" placeholder="Enter address">
                    </div>
                    <div class="mb-3">
                        <label for="staff-status" class="form-label">Status</label>
                        <select class="form-select" id="staff-status">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Staff</button>
                </form>
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
