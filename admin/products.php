<?php
$activePage = 'products';
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
</head>

<body>

<?php include ('header.php')?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div style="padding: 10px;">
                <h2>Products</h2>
                <?php
                require_once ('config.php');
                $query = "SELECT * FROM `products` INNER JOIN categories on products.catID = categories.categoryID";

                $result = mysqli_query($link, $query);

                if(!$result)
                    echo mysqli_error($link);
                else{
                    echo '<table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Category</th>
                                <th>Edit Control</th>
                              </tr>
                            </thead>';
                    while ($row = mysqli_fetch_array($result)){
                        echo '<tbody>';
                        echo '<tr>';
                        echo "<td><img src='" . $row['productImage'] ."' width='150px'></td>";
                        echo "<td>" . $row['productName'] ."</td>";
                        echo "<td>" . $row['productDescription'] ."</td>";
                        echo "<td style='text-align: center;'>" . $row['productPrice'] ."$</td>";
                        if($row['productQuantity']>1){
                            $piece = ' Pieces';
                            echo "<td style='text-align: center;'>" . $row['productQuantity'] . $piece ."</td>";
                        }
                        else if($row['productQuantity']==1){
                            $piece = ' Piece';
                            echo "<td style='text-align: center;'>" . $row['productQuantity'] . $piece ."</td>";
                        }
                        else{
                            $piece='N/A';
                            echo "<td style='text-align: center;'>" . $piece ."</td>";
                        }

                        echo "<td style='text-align: center'>" . $row['name'] ."</td>";
                        $code = urlencode(base64_encode($row["productID"])) ;
                        echo "<td style='text-align: center'><a href='editItem.php?q=$code'><img src='imgs/icons/edit.png' style='width: 50px;'></a> </td>";
                        echo "</tr>";
                        echo "</tbody>";
                    }
                    echo "</table>";
                }
                ?>
            </div>
        </div>
    </div>
</div>

</body>

</html>