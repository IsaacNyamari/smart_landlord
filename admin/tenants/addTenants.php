<?php
require_once("../functions.php");
session_start();
$tenants = new Tenants;
if (isset($_POST['addTenant'])) {
    $landlord_id = $_SESSION['id'];
    $names = $_POST['names'];
    $phone = $_POST['phone'];
    $apartment = $_POST['apartment'];
    $id_number = $_POST['id_number'];
    echo $tenants->addTenant($id_number,$names,$phone,$apartment,$landlord_id);
}
