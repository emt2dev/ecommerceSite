<?php
$staff = $_SESSION['staff_id'];
$query = "SELECT * from support_request where staff_id='$staff' ORDER BY active ASC";
$query = mysqli_query($connection, $query);

echo "
                <th>Assigned To</th>
                <th>Fulfillment ID</th>
                <th>Order ID</th>
                <th>Product ID</th>
                <th>Reason</th>
                <th>Comments</th>
                <th>Public Notes</th>
                <th>Internal Notes</th>
            </tr>
        </thead>
    <tbody>
";
/* THIS DISPLAYS SRs assigned to the logged in staff member */
if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_array($query)) {
        echo "
            <tr>
                <td>
                    <form action='http://localhost/ecommerceSite/includes/config/controllers/staff.php' method='post'>
                        <input type='number' name='request_id' value='".$row['request_id']."' readonly hidden />
                        <button class='actionBtn' type='submit' name='request_idButton'>View</button>
                    </form>
                </td>
                <td>".$row['request_id']."</td>
                <td>".$row['submitted']."</td>";

            if ($row['active'] == 1) {
                echo "<td> In Progress </td>";
            } else {
                echo "<td> Resolved </td>";
            }

            echo "
                <td>".$row['staff_id']."</td>
                <td>".$row['fulfillment_id']."</td>
                <td>".$row['order_id']."</td>
                <td>".$row['product_id']."</td>
                <td>".$row['reason']."</td>
                <td>".$row['comments']."</td>";
                
            if ($row['notes__public'] != NULL) {
                echo "<td>None</td>";
            } else {
                echo "<td>Yes</td>";
            }

            if ($row['notes__internal'] != NULL) {
                echo "<td>None</td>";
            } else {
                echo "<td>Yes</td>";
            }
                echo "
            </tr>
        ";
    }
} else {
    echo "
        <tr>
            <td colspan='10'>No assigned SRs...</td>  
        </tr>
    ";
}
// below, we do the same but show the SRs that haven't been assigned
$query = "SELECT * from support_request where staff_id='0' ORDER BY active ASC";
$query = mysqli_query($connection, $query);

if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_array($query)) {
        echo "
            <tr>
            <td>
                <form action='http://localhost/ecommerceSite/includes/config/controllers/staff.php' method='post'>
                    <input type='number' name='request_id' value='".$row['request_id']."' readonly hidden />
                    <button class='actionBtn' type='submit' name='request_idButton'>View</button>
                </form>
            </td>
            <td>".$row['request_id']."</td>
            <td>".$row['submitted']."</td>";
        if ($row['active'] == 1) {
            echo "<td> In Progress </td>";
        } else {
            echo "<td> Resolved </td>";
        }

        echo "
            <td>".$row['staff_id']."</td>
            <td>".$row['fulfillment_id']."</td>
            <td>".$row['order_id']."</td>
            <td>".$row['product_id']."</td>
            <td>".$row['reason']."</td>";
            
            if ($row['comments'] != NULL) {
                echo "<td>Yes</td>";
            } else {
                echo "<td>None</td>";
            }

            if ($row['notes__public'] != NULL) {
                echo "<td>Yes</td>";
            } else {
                echo "<td>None</td>";
            }

            if ($row['notes__internal'] != NULL) {
                echo "<td>Yes</td>";
            } else {
                echo "<td>None</td>";
            }
                echo "
            </tr>
        ";
    }
} else {
    echo "
        <tr>
            <td colspan='10'>No unassigned support requests...</td>  
        </tr>
    ";
}
// below we close the table
echo "      </tbody>
        </table>
    </div>
</div>
";
?>