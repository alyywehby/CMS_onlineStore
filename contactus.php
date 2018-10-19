<?php
$activepage='contactus';
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
    <link rel="stylesheet" href="style/style.css" type="text/css">
</head>

<body>

<?php include_once 'includers/header.php';?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9" style="height: 500px; background-color: aqua">
            <h1>ContactUs Page Col-xs-9</h1>
        </div>

        <div class="col-md-3" style="height: 500px; background-color: blue">
            <h1>ContactUs Page Col-xs-3</h1>
        </div>
    </div>
</div>

<?php include_once 'includers/footer.php';?>
</body>

</html>