<?php
session_start();

echo $_SESSION['user_id'];
unset($_SESSION['user_id']);
unset($_SESSION['user_name']);
unset($_SESSION['email']);
unset($_SESSION['user_role']);

header("location: ./login.php");
exit;
?>