 <?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--<link href="css/common.css" rel="stylesheet" type="text/css"/>-->
<link href="css/dashboard.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <title>Welcome to Raman Stationary</title>
</head>

<body>
    <!-- our code starts here -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Raman Stationary</a>
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

                    <a class="nav-link" href="about.php">About</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="services.php" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="services.php">Stationary</a>
                        <a class="dropdown-item" href="services.php">Xerox</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="services.php">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">

                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <?php
include  "includes/login_modal.php";
include  "includes/forgot_password_modal.php";
?>
        <!-- for login Page code-->
        
    </nav>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Semester End Sale!</strong> You can now print your thesis for only Rs 200.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>

    <div class="container-fluid mt-3">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to Raman Stationary!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention
                to
                featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg"
                href="https://www.google.com/maps/place/SitaRam+Stationers/@28.6581009,77.2124626,12.5z/data=!4m8!1m2!2m1!1sstationery+delhi!3m4!1s0x390cfd309eebec89:0x25106b00b8ccb6b3!8m2!3d28.5684963!4d77.2430644"
                target="_blank" role="button">View On Google Maps</a>
        </div>



    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="home2.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" />
                <h2>Buy Crayons in Delhi</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                    mauris
                    condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                    euismod.
                    Donec sed odio dui. </p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div>
            <div class="col-md-4 text-center">
                <img src="home1.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" />
                <h2>Buy Classmate Books</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                    mauris
                    condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                    euismod.
                    Donec sed odio dui. </p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div>
            <div class="col-md-4 text-center">
                <img src="home3.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" />
                <h2>Get Your Books Printed</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                    porta
                    felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                    fermentum
                    massa justo sit amet risus.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div>
        </div>

    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/dashboard.js"></script>
</body>
<?php
include  "includes/footer.php";
?>
</html>