<?php
require_once("../functions.php");
session_start();
var_dump($getApartments->getAparts());
die;
echo $_SESSION['id'];
if (isset($_POST['addApartment'])) {
    $names = $_POST['names'];
    $_POST['location'];
    $_POST['apartment'];
    echo $getApartments->addApart();
}
