<?php
require_once("config.php");
if (isset($_POST['login'])) {
    $email = $_POST['login_email'];
    $password = $_POST['login_password'];
    $get_owner = "SELECT * FROM `owners` WHERE email = ?";
    $stmt = mysqli_prepare($conn, $get_owner);
    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user_data = mysqli_fetch_assoc($result);
    if (password_verify($password, $user_data['password'])) {
        session_start();
        $_SESSION["fname"] = $user_data['fname'];
        $_SESSION["lname"] = $user_data['lname'];
        $_SESSION["email"] = $user_data['email'];
        $_SESSION["owner"] = true;
        if ($user_data['status'] == 0) {
            header("Location:activate.php");
        } else {
            header("location:admin/");
        }
    }
}
