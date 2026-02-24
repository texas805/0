<?php
// host
// username
//password
// db name
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'texas805');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
