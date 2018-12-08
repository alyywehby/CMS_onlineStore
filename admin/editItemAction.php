<?php
/**
 * Created by PhpStorm.
 * User: AliWehbi
 * Date: 12/1/2018
 * Time: 2:03 PM
 */
require_once ("config.php");
//require 'validatelogin.php';
$pname = $_POST["product_name"];
$pdesc = $_POST["product_description"];
$cat = $_POST["Cat"];
$qty = $_POST["available_quantity"];
$price = $_POST["unit_price"];
$itemToEdit = $_POST["Code"];

$query = "UPDATE products SET productName = '$pname',productDescription='$pdesc' ,productPrice=$price, productQuantity='$qty', CatID = $cat WHERE productID = $itemToEdit";

$result = mysqli_query($link, $query);

if(!$result)
    echo mysqli_error ($link);
else
    header("Location:products.php");