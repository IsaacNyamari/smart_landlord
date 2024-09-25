<?php
require("protect.php");
include("functions.php");
$email = $_SESSION['email'];
$owner = $getOwners->getOwner(trim($email));
$status = $owner['status'];