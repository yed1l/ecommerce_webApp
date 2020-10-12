<!DOCTYPE html>
    <head>
        <title>Settings | Life Style Store</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="index.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cart.blade.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                        <li><a href="settings.blade.php"><span class="glyphicon glyphicon-user"></span> Settings </a></li>
                        <li><a href="logout.html"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container settings">
            <div class="row">
                <div class="col-xs-4"></div>
                <div class="col-xs-4 form">
                    <h1 class="password"> Change Password </h1>
                    <form>
                        <div class="form-group">
                                <input class="form-control" placeholder="Old Password" type="password" name="oldpassword" required="true">

                                <br>

                                <input class="form-control" placeholder="New Password" type="password" name="newpassword">

                                <br>

                                <input class="form-control" placeholder="Re-type New Password" type="password" name="retypenewpassword" required="true">

                                <br>

                    <button class="btn btn-primary" type="submit">Change</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer>
                <div class="container">
                    <center>
                     <p>Copyright © Lifestyle Store. All Rights
                    Reserved | Contact Us: +91 90000 00000”. </p>
                    </center>
                </div>
        </footer>
    </body>
</html>
