<?php

session_start();

require_once('db.php');

// Validation
// Both username and password should not be empty

$username = $_POST['username'];
$password = md5( $_POST['password'] );

$sql = "select * from users where username = '$username' and password = '$password' Limit 1";

$result = $conn->query($sql);


if($result->num_rows){
    // login is valid
    echo 'Welcome to admin!<br>';
    $_SESSION['logindata'] = 'loggedin';

    echo $_SESSION['logindata'];
}
else{
    // login is invalid
    header("location: http://texas805/ecom/backend/login.php");
}