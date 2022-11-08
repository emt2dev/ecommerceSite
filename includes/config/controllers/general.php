<?php
include 'bootstrap.php'; // Here we set headers, open our db, and more!

/* login button */
if(isset($_POST['login__formButton'])) {
    
  if (isset($_SESSION['incorrectLogin'])) {
    unset($_SESSION['incorrectLogin']);
  }

  if (isset($_SESSION['staff_id'])) {
    unset($_SESSION['staff_id']);
  }

  if (isset($_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
  }

  $email = sanitize($_POST['login__email']);

  $type = accountType($email, $connection);
  signIn($connection, $email, $_POST['login__password'], $type);
}

/* Here is our registration code block */
if(isset($_POST['register__formButton'])) {
  
  if (isset($_SESSION['incorrectLogin'])) {
    unset($_SESSION['incorrectLogin']);
  }

  if (isset($_SESSION['staff_id'])) {
    unset($_SESSION['staff_id']);
  }

  if (isset($_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
  }
  
  $email = sanitize($_POST['register__email']);
  register($connection, $email, $_POST['register__password']);
}




?>
