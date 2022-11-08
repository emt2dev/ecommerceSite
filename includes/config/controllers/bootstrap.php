<?php
/* HEADERS */
header('X-Frame-Options: DENY'); // prevents iframes

/* SESSION STARTS */
if(!isset($_SESSION)) {
    session_start();
} else {
    session_start();
}

/* this file stores all session information. */
$_SESSION['base_url'] = 'http://localhost/madebycan.com/';
$_SESSION['base_assets'] = 'http://localhost/madebycan.com/includes/assets/';
$_SESSION['base_products'] = 'http://localhost/madebycan.com/includes/assets/uploads/products/';
$_SESSION['base_controllers'] = 'http://localhost/madebycan.com/includes/controllers/';
$_SESSION['base_models'] = 'http://localhost/madebycan.com/includes/models/';
$_SESSION['base_db'] = 'http://localhost/madebycan.com/includes/dbSession/db.php';


// $__db[] array
$__db[0] ="localhost"; // server
$__db[1] ="root"; // user
$__db[2] =""; // pass
$__db[3] ="madebycan"; //db name

// Create our database connection
$connection = new mysqli($__db[0], $__db[1], $__db[2], $__db[3]);

// Ensure our database connection works
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

// here, we ensure remove login attempt errors
if (isset($_SESSION['no_user_found'])) {
    unset($_SESSION['no_user_found']);
  }
  
  if (isset($_SESSION['incorrect_password'])) {
    unset($_SESSION['incorrect_password']);
  }

  /*** HERE WE INCLUDE OUR CUSTOM METHODS AND OUR MODELS ***/
  // Methods
  include '../components/methods/sanitizer.php'; // here we include of sanitizer method
  include '../components/methods/accountType.php'; // here we include of account indicator method
  include '../components/methods/signIn.php'; // here we include of sign in method
  include '../components/methods/register.php'; // here we include register method

  // Classes
  include '../models/backend/newProductModel.php'; // here we include our new product model
  include '../models/backend/newUserModel.php'; // here we include our new user model
  include '../models/userInit/support__request.php'; // here we include our new user model
?>
