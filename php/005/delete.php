<?php
include "connect.php"; 
if ($_GET['deleteid']) {
    $id = $_GET['deleteid'];
    $delete = "DELETE FROM school WHERE id='$id'";
    $res = mysqli_query($conn,$delete);
    if ($res) {
        echo "<script>alert('Delete successful!');</script>";

        header("location:allusers.php");
    }
    else {
        die(mysqli_error($conn));
    }
    
}
    



?>