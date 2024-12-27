<?php

$conn = new mysqli("localhost","root","","alldata");

if ($conn) {
    // header("location:.php");
    // echo "connection successfully";
}else {
     echo    '<script>
        alert(connection not successfull)";
        </script>';
}


?>