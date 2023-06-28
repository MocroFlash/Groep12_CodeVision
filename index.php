<?php
session_start();

        include ("connection.php");

?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" type="text/css">

    <title>SkyHigh</title>
</head>
<body class="body-design">

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" >
        <img src="img/Logo.png" width="80" height="80" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="planner.php">Planner</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="shop.php">Shop</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <?php
            if (isset($_SESSION['user_id'])){
                echo' <li class="nav-item">
                <a class="nav-link" >'.$_SESSION['user_name']. '</a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="/logout">Logout</a>
            </li>';
            }else {
                echo '<li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>';
            }
            ?>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">submit</button>
        </form>
    </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://www.dutchcowboys.nl/uploads/headers/nk-zweefvliegen.jpg"
                 width="900" height="495" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h3>Vlieg met ons mee!</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://www.zweefvliegen.be/wp-content/uploads/2019/10/wave-flipped.jpg"
                 width="900" height="495" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h3>Vlieg met ons mee!</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://www.schellenberg.nl/frank/wp-content/uploads/2015/03/1primary.jpg" class="d-block w-100" height="495" width="900" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h3>Vlieg met ons mee!</h3>
            </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img src="img/foto2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Een keer proberen</p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img src="img/foto1.jpg" class="card-img-top" height="185" alt="">
                <div class="card-body">
                    <p class="card-text">Leeftijd</p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <a class="weatherwidget-io" href="https://forecast7.com/en/52d135d29/netherlands/" data-label_1="NETHERLANDS" data-label_2="WEATHER" data-theme="original" >NETHERLANDS WEATHER</a>
                <script>
                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');hei
                </script>
                <div class="card-body">
                    <p class="card-text">Weerbericht</p>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>


</body>
</html>