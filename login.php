<?php
require("admin/functions.php");
if (isset($_POST['login'])) {
    $email = $_POST['login_email'];
    $password = $_POST['login_password'];
    $getOwners->Login($email, $password);
}
