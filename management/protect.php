<?php 
session_start();
if(!isset($_SESSION['official'])){
header("location: login.php");
}