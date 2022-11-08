<?php
    if(isset($_SESSION['staff_id'])) {
        echo "<a href='".$_SESSION['base_url']."dashboard' class='fas fa-user'> Dashboard | </a>";
        echo "<a href='".$_SESSION['base_url']."?logout=true' class='fas fa-user'>Logout</a>";
    } else if(isset($_SESSION['user_id'])) {

        echo "<a href='".$_SESSION['base_url']."dashboard' class='fas fa-user'> Account | </a>";
        echo "<a href='".$_SESSION['base_url']."catalog' class='fas fa-shopping-cart'> Cart | </a>";
        echo "<a href='".$_SESSION['base_url']."?logout=true' class='fas fa-user'>Logout</a>";

    } else {
        echo "<a href='".$_SESSION['base_url']."login' class='fas fa-user'> Login</a>";
    }
    echo "
        </div>
    </div>
</section>
</div>
<br /><br /><br /><br />";
?>