<?php
require_once ("config.php");
$Catname = $_POST["CategoryName"];

$query = "INSERT INTO categories (name) VALUES ('$Catname')";
$result = mysqli_query ($link,$query);

if(!$result)
    echo mysqli_error ($link);
else
    header("Location:categories.php");