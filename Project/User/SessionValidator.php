<?php
session_start();
if(!(isset($_SESSION['uid']) && !empty($_SESSION['uid']))){
    header("location: ../guest/login.php");
}