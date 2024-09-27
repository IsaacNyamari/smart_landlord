<?php
require_once("../functions.php");
session_start();
var_dump($getApartments->getAparts());
die;
echo $_SESSION['id'];
if (isset($_POST['addTenant'])) {
    $names = $_POST['names'];
    $_POST['id_number'];
    $_POST['apartment'];
    echo $getTenants->addTenant($id_number, $names, $apartment, $landlord_id);
}
