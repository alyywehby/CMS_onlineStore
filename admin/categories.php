<?php
$activePage = 'categories';
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
        <div class="col-sm-6">
            <div style="padding: 10px;">
                <h2>Categories</h2>
                <?php
                require_once ('config.php');
                $query = "SELECT * FROM `categories`";

                $result = mysqli_query($link, $query);

                if(!$result)
                    echo mysqli_error($link);
                else{
                    echo '<table class="table table-bordered">
    <thead>
      <tr>
        <th>Category ID</th>
        <th>Category Name</th>
      </tr>
    </thead>';
                    while ($row = mysqli_fetch_array($result)){
                        echo '<tbody>';
                        echo '<tr>';
                        echo "<td>000" . $row['categoryID'] ."</td>";
                        echo "<td>" . $row['name'] ."</td>";
                        echo "</tr>";
                        echo "</tbody>";
                    }
                    echo "</table>";
                }
                ?>
            </div>
        </div>

        <div class="col-sm-6">
            <div style="padding: 10px;">
                <h2>Add Category</h2>
                <form method="post" action="newCategory.php">
                    <div class="form-group" style="padding: 10px;border-left: 1px black solid; min-height: 300px">
                        <label for="usr">Category Name:</label>
                        <input type="text" class="form-control" id="" name="CategoryName">
                        <button type="submit" class="btn btn-default" style="margin-top: 10px">Add</button>
                        <button type="reset" class="btn btn-default" style="margin-top: 10px">Clear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

</html>