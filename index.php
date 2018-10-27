<?php
$activepage='home';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>GadgetsGarage :: Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--Design-->
    <link rel="stylesheet" href="style/style.css" type="text/css">
</head>

<body>

    <?php include_once 'includers/header.php';?>

    <div class="container-fluid">
        <div class="row">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <!--Image Size 1200px*400px-->
                        <img src="https://wpblink.com/sites/default/files/wallpaper/sports/73637/david-silva-wallpapers-hd-73637-4298222.png" alt="Chania" style="width: 100%">
                        <div class="carousel-caption">
                            <h3>First Image</h3>
                            <p>Description Here</p>
                        </div>
                    </div>

                    <div class="item">
                        <!--Image Size 1200px*400px-->
                        <img src="https://wpblink.com/sites/default/files/wallpaper/sports/73637/david-silva-wallpapers-hd-73637-4298222.png" alt="Chicago" style="width: 100%">
                        <div class="carousel-caption">
                            <h3>Second Image</h3>
                            <p>Description Here</p>
                        </div>
                    </div>

                    <div class="item">
                        <!--Image Size 1200px*400px-->
                        <img src="https://wpblink.com/sites/default/files/wallpaper/sports/73637/david-silva-wallpapers-hd-73637-4298222.png" alt="New York" style="width: 100%">
                        <div class="carousel-caption">
                            <h3>Third Image</h3>
                            <p>Description Here</p>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="row product-list">
            <div class="col-sm-12">
                <h3 style="border-bottom: 1px solid #ddd; padding-bottom: 5px;">Latest Product</h3>
            </div>
            <?php require_once 'config.php';
            $query = "SELECT * FROM `products` order by productID DESC LIMIT 20";

            $result = mysqli_query($link, $query);

            if(!$result)
                echo mysqli_error($link);
            else{
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
            ?>
        </div>
    </div>

    <?php include_once 'includers/footer.php';?>
</body>

</html>