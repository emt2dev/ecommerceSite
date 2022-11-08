<?php
    function register($connection, $email, $password) {
    /* HERE WE DETERMINE IF THE EMAIL ADDRESS ALREADY EXISTS */
    $query = "SELECT email FROM staff WHERE email=?";

    $query = $connection->prepare($query);
    $query->bind_param("s", $a);

        $a = $email;

    $query->execute();
    $query->store_result();
    
    $existsChecker = $query->num_rows();

    if ($existsChecker == 1) {

        $_SESSION['incorrectLogin'] = "Admin emails cannot be used to create user accounts";
        header('Location: http://localhost/madebycan.com/login');
        exit();
    } else {
        echo "here";
        /* HERE WE DETERMINE IF THE EMAIL ADDRESS ALREADY EXISTS */
        $query = "SELECT email FROM users WHERE email=?";
        
        $query = $connection->prepare($query);
        $query->bind_param("s", $a);

            $a = $email;

        $query->execute();
        $query->store_result();
        $existsChecker = $query->num_rows();

        if ($existsChecker == 1) {
                $_SESSION['incorrectLogin'] = "The email already exists";
                header('Location: http://localhost/madebycan.com/login');
                exit();
        }   else {
            $newUser = new newUserModel($email, $password);
            $newUser->save($connection);

            $_SESSION['incorrectLogin'] = "Please sign into your new account";
            header('Location: http://localhost/madebycan.com/login');
        }
    }
}

?>