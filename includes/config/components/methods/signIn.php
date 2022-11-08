<?php
function signIn($connection, $email, $password, $type) {

    if ($type == 1) {
        /* HERE WE DETERMINE IF THE PASSWORD MATCHES BEFORE GETTING ALL FROM THE ROW */
        $query = "SELECT * FROM staff WHERE email=?";

        $query = $connection->prepare($query);
            $query->bind_param("s", $a);
                $a = $email;
        $query->execute();
  
        $result = $query->get_result();
        $row = $result->fetch_assoc();

        if(password_verify($password, $row['password'])) {
            
        /* HERE WE ASSIGN EACH COLUMN TO THE SESSION */
            $_SESSION['staff_id']= $row['staff_id'];
            $_SESSION['email']= $row['email'];
            $_SESSION['sr_priv'] = $row['sr_priv'];
            $_SESSION['fulfillment_priv'] = $row['fulfillment_priv'];
            $_SESSION['product_priv'] = $row['product_priv'];
            // $_SESSION['name']= $row['name'];
            // $_SESSION['address']= $row['address'];
            // $_SESSION['city']= $row['city'];
            // $_SESSION['state']= $row['state'];
            // $_SESSION['zipCode']= $row['zipCode'];
            // $_SESSION['position']= $row['position'];
            // $_SESSION['supportCaseCount']= $row['supportCaseCount'];

            header('Location: http://localhost/ecommerceSite/dashboard');
            exit();

        } else {
            
            $_SESSION['incorrectLogin'] = "The email or password that you entered was incorrect";
            header('Location: http://localhost/ecommerceSite/login');
            exit();
        }
    } else {
        /* HERE WE DETERMINE IF THE PASSWORD MATCHES BEFORE GETTING ALL FROM THE ROW */
        $query = "SELECT * FROM users WHERE email=?";

        $query = $connection->prepare($query);
            $query->bind_param("s", $a);
                $a = $email;
        $query->execute();
  
        $result = $query->get_result();
        $row = $result->fetch_assoc(); 

        if(password_verify($password, $row['password'])) {
            $_SESSION['user_id']= $row['user_id'];
            $_SESSION['email']= $row['email'];

            print_r($_SESSION);
            // $_SESSION['name']= $row['name'];
            // $_SESSION['company']= $row['company'];
            // $_SESSION['address']= $row['address'];
            // $_SESSION['city']= $row['city'];
            // $_SESSION['state']= $row['state'];
            // $_SESSION['zipCode']= $row['zipCode'];
            // $_SESSION['totalPurchased']= $row['totalPurchased'];
            // $_SESSION['orderCount']= $row['orderCount'];

            header('Location: http://localhost/ecommerceSite/dashboard');
            exit();
        }   else {
                $_SESSION['incorrectLogin'] = "The email or password that you entered was correct";
                header('Location: http://localhost/ecommerceSite/login');
                exit();
        }
    
}}
?>