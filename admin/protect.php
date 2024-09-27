<?php
session_start();
if (!isset($_SESSION['owner'])) {
    header("location:../session");
} else if ($subscription = 0) {
    header("location:subscribe.php");
}