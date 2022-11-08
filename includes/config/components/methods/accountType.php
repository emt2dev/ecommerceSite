<?php
function accountType($email, $connection) {
    $query = "SELECT active FROM staff WHERE email=?";
  
    $query = $connection->prepare($query);
      $query->bind_param("s", $a);

        $a = $email;
    $query->execute();

    $indicator = $query->get_result();

    return $indicator->num_rows;

}
?>