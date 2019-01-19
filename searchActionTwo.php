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
    echo "<h3 style='border-bottom: 1px solid #ddd; padding-bottom: 5px;'>Latest Search</h3>";
    while ($row = mysqli_fetch_array($result)){
        echo "<div class='col-sm-2 product'>
                <div class='product-details'>
                    <div class='img-thumbnail'>
                        <a href='admin/" . $row['productImage'] . "'><img src='admin/" . $row['productImage'] . "'alt='' width='100%'></a>
                    </div>
                    <div class='product-name'>
                        <a href='#' title='" . $row['productName'] . "'><h4>" . $row['productName'] . "</h4></a>
                    </div>
                    <div class='product-price'>
                        <p>" . $row['productPrice'] . "$</p>
                    </div>
                    <div class='product-add-to-cart'>
                        <a href='#' onclick=''><span class='glyphicon glyphicon-shopping-cart'></span> Add To Cart</a>
                    </div>
                </div>
            </div>";

    }
}