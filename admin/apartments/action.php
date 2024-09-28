<?php
require_once("../functions.php");
session_start();
if (isset($_POST['action'])) {
    $action = $_POST['action'];
    $apart_id = $_POST['apart_id'];
    $target = $_POST['target'];
    $owner = $_SESSION['id'];
    switch ($action) {
        case 'delete':
            switch ($target) {
                case 'apartment':
                    echo $deleteApart->deleteApart($apart_id, $owner);
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
