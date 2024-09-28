<?php
require_once("../functions.php");
session_start();
$apartments = new Apartments;
if (isset($_POST['addApartment'])) {
    $name = $_POST['name'];
    $owner = $_SESSION['id'];
    $location = $_POST['location'];
    $rooms = $_POST['rooms'];
    $vacant = $_POST['vacant'];
    $caretaker = $_POST['caretaker'];
    echo $apartments->addApart($name, $location, $caretaker, $owner, $rooms, $vacant);
}
