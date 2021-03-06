<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="the Roothub Port Harcourt Interns Digital Timer">
  <link href="./assets/css/bootstrap.css" rel="stylesheet" />
  <link href="./assets/css/register.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title> Roothub Interns Digital Timing Book</title>
</head>

<body>
  <!-- Mobile view -->
  <header class="d-lg-none nav-mobile">
    <nav class="navbar navbar-expand-lg navbar-light py-4">
      <div class="container">
        <a class="navbar-brand " href="index.html">
          AM AN INTERN
        </a>
         <div class="navbar-toggler custom-hamburger-btn" type="button" data-toggle="collapse"
          data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
          aria-label="Toggle navigation">
          <div class="hamburger pt-2">
            <div class="line-1"></div>
            <div class="line-2"></div>
            <div class="line-3"></div>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-lg-3">
              <a class="nav-link active-link" href="about.html">About Us</a>
            </li>
          </ul>
        </div> 
      </div>
    </nav>

  </header>
  <!-- Desktop view -->
  <!--============ semantic html principles =================-->
  <header class="header d-none d-lg-block">
    <nav class="navbar navbar-expand-lg navbar-light py-4">
      <div class="container">
        <a class="navbar-brand " href="index.html">
          AM AN INTERN
        </a>
         <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-lg-3">
              <a class="nav-link active-link" href="#">About Us</a>
            </li>
          </ul>
        </div> 
      </div>
    </nav>
  </header>
  <main>
    <section id="intern-confirmation-page">
      <div class="container ">
        <div class="row">
          <div class="col-md-12">
            <h2>Create Intern Profile</h2>
            <form method="post" action="register.php">
              <?php include('errors.php'); ?>
              <div class="form-group ">
                <input type="text" placeholder="FULL NAME" name="name">
              </div>
              <div class="form-group ">
                <input type="text" placeholder="INTERN ID" name="idnum">
              </div>
              <div class="form-group ">
                <input type="text" placeholder="ROLE" name="role">
              </div>
              <div class="form-group ">
                <input type="number" placeholder="PHONE NUMBER" name="phone">
              </div>
              <div class="form-group ">
                <input type="email" placeholder="EMAIL" name="email">
              </div>
              <div class="form-group ">
                <input type="text" placeholder="ADDRESS" name="location">
              </div>
              <div class="radio">
                <label for="">Sex:
                </label>
                <label for=""><input type="radio" name="gender" value="male" checked="checked"> Male</label>
                <label for=""><input type="radio" name="gender" value="female" > Female</label>
              </div>
              <div class="form-group">
                <button name="reg_user">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>


  <script src="./assets/js/jquery.js"></script>
  <script src="./assets/js/popper.js"></script>
  <script src="./assets/js/bootstrap.js"></script>
  <script src="./assets/js/main.js"></script>

</body>

</html>