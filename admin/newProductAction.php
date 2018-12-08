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
$image = $_FILES["image"]["name"];
//upload the image
move_uploaded_file($_FILES["image"]["tmp_name"], "imgs/products/$image");
$query="INSERT INTO products (productName, productDescription, productPrice, productQuantity, productImage, catID) VALUES ('$pname', '$pdesc', $price, $qty, 'imgs/products/$image',$cat)";

$result = mysqli_query($link, $query);

if(!$result)
    echo mysqli_error ($link);
else
    header("Location:products.php");