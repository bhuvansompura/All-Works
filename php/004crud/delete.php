<?php

include "connect.php";

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $delete = "DELETE FROM crud WHERE id='$id'";
    $result = mysqli_query($conn,$delete);
    if ($result) {
        // echo "delete successfully";
        header("location:alluser.php");
    }
}


?>