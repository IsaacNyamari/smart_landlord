<?php
session_start();
require("functions.php");
$subscription = $getOwners->getTrialPeriod("jablessions76@gmail.com");
if(!isset($_SESSION['owner'])){
    header("location:../session");
}
if($subscription == 0){
    header("location:subscribe.php");
}