<?php
session_start();

// initializing variables
$name = "";
$email    = "";
$phone   = "";
$role    = "";
$location    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'digitaltimebook');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$idnum = mysqli_real_escape_string($db, $_POST['idnum']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$role = mysqli_real_escape_string($db, $_POST['role']);
	$location = mysqli_real_escape_string($db, $_POST['location']);
	$phone = mysqli_real_escape_string($db, $_POST['phone']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
	if (empty($name)) { array_push($errors, "Name is required"); }
	if (empty($idnum)) { array_push($errors, "Intern ID is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($role)) { array_push($errors, "Role is required"); }
	if (empty($location)) { array_push($errors, "Location is required"); }
	if (empty($phone)) { array_push($errors, "Phone is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM interns WHERE name='$name' OR email='$email' OR phone='$phone' OR idnum='$idnum' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['name'] === $name) {
      array_push($errors, "Name already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
		}
		
		if ($user['phone'] === $phone) {
      array_push($errors, "Phone Number already exists");
		}
		
		if ($user['idnum'] === $idnum) {
      array_push($errors, "ID Number already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO interns (name, email, idnum, role, location, phone) 
  			  VALUES('$name', '$email', '$idnum', '$role', '$location', '$phone')";
  	mysqli_query($db, $query);
  	$_SESSION['idnum'] = $idnum;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: attendance.php');
  }
}

// ... 

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $idnum = mysqli_real_escape_string($db, $_POST['idnum']);

  if (empty($idnum)) {
  	array_push($errors, "Inten ID is required");
  }

  if (count($errors) == 0) {
  	$idnum = md5($idnum);
  	$query = "SELECT * FROM interns WHERE name='$name' AND idnum='$idnum'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['idnum'] = $idnum;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: attendance.php');
  	}else {
  		array_push($errors, "Wrong Intern ID");
  	}
  }
}



//INTERN PASSWORD VALIDATION
if (isset($_POST['verify_intern'])) {
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($password)) {
  	array_push($errors, "Intern Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM password WHERE password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  // $_SESSION['password'] = $password;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: sign-up.php');
  	}else {
  		array_push($errors, "Wrong password...Try Again");
  	}
  }
}


// ?>