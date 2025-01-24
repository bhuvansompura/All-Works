<!-- basic api  -->

<?php

$url = "http://localhost/all-works/Api/api01/";
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);
$result = json_decode($result,true);
// echo '<pre>';
// print_r($result);
if (isset($result['status'])) {
    if ($result['status']==true) {
        if (isset($result['result'])) {
            if ($result['result']==true) {
            //  echo '<pre>';
            //  print_r($result['Data']);
            ?>
          <table>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
            </tr>
            <?php
            foreach ($result['Data'] as $list) {
                echo 
                "<tr>
                 <td>".$list['id']."</td> 
                <td>".$list['name']."</td>
                <td>".$list['email']."</td>
                
                </tr>";
            }
            ?>
          </table>
            <?php
            }else {
                echo $result['Data'];
            }
        }
    }else {
        echo $result['Data'];
        
    }
}else {
    echo "Api not working";
}

?>