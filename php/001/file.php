<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfiles" id="myfiles">
        <input type="submit" name="upload" value="submit">
    </form>


    <?php
    // print_r($_FILES['myfiles']);
  $filename = $_FILES['myfiles']['name'];
 $tempname = $_FILES['myfiles']['tmp_name'];
$destination = ('upload/'.$filename);
move_uploaded_file($tempname, $destination);


// move_uploaded_file($_FILES['myfiles']['tmp_name'], 'upload/'.$_FILES['myfiles']['name']);
    ?>
</body>

</html>