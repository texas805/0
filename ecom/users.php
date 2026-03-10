<?php


require_once 'backend/functions.php';
require_once 'backend/User.php';

use Texas\Backend\User;

$users = User::get_all();

echo $users;

echo '<hr>';

$users_arr = json_decode($users, true);

echo '<pre>';
print_r($users_arr);
echo '</pre>';