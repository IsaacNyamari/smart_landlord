<?php
require_once("../functions.php");
session_start();
$deleteApart = new Apartments;
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $apart_id = $_GET['apart_id'];
    $target = $_GET['target'];
    $owner = $_SESSION['id'];
    switch ($action) {
        case 'delete':
            switch ($target) {
                case 'apartment':
                    $deleteApart->deleteApart($apart_id, $owner);
                    
                    break;

                default:
                    # code...
                    break;
            }
            break;

        default:
            # code...
            break;
    }
}
