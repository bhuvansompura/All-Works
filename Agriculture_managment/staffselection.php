<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Admin Panel - Add New Staff</title>
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
        <h2>Add New Staff</h2>
        <p>Fill in the details below to add a new staff member.</p>

        <!-- Staff Selection Form -->
        <div class="card">
            <div class="card-header">
                <i class="fas fa-user-plus"></i> New Staff Form
            </div>
            <div class="card-body">
                <form  method="POST">
                    <div class="mb-3">
                        <label for="staff-name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="staff-name" name="staff_name" placeholder="Enter staff name" required>
                    </div>
                    <div class="mb-3">
                        <label for="staff-position" class="form-label">Position</label>
                        <input type="text" class="form-control" id="staff-position" name="staff_position" placeholder="Enter staff position" required>
                    </div>
                    <div class="mb-3">
                        <label for="staff-contact" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="staff-contact" name="staff_contact" placeholder="Enter staff contact number" required>
                    </div>
                    <div class="mb-3">
                        <label for="staff-address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="staff-address" name="staff_address" placeholder="Enter staff address" required>
                    </div>
                    <div class="mb-3">
                        <label for="staff-status" class="form-label">Status</label>
                        <select class="form-select" id="staff-status" name="staff_status" required>
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
        // Custom JavaScript can be added here to dynamically validate or handle form submissions.
        $(document).ready(function () {
            // Add any specific script needed for form submission or validation
        });
    </script>
</body>

</html>
