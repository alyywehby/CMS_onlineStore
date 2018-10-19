<div class="header">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Gadgets Garage Store</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="<?php if($activepage=='home'){echo 'active';} ?>"><a href="../../project/index.php">Home</a></li>
                <li class="<?php if($activepage=='aboutus'){echo 'active';} ?>"><a href="../../project/aboutus.php">About Us</a></li>
                <li class="<?php if($activepage=='contactus'){echo 'active';} ?>"><a href="../../project/contactus.php">Contact US</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Category1</a></li>
                        <li><a href="#">Category2</a></li>
                        <li><a href="#">Category3</a></li>
                    </ul>
                </li>

            </ul>
            <form class="navbar-form navbar-left" action="/action_page.php">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
            </ul>
        </div>
    </nav>
</div>