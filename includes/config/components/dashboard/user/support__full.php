<div class="request__">
    <center>
    <h2><strong>Support Request</strong></h2>

    <br />

        <h3>Submitted: </h3>
            <p><em><?= $_SESSION['submitted'] ?></em></p>

    <br />

        <h3>Status: </h3>
            <p><em><?= ($_SESSION['active'] == 1) ? "In Progress" : "Closed" ?></em></p>
    
    <br />

        <h3>Assigned:</h3>
            <p><em><?= ($_SESSION['assigned_staff_id'] != NULL) ? "Yes" : "No" ?></em></p>
    <br />
    
    <h4><strong>REASON:</strong></h4>
        <p><?= $_SESSION['reason'] ?></p>

    <br />
    
    <h4><strong>Comments from us:</strong></h4>
        <p><?= ($_SESSION['notes__public'] != NULL) ? $_SESSION['notes__public'] : "Currently not assigned"?></p>

    <br />

    <h4><strong>Your Original Comments:</strong></h4>
        <p><?= $_SESSION['comments'] ?></p>
    </center>
</div>