<?php
/**
 * Created by PhpStorm.
 * User: AliWehbi
 * Date: 11/13/2018
 * Time: 9:55 AM
 */
session_start();
if(isset($_SESSION["isLoggedIN"]) && $_SESSION["isLoggedIN"]){
echo "<span style='float: right; clear: both; margin-right: 20px; font-size: 25px;'>Welcome ".$_SESSION["name"]."</span>";
}
else{
    header("Location: login.php");
}