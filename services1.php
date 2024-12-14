<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xerox codeucs</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Raman Stationary</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          
          <a class="nav-link" href="about.php">About</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="services.html" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Services
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="services.php">Stationary</a>
            </div>
            <a class="dropdown-item" href="services1.php">Xerox</a>
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
  </nav>
  <div class="container mt-3">
    <h2> Welcome To Xerox Container area </h2>
    <div class="row justify-content-center">
      <div class="card mx-4" style="width: 18rem;">
          <img src="home1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
              <h5 class="card-title">Stationary is full equipped with latest things</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              <a href="https://www.amazon.in/Stationery-Items-for-School/s?k=Stationery+Items+for+School" class="btn btn-primary">Go somewhere</a>
          </div>
      </div>
      <div class="card mx-4" style="width: 18rem;">
        <img src="home2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">4 Branches In Delhi</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
            <a href="https://www.justdial.com/Lucknow/Raman-Stationery-Near-Law-College-Aashiyana/0522PX522-X522-151014181214-V2E1_BZDET"
                class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
      <div id="property-images" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#property-images" data-slide-to="0" class="active"></li>
          <li data-target="#property-images" data-slide-to="1" class=""></li>
          <li data-target="#property-images" data-slide-to="2" class=""></li>
      </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="home3.jpg" class="d-block w-100" alt="slide">
          </div>
          <div class="carousel-item">
            <img src="home2.jpg" class="d-block w-100" alt="slide">
          </div>
          <div class="carousel-item">
            <img src="home1.jpg" class="d-block w-100" alt="slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#property-images" role="button"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next"href="#property-images" role="button" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        
      </div>
    </nav>
  </div>
</body>
  <?php
include  "includes/footer.php";
?>
</html>