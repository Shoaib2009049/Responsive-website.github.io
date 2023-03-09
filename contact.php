

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/dashboard.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <title>Contact Raman Stationary</title>
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
          <a class="nav-link dropdown-toggle" href="services.php" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Services
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="services.php">Stationary</a>
            <a class="dropdown-item" href="services.php">Xerox</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="services1.php">Something else here</a>
          </div>
        </li>
        <li class="nav-item active">
          
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
        <hr>
    <h3>Contact Us for any Query</h3>
    <hr>
        <form id="signin-form" class="form" role="form" method="post" action="api/signin_submit.php">

                <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" name ="name" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="reason_for_contacting">Reason For Contacting</label>
                          <input type="text" class="form-control" name ="reason_for_contacting" placeholder="Reason For Contacting">
                        </div>
                      </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name ="email" placeholder="Email">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control"name ="password" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" name ="address" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                  <label for="address2">Address 2</label>
                  <input type="text" class="form-control" name ="address2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="city">City</label>
                    <input type="text" class="form-control" name ="city">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="state">State</label>
                    <select type = "text" class="form-control" name ="state">
                      <option selected>Choose...
                       </option>
                        <option value="Andhra Pradesh	Amaravati">1.Andhra Pradesh	Amaravati</option>
                          <option value=" Arunachal Pradesh	Itanagar">2.Arunachal Pradesh	Itanagar</option>
                          <option value= "Assam	Dispur">3.Assam	Dispur</option>	
                          <option value="Bihar	Patna	">4.Bihar	Patna	</option>
                         <option value=" Chhattisgarh	Raipur">5.Chhattisgarh	Raipur</option>
                         <option value="Delhi">6.Delhi</option>
                         <option value=" Goa	Panaji">7.Goa	Panaji</option>
                         <option value="	Gujarat	Gandhinagar">8.Gujarat	Gandhinagar</option>
                         <option value="	Haryana	Chandigarh">9.Haryana	Chandigarh</option>
                         <option value="	Himachal Pradesh	Shimla">10.Himachal Pradesh	Shimla</option>
                         <option value="	Jammu and Kashmir	"> 11.Jammu and Kashmir   </option>
                         <option value="	Jharkhand	Ranchi ">12.Jharkhand Ranchi </option>
                         <option value="	Karnataka	Bengaluru ">13.Karnataka	Bengaluru </option></option>
                         <option value="	Kerala	Thiruvananthapuram">14. Kerala	Thiruvananthapuram </option>
                         <option value="	Madhya Pradesh	Bhopal ">15.Madhya Pradesh	Bhopal    </option>
                         <option value="	Maharashtra	Mumbai">16. Maharashtra	Mumbai</option>
                         <option value="	Manipur	Imphal">17.Manipur	Imphal </option>
                         <option value="	Meghalaya	Shillong">18.Meghalaya	Shillong </option>
                         <option value="	Mizoram	Aizawl">19.Mizoram	Aizawl </option>
                         <option value="	Nagaland	Kohima">20.Nagaland	Kohima </option>
                         <option value="	Odisha	Bhubaneswar">21.Odisha	Bhubaneswar </option>
                         <option value="	Punjab	Chandigarh">22. Punjab	Chandigarh</option>
                         <option value="	Rajasthan	Jaipur">23.Rajasthan	Jaipur </option>
                         <option value="	Sikkim	Gangtok"> 24.Sikkim	Gangtok</option>
                         <option value="	Tamil Nadu	Chennai">25.Tamil Nadu	Chennai</option>
                         <option value="	Telangana	Hyderabad">26.Telangana	Hyderabad </option>
                         <option value="	Tripura Agartala">27.Tripura Agartala </option>
                         <option value="	Uttar Pradesh	Lucknow">28.Uttar Pradesh	Lucknow </option>
                         <option value="	Uttarakhand	Dehradun">29. Uttarakhand	Dehradun</option>
                         <option value="	West Bengal	Kolkata">30. West Bengal	Kolkata</option>

                      </select>
                      <option></option>                          
            
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="zip">Zip</label>
                    <input type="text" class="form-control" name ="zip">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Sign in</button>
              </form>
                
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
</body>
<?php
include  "includes/footer.php";
?>
</html>
