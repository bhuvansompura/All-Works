<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="files" id="myfiles">
        <input type="submit" value="upload">
    </form>
    <?php
    
    // print_r($_FILES['files']);
    $filename = $_FILES['files']['name'];
    $tempname = $_FILES['files']['tmp_name'];
    $destination = ('upload/'.$filename);
    move_uploaded_file($tempname, $destination);
    
    ?>
</body>
</html>