<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Service - Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Add New Service</h1>

        <form action="save_service.php" method="POST">
            <input type="text" name="service_name" placeholder="Service Name" required>
            <textarea name="service_description" rows="4" placeholder="Service Description" required></textarea>
            <input type="submit" value="Add Service">
        </form>
    </div>

</body>
</html>