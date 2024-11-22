<?php
require "../admin/functions.php";
$names = isset($_POST['full_names']) ? $_POST['full_names'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$message = isset($_POST['message']) ? $_POST['message'] : null;

if ($names !== null && $email !== null && $message !== null) {
     $addMessage->sendMessage($names, $email, $message);
}
