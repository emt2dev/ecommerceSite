<?php
class newUserModel {
    public function __construct($email, $password) {
      $this->email = $email;
      $this->password = password_hash($password, PASSWORD_DEFAULT);
 
      $this->vkey = password_hash(time().$email, PASSWORD_DEFAULT);
      $this->created = date('Y-d-m');
  }
  
    public function save($connection) {
      $query = "INSERT INTO users (email, password, vkey, created) VALUES (?, ?, ?, ?)";
  
      $query = $connection->prepare($query);
      $query->bind_param("ssss", $a, $b, $m, $n);
  
        $a = $this->email;
        $b = $this->password;

        $m = $this->vkey;
        $n = $this->created;
  
      $query->execute();
    }
}



?>