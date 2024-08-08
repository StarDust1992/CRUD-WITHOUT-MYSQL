<?php
session_start();
require("controller/app.php");

$view_bag = [
    'status' => ''
];

$email = "";
$password = "";

if (is_post()) {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password']; // Remove sanitize() function call

    if (authenticate_user($email, $password)) {
        $_SESSION['email'] = $email;
        redirect('admin/index.php');
    }

}

view('login');