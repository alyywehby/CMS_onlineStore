<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- My Modified Stylesheet -->
    <link rel="stylesheet" href="../style/adminStyle.css" type="text/css">

    <title>Hoops Club :: Login</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row vertical-center">
            <div class="col-xs-3">
                <!--                Empty div to align the content in the center of the screen-->
            </div>
            <div class="col-xs-6 loginContent">
                <form action="main.php" method="post">
                    <div class="customImage">
                        <img src="../imgs/main%20logo%20new.png" alt="Gadgets Garage Logo" width="30%" height="30%">
                    </div>
                    <div class="form-group">
                        <label for="usr">Username:</label>
                        <input type="text" class="form-control" id="usr" placeholder="Enter username" name="usr">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-xs-3">
                <!--                Empty div to align the content in the center of the screen-->
            </div>
        </div>
    </div>
</body>
    <footer>
        <p>©gadgetsgarage.com | All rights reserved | Designed by </p>
    </footer>

</html>
