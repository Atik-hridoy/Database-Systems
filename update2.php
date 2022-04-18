<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['mod']) && isset($_POST['eng'])  && isset($_POST['tra'])  && isset($_POST['mil']) && isset($_POST['map']) && isset($_POST['fue']) && isset($_POST['clo']) && isset($_POST['ava']) && isset($_POST['pri'])){
    // write the query to check if this username and password exists in our database
    $u = $_POST['mod'];
    $p = $_POST['eng'];
    $a = $_POST['tra'];
    $m = $_POST['mil'];
    $c = $_POST['map'];
    $s = $_POST['fue'];
    $n = $_POST['clo'];
    $i = $_POST['ava'];
    $g = $_POST['pri'];

    $sql = " INSERT INTO hyundaicreta VALUES( '$u', '$p',  '$a', '$m', '$c', '$s', '$n', '$i', '$g') ";

    //Execute the query 
    $result = mysqli_query($conn, $sql);

    //check if this insertion is happening in the database
    if(mysqli_affected_rows($conn)){

        //echo "Order Placed Successfully";
        header("Location: hyundaicreta.php");
    }
    else{
        echo "Insertion Failed";
        //header("Location: order_car.php");
    }

}


?>