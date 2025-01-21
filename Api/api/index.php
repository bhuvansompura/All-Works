<?php

$url = "http://localhost/all-works/Api/api01/";
// $url = "http://localhost/all-works/admin_03/allusers.php";
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);
$result = json_decode($result,true);
echo '<pre>';
print_r($result);


?>