<?php
require("../admin/functions.php");
$messages = $getMessages->getMessages();
if ($messages->num_rows == 0) {
    if (isset($_POST['count'])) {
        $message_count = 0;
        $text = "no new messages";
        echo json_encode([
            "count" => $message_count,
            "text" => $text
        ]);
    }
} else {
    $message_count = $messages->num_rows;
    echo json_encode([
        "count" => $message_count
    ]);
    $all_messages = json_encode($messages, true);
    foreach ($messages as $message) {
        $inbox = json_encode($message);
    }
}
