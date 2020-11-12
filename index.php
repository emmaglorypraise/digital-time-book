<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="the Roothub Port Harcourt Interns Digital Timer">
  <link href="./assets/css/bootstrap.css" rel="stylesheet" />
  <link href="./assets/css/style.css" rel="stylesheet" />
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
      </div>
    </nav>
  </header>
  <main>
    <section id="intern-confirmation-page">
      <div class="container ">
        <div class="row">
          <div class="col-md-12">
            <form method="post" action="index.php">
            <?php include('errors.php'); ?>
              <div class="form-group ">
                <input type="text" name="intern-password" placeholder="e.g 0123456789" required>
                <button name="verify_intern">Submit</button>
                <h3>INPUT YOUR INTERN PASSWORD</h3>
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