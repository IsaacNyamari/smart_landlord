<?php
require_once('admin/functions.php');
if (isset($_POST['register'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo $getOwners->addOwner($fname,$lname,$email,$password);
}
