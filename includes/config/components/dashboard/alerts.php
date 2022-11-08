<?php
if (isset($_SESSION['sr_sent_message'])) {
    echo $_SESSION['sr_sent_message'];
}

if (isset($_SESSION['file_not_uploaded'])) {
    echo $_SESSION['file_not_uploaded'];
}


?>