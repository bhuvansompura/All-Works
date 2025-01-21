<?php
  

  include "connection.php";

  $sql = "SELECT * FROM users";
  // $sql = "SELECT * FROM users where id=5";
  $res = mysqli_query($conn,$sql);
  $count = mysqli_num_rows($res);
  header('content-type:Application/json');
//   echo $count;
if ($count > 0 ) {
    while ($row=mysqli_fetch_assoc($res)) {
    $arr[]=$row;
    }
    echo json_encode(['status'=>'true','Data'=>$arr,'result'=>'found']);
}else {
    echo json_encode(['status'=>'true','Msg'=>'not found','result'=>'not']);
}

?>