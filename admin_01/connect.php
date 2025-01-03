<?php

$conn = new mysqli("localhost","root","","alldata");

if ($conn) {
    // echo "connection successsfully";
}else {
    die(mysqli_error($conn));
}
?>