<?php
/**
 * Created by PhpStorm.
 * User: AliWehbi
 * Date: 12/18/2018
 * Time: 10:03 AM
 */
$txt = $_GET["q"];
require 'config.php';

$query = "SELECT * FROM products WHERE productName LIKE '$txt%'";
$result = mysqli_query($link,$query);

if(!$result)
    echo "<p>No Data</p>";
else{
    while ($row = mysqli_fetch_array($result)){
        $id = $row["productID"];
        echo "<a href='product.php?q=$id'>".$row["productName"]."</a><br>";
        echo "<hr>";
    }
}