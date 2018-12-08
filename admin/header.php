<?php
$activePage;
?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="dashboard.php">Admin Panel</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="<?php if ($activePage == 'dashboard') echo 'active'?>"><a href="dashboard.php">Dashboard</a></li>
            <li class="<?php if ($activePage == 'categories') echo 'active'?>"><a href="categories.php">Categories</a></li>
            <li class="<?php if ($activePage == 'products') echo 'active'?>"><a href="products.php">Products</a></li>
            <li class="<?php if ($activePage == 'addproduct') echo 'active'?>"><a href="newProduct.php">Add Product</a></li>
            <li class="<?php if ($activePage == 'sales') echo 'active'?>"><a href="sales.php">Sales</a></li>
            <li class="<?php if ($activePage == 'customers') echo 'active'?>"><a href="customers.php">Customers</a></li>
            <li class="<?php if ($activePage == 'report') echo 'active'?>"><a href="report.php">Report Bug</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </div>
</nav>

<?php
include_once ("loginvalidation.php");
?>