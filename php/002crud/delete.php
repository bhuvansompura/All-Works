<?php

include "conn.php";

if (isset($_GET['deleteid'])) {
  $id = $_GET['deleteid'];
  $sql = "DELETE FROM test01 WHERE id=$id";
  $res = mysqli_query($conn, $sql);
  if ($res) {
      // echo "deleted successfully";
    header("location:admin.php");
  }else{
      die(mysqli_error($conn));
  }
}


?>