<?php

$conn = new mysqli("localhost","root","","alldata");
 
if ($conn) {
    // echo "connection successfully";
}else {
    die(mysqli_error($conn));
}

?>