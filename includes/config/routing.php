<?php
$routing = strtolower($_SERVER['REQUEST_URI']);

/* THE FOLLOWING LOGS OUT ANY USER TYPE */
if ($routing == '/ecommerceSite/?logout=true') {
    if ($_GET['logout'] == 'true') {
        session_destroy();
        unset($_SESSION);
        
        header('Location: http://localhost/ecommerceSite/');
        exit();
        }
}
    /* includes the html head section and our css*/
    include "includes/assets/html/heading.html";
    include 'includes/config/components/margins/navbar__icons.php';

    switch ($routing) {

        /* This is our landing page */
        case '/ecommerceSite/':
          
            /* Here we load the home, story, icons sections */
            include "includes/assets/html/partials/home__.html"; // Introduction of the company
            include "includes/assets/html/partials/story__.html"; // Tells the user about the company
            include "includes/assets/html/partials/icons__.html"; // Shows the benefits of the company

            include "includes/assets/html/partials/merch__start.html"; // creates the section html
            include "includes/config/components/landing/merch__popular.php"; // populates the most popular items based on orders
            include "includes/config/components/landing/merch__new.php"; // populates the newest items based on upload date
            include "includes/assets/html/partials/merch__end.html"; // closes the merch section

            include "includes/assets/html/partials/reviews__start.html"; // creates the reviews section html
            include "includes/config/components/landing/reviews__.php"; // populates random reviews
            include "includes/assets/html/partials/contact__.html"; // allows the user to create a contact us message to be viewed by the company's employees
            break;
        
        case '/ecommerceSite/catalog':
            echo "test successful";
            break;

        case '/ecommerceSite/sr':
            if (isset($_SESSION['staff_id'])) {

                include "includes/config/components/dashboard/support__full.php";
            } else if (isset($_SESSION['user_id'])) {

                include "includes/config/components/dashboard/support__full.php";
            }
            break;
        
        case '/ecommerceSite/dashboard':
            include "includes/config/components/dashboard/alerts.php"; // this is where users and staff can see new alerts

            if (isset($_SESSION['staff_id'])) {

                echo "<section class='tables__'>";
                 // this is where users can see their support requests

                if ($_SESSION['sr_priv']) {
                    include "includes/assets/html/tables/sr_open.html";
                    include "includes/config/components/dashboard/staff/tables/sr.php"; // this is where staff can see users who want out help
                }

                if ($_SESSION['fulfillment_priv']) {
                    include "includes/assets/html/tables/fulfillment_open.html";
                    include "includes/config/components/dashboard/staff/tables/fulfillment.php"; // this is where staff can see users who want out help
                }

                if ($_SESSION['product_priv']) {
                    
                    include "includes/assets/html/tables/products_open.html";
                    include "includes/config/components/dashboard/staff/tables/products.php"; // this is where staff can see products (current and discontinued)
                    include "includes/assets/html/forms/product.html"; // here staff can create a product, change product availability
                }
                echo "</section>";

                
                break;
            } else if (isset($_SESSION['user_id'])) {

                include "includes/assets/html/tables/sr_open.html"; // this is where users can see their support requests
                include "includes/config/components/dashboard/user/tables/sr.php";
                include "includes/assets/html/forms/support.html"; // this is where users can ask for help and see their help requests
                break;
            } else {
                
                header('Location: http://localhost/ecommerceSite/login');
                exit();
                break;
            }
            break;

        case '/ecommerceSite/login':
            include "includes/assets/html/forms/login.html"; // populates login page
            break;
    
        case '/ecommerceSite/register':
            include "includes/assets/html/forms/register.html"; // populates register page
            break;

        /*
        THIS SECTION WE USE IF THE USER ATTEMPTS TO ACCESS OUR .php file extensions,
            - this is secondary to our .htaccess files
        */
        case '/ecommerceSite/catalog.php':
            header('Location: http://localhost/ecommerceSite/catalog');
            exit();
            break;

        case '/ecommerceSite/dashboard.php':
            header('Location: http://localhost/ecommerceSite/dashboard');
            exit();
            break;

        case '/ecommerceSite/login.php':
            header('Location: http://localhost/ecommerceSite/login');
            exit();
            break;

        case '/ecommerceSite/register.php':
            header('Location: http://localhost/ecommerceSite/register');
            exit();
            break;

        /* END PHP SECURITY */

        default:
            echo"code to do list:
            <ol>
            <li>1. re-write models
            <li>2. put models in config file
            <li>4. create the database FOR new products, popular products
            <li>5. create database for reviews
            <li>7. create cart
            <li>8. create checkout section
            <li>9. create invoice page
            </ol>
            <br/>";

            break;
      }
      

      include "includes/assets/html/footing.html"; //  footer section

?>