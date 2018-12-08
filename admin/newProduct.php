<?php
$activePage = 'addproduct';
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
<form class="form-horizontal" method="post" action="newProductAction.php" enctype="multipart/form-data">
    <fieldset>

        <!-- Form Name -->
        <legend>PRODUCTS</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>
            <div class="col-md-4">
                <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="required" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name_fr">PRODUCT DESCRIPTION</label>
            <div class="col-md-4">
<!--                <input id="product_description" name="product_description" placeholder="PRODUCT DESCRIPTION" class="form-control input-md" required="required" type="text">-->
                <textarea cols="30" rows="10" id="product_description" name="product_description" placeholder="PRODUCT DESCRIPTION" class="form-control input-md" required="required"></textarea>

            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
            <div class="col-md-4">
                <?php
                require_once ('config.php');
                $queryCategories = "SELECT * FROM categories";
                $resultDir = mysqli_query($link, $queryCategories);
                echo "<select name='Cat' id='product_categorie' required='required' class='form-control'>";
                while ($rowCat=mysqli_fetch_array($resultDir)){
                    echo "<option value='".$rowCat['categoryID']."'>".$rowCat['name']."</option>";
                }
                echo "</select>";
                ?>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="available_quantity">AVAILABLE QUANTITY</label>
            <div class="col-md-4">
                <input id="available_quantity" name="available_quantity" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="required" type="number" value="0" min="0" >

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="available_quantity">Price</label>
            <div class="col-md-4">
                <input id="available_quantity" name="unit_price" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="required" type="number" value="0" min="0">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="filebutton">Image</label>
            <div class="col-md-4">
                <input id="filebutton" name="image" class="input-file" type="file">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="filebutton"></label>
            <div class="col-md-4">
                <button type="submit">Add</button>
            </div>
        </div>


    </fieldset>
</form>

</body>

</html>