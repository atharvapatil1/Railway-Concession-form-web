<?php
session_start();

// initializing variables
$username = "";
$FName = "";
$LName = "";
$subject = "";
$email    = "";
$address  = "";
$route    = "";
$selected_gender="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }


  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: connform.php');
  }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: connform.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

  // CONNFORM
  if (isset($_POST['con_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $address    = mysqli_real_escape_string($db, $_POST['address']);
  $route    = mysqli_real_escape_string($db, $_POST['route']);
  $selected_gender    = mysqli_real_escape_string($db, $_POST['selected_gender']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "College ID number is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two College ID number do not match");
  if (empty($address)) { array_push($errors, "address is required"); }
  if (empty($route)) { array_push($errors, "route is required"); }
    if (empty($selected_gender)) { array_push($errors, "gender is required"); }


  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM concession WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO concession (username, email, collegeID,address,route,selected_gender) 
          VALUES('$username', '$email', '$password', '$address', '$route', '$selected_gender')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
  }
}

//CONTACT
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $FName = mysqli_real_escape_string($db, $_POST['FName']);
  $LName = mysqli_real_escape_string($db, $_POST['LName']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $subject = mysqli_real_escape_string($db, $_POST['subject']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($FName)) { array_push($errors, "Firstname is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($LName)) { array_push($errors, "Firstname is required"); }
  if (empty($subject)) { array_push($errors, "Subject is required"); }
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM contact WHERE FName='$FName' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['FName'] === $FName) {
      array_push($errors, "Firstname already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

    if (count($errors) == 0) {
    $query = "INSERT INTO contact (FName, LName, email,subject) 
          VALUES('$FName', '$LName', '$email', '$subject')";
    mysqli_query($db, $query);
    $_SESSION['FName'] = $FName;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
  }
}

?>