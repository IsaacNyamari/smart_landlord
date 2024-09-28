<?php
require_once("../functions.php");
session_start();
$acretakers = new Caretakers;
if (isset($_POST['addCaretaker'])) {
    $names = $_POST['names'];
    $owner = $_SESSION['id'];
    $phone = $_POST['phone'];
    $id_number = $_POST['id_number'];
    echo $acretakers->addCaretaker($owner,$names,$phone,$id_number);
}
