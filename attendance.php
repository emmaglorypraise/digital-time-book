<?php 
  session_start(); 

  if (!isset($_SESSION['name'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: sign-up.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="the Roothub Port Harcourt Interns Digital Timer">
  <link href="./assets/css/bootstrap.css" rel="stylesheet" />
  <link href="./assets/css/attendance.css" rel="stylesheet" />
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
              <a class="nav-link active-link" href="about.html">Sign Attendance</a>
            </li>
            <li class="nav-item mx-lg-3">
              <a class="nav-link " href="about.html">See Attendance</a>
            </li>
            <li class="nav-item mx-lg-3">
              <a class="nav-link " href="about.html">About Us</a>
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
              <a class="nav-link active-link" href="about.html">Sign Attendance</a>
            </li>
            <li class="nav-item mx-lg-3">
              <a class="nav-link " href="about.html">See Attendance</a>
            </li>
            <li class="nav-item mx-lg-3">
              <a class="nav-link " href="about.html">About Us</a>
            </li>
          </ul>
        </div> 
      </div>
    </nav>
  </header>
  <main>
    <section id="intern-confirmation-page">
      <div class="container ">

      <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3 class="text-center text-success mt-3">
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

        <div class="row">
          <div class="col-md-12 mt-3">
            <h2>Sign Attendance</h2>
            <form action="" method="post">
              <div class="form-group ">
                <input type="text" value="MATTHEW ANDERSON" placeholder="Full name">
              </div>
              <div class="form-group ">
                <input type="text" value="INTERN" placeholder="Role">
              </div>
              <div class="form-group ">
                <input type="text" value="SARS ROAD,RUPORKU, PH" placeholder="Address">
              </div>
              <div class="sign">
                 <div class="row">
                  <div class="col-md-6">
                    <div class="">
                      <button>Sign Entry</button>
                      <p>In By:   <span>9:00am</span></p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="">
                      <button>Sign Exit</button>
                      <p>Out By:   <span>5:00pm</span></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button type="submit">Done</button>
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