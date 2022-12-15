<?php
include_once './Admin.php';
include_once './User.php';

$user = new User;
$user->type = new Admin;
echo $user->type->greet();