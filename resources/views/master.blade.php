<!DOCTYPE html>
<head>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/index.css" rel="stylesheet" type="text/css"/>
    <style>

    </style>
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
            <a class="navbar-brand" href="/">Lifestyle Store</a>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav nav-pills nav navbar-nav navbar-left">

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
                    <div class="dropdown-menu">
                        <a href="#" class= "dropdown-item">Smartphone</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Laptops</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Headphones</a>

                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="signup.blade.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                @auth()
                <li><a href="cart.blade.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                <li><a href="settings.blade.php"><span class="glyphicon glyphicon-user"></span> Settings </a></li>
                <li><a href="logout.html"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
                    @endauth
            </ul>
        </div>
    </div>
</nav>

@yield('content')

    <footer>
        <div class="container">
            <center>
                <p>Copyright © Lifestyle Store. All Rights
                    Reserved | Contact Us: +91 90000 00000”. </p>
            </center>
        </div>
    </footer>
</div>
</body>
</html>
