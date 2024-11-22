<?php
require_once("../functions.php");
session_start();
$deleteApart = new Apartments;
$deleteCaretaker = new Caretakers;
$deleteTenant = new Tenants;
if (isset($_GET['action'])) {
    $action = isset($_GET['action']) ? $_GET['action'] : null;
    $apart_id = isset($_GET['apart_id']) ? $_GET['apart_id'] : null;
    $caretaker_id = isset($_GET['caretaker_id']) ? $_GET['caretaker_id'] : null;
    $tenant_id = isset($_GET['tenant_id']) ? $_GET['tenant_id'] : null;
    $target = $_GET['target'];
    $owner = $_SESSION['id'];
    switch ($action) {
        case 'delete':
            switch ($target) {
                case 'apartment':
                    $deleteApart->deleteApart($apart_id, $owner);
                    break;
                case 'caretaker':
                    $deleteCaretaker->deleteCaretaker($caretaker_id, $owner);
                    break;
                case 'tenant':
                    $deleteTenant->deleteTenant($tenant_id, $owner);
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
