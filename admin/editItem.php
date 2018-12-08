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
<?php
// put your code here
require_once 'config.php';
$c = urldecode(base64_decode($_GET["q"]));
$query2 = "SELECT * FROM products WHERE productID=$c";
$result2 = mysqli_query($link, $query2);
if(!$result2)
    die(mysqli_error($link));
while($rowItem = mysqli_fetch_array($result2))
{
    $name = $rowItem["productName"];
    $desc = $rowItem["productDescription"];
    $price = $rowItem["productPrice"];
    $qty = $rowItem["productQuantity"];
    $cat = $rowItem["catID"];
}
?>
<form class="form-horizontal" method="post" action="editItemAction.php">
    <fieldset>

        <!-- Form Name -->
        <legend>PRODUCTS</legend>

        <input type="hidden" name="Code" value="<?php echo $c?>">
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>
            <div class="col-md-4">
                <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="required" type="text" value="<?php echo $name;?>">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name_fr">PRODUCT DESCRIPTION</label>
            <div class="col-md-4">
                <!--                <input id="product_description" name="product_description" placeholder="PRODUCT DESCRIPTION" class="form-control input-md" required="required" type="text">-->
                <textarea cols="30" rows="10" id="product_description" name="product_description" placeholder="PRODUCT DESCRIPTION" class="form-control input-md" required="required"><?php echo $desc;?></textarea>

            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
            <div class="col-md-4">
                <?php
                require_once ("config.php");
                $queryCategories = "SELECT * FROM categories";
                $resultCat = mysqli_query($link, $queryCategories);
                echo "<select name='Cat' id='product_categorie' required='required' class='form-control'>";
                while ($rowCat=mysqli_fetch_array($resultCat)){
                    $id = $rowCat["categoryID"]; $name = $rowCat["name"];
                    if($id == $cat)
                        echo "<option value='$id' selected> $name </option>";
                    else
                        echo "<option value='$id' > $name </option>";
                }
                echo "</select>";
                ?>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="available_quantity">AVAILABLE QUANTITY</label>
            <div class="col-md-4">
                <input id="available_quantity" name="available_quantity" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="required" type="number" value="<?php echo $qty;?>" min="0" >

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="available_quantity">Price</label>
            <div class="col-md-4">
                <input id="available_quantity" name="unit_price" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="required" type="number" value="<?php echo $price;?>" min="0" >

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="filebutton"></label>
            <div class="col-md-4">
                <button type="submit">Update</button>
            </div>
        </div>


    </fieldset>
</form>

</body>
</html>