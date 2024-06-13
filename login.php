<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$valid_users = array("user1" => "pass1", "user2" => "pass2", "user3" => "pass3");

if (isset($valid_users[$username]) && $valid_users[$username] == $password) {
    $_SESSION["username"] = $username;
    header("Location: masuk.php");
    exit();
} else {
    echo "Username atau password salah";
}
?>
