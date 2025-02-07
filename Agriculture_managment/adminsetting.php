<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Admin Panel - Settings</title>
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
        <h2>Settings</h2>
        <p>Configure system settings and preferences below.</p>

        <!-- System Settings -->
        <div class="card">
            <div class="card-header">
                <i class="fas fa-cogs"></i> System Configuration
            </div>
            <div class="card-body">
                <form>
                    <!-- System Name -->
                    <div class="mb-3">
                        <label for="system-name" class="form-label">System Name</label>
                        <input type="text" class="form-control" id="system-name" value="Agriculture Admin">
                    </div>
                    
                    <!-- Timezone -->
                    <div class="mb-3">
                        <label for="timezone" class="form-label">Timezone</label>
                        <select class="form-select" id="timezone">
                            <option value="UTC">UTC</option>
                            <option value="PST">Pacific Standard Time</option>
                            <option value="EST">Eastern Standard Time</option>
                            <option value="CST">Central Standard Time</option>
                        </select>
                    </div>
                    
                    <!-- Language -->
                    <div class="mb-3">
                        <label for="language" class="form-label">Language</label>
                        <select class="form-select" id="language">
                            <option value="en">English</option>
                            <option value="es">Spanish</option>
                            <option value="fr">French</option>
                            <option value="de">German</option>
                        </select>
                    </div>

                    <!-- Email Notifications -->
                    <div class="mb-3">
                        <label class="form-label">Email Notifications</label><br>
                        <input type="checkbox" id="email-notifications"> Enable Email Notifications
                    </div>

                    <!-- Save Button -->
                    <button type="submit" class="btn btn-primary">Save Settings</button>
                </form>
            </div>
        </div>

        <!-- Admin Access Settings -->
        <div class="card mt-4">
            <div class="card-header">
                <i class="fas fa-user-lock"></i> Admin Access Management
            </div>
            <div class="card-body">
                <form>
                    <!-- Admin Username -->
                    <div class="mb-3">
                        <label for="admin-username" class="form-label">Admin Username</label>
                        <input type="text" class="form-control" id="admin-username" value="admin">
                    </div>

                    <!-- Admin Password -->
                    <div class="mb-3">
                        <label for="admin-password" class="form-label">Admin Password</label>
                        <input type="password" class="form-control" id="admin-password" value="password123">
                    </div>

                    <!-- Change Password -->
                    <div class="mb-3">
                        <label for="new-password" class="form-label">Change Password</label>
                        <input type="password" class="form-control" id="new-password" placeholder="New Password">
                    </div>

                    <!-- Save Changes -->
                    <button type="submit" class="btn btn-warning">Save Changes</button>
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
        // JavaScript to handle the form submissions and notifications
        $(document).ready(function () {
            $('form').on('submit', function (e) {
                e.preventDefault();
                alert('Settings have been saved!');
            });
        });
    </script>
</body>

</html>
