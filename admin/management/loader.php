<?php
require("../functions.php");
$messages = $getMessages->getMessages();
if ($messages->num_rows == 0) {
    $message_count = 0;
    $text = "no new messages";
} else {
  $message_count = $messages->num_rows;
    $all_messages = json_encode($messages, true);
    foreach($messages as $message){
        $inbox = json_encode($message);
    }
}
