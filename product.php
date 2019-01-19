<?php
$activepage='product';
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
    <script>
        $(function () {
            $("#search").keyup(function () {
                $s = $(this).val();
                if($s == '')
                    $("#result").html('');
                else {
                    $.ajax({
                        url: 'searchAction.php',
                        data: {q: $s},
                        success: function (r) {
                            $("#result").html(r);
                        }
                    });
                }
            });
        });
    </script>
</head>

<body>

<?php include_once 'includers/header.php';?>

<?php
$id=$_GET["q"];
require 'config.php';
$query = "SELECT * FROM products WHERE productID=$id";
$result = mysqli_query($link,$query);
if(!$result)
    echo mysqli_error($link);
else{
    while ($row = mysqli_fetch_array($result)){
        echo "ProductName: <br>".$row["productName"];
        echo "<hr>";
        echo "ProductDescription: <br>".$row["productDescription"];
        echo "<hr>";
        echo "ProductPrice: <br>".$row["productPrice"];
        echo "<hr>";
        echo "ProductQuantity: <br>".$row["productQuantity"];
        echo "<hr>";
        echo "ProductImage: <br>";
        echo "<img src='admin/".$row["productImage"]."'>";
        echo "<hr>";
    }
}
?>

<?php include_once 'includers/footer.php';?>
</body>

</html>