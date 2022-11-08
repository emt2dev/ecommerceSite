
<?php
if ($_SESSION['active'] == 1) {
    $status = 'open';
} else {
    $status = 'closed';
}

if ($_SESSION['assigned_staff_id'] == $_SESSION['staff_id']) {
    $ownership = ' Me';
} else {
    $ownership = ' '.$_SESSION['staff_id'];
}

if ($_SESSION['notes__public']) {
    $pNotes = $_SESSION['notes__public'];
} else {
    $pNotes = 'No existing notes';
}

if ($_SESSION['notes__internal']) {
    $iNotes = $_SESSION['notes__internal'];
} else {
    $iNotes = 'No existing notes';
}

if (isset($_SESSION['staff_id'])) {
    echo "
    <div class='request__'>
    <center>
    <h2><strong>Support Request#</strong>". $_SESSION['request_id'] ."</h2>

    <br />

        <h3>Submitted: </h3>
            <p><em>". $_SESSION['submitted'] ."</em></p>

    <br />


        <h3>Status: <em>".$status."</em></h3>
        <form method='post' action='#' class='updateSR__'>
            <label>Update Status</label>
                <select name='updateSR__status'>
                    <option value='1'>Open</option>
                    <option value='0'>Closed</option>
                </select> 
            <button type='submit' name='updateSR__statusBtn'>Update</button>
        </form>
    
    <br />

        <h3>Assigned to <em>".$ownership."</h3>
    <br />
    
    <h4><strong>REASON:</strong></h4>
        <p>". $_SESSION['reason'] ."</p>

    <br />
    
    <h4><strong>Public Notes:</strong></h4>
        <form method='post' action='#'>
            <label>".$pNotes."</label>
            <br />
                <textarea class='updateSR__inputText' name='updateSR__public' ></textarea>
            <br />
            <button type='submit' name='updateSR__publicBtn'>Update</button>
        </form>
        

    <br />
        
    <h4><strong>Internal Notes:</strong></h4>
    <form method='post' action='#'>
            <label>".$iNotes."</label>
            <br/>
                <textarea class='updateSR__inputText' name='updateSR__internal'></textarea>
            <br/>
            <button type='submit' name='updateSR__internalBtn'>Update</button>
        </form>
    <br />

    <h4><strong>Their Original Comments:</strong></h4>
        <p>".$_SESSION['comments'] ."</p>
    </center>
</div>
    ";
} else {
    echo "
    <div class='request__'>
    <center>
    <h2><strong>Support Request#</strong>". $_SESSION['request_id'] ."</h2>

    <br />

        <h3>Submitted: </h3>
            <p><em>". $_SESSION['submitted'] ."</em></p>

    <br />


        <h3>Status: <em>".$status."em></h3>
        <form method='post' action='#' class='updateSR__'>
            <label>Update Status</label>
                <select name='updateSR__status'>
                    <option value='1'>Open</option>
                    <option value='0'>Closed</option>
                </select> 
            <button type='submit' name='updateSR__statusBtn'>Update</button>
        </form>
    
    <br />

        <h3>Assigned: <em>".$ownership."h3>
    <br />
    
    <h4><strong>REASON:</strong></h4>
        <p>". $_SESSION['reason'] ."</p>

    <br />
    
    <h4><strong>Public Notes:</strong></h4>
        <form method='post' action='#'>
            <label>".$pNotes."</label>
            <br />
                <textarea class='updateSR__inputText' name='updateSR__public' ></textarea>
            <br />
            <button type='submit' name='updateSR__publicBtn'>Update</button>
        </form>
        

    <br />

    <h4><strong>Your Original Comments:</strong></h4>
        <p>".$_SESSION['comments'] ."</p>
    </center>
</div>
    ";
}

?>