<?php


if ($_POST['id'] == "user") {

    if ($_POST['password'] == '123') {
        echo "login successfully";
    }else {
        echo "no entry";
    }
}else {
    echo "no entry";
}


?>