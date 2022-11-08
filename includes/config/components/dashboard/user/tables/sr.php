<?php
$user = $_SESSION['user_id'];
$query = "SELECT * from support_request where user_id='$user' ORDER BY active DESC";
$query = mysqli_query($connection, $query);

echo "
                <th>Reason</th>
                <th>Comments</th>
            </tr>
        </thead>
    <tbody>
";
if ($query != false) {
    while ($row = mysqli_fetch_array($query)) {
        echo "
            <tr>
            <td>
                <form action='http://localhost/ecommerceSite/includes/config/controllers/user.php' method='post'>
                    <input type='number' name='request_id' value='".$row['request_id']."' readonly hidden />
                    <button class='actionBtn' type='submit' name='request_idButton'> View </button>
                </form>
            </td>
                <td>".$row['submitted']."</td>";

        if ($row['active'] == 1) {
            echo "<td> In Progress </td>";
        } else {
            echo "<td> Resolved </td>";
        }

        echo "
                <td>".$row['reason']."</td>
                <td>".$row['reason']."</td>
            </tr>
        ";
    }
} else {
    echo "
    <tr>
        <td colspan='4'><i>None found...</i></td>
    </tr>
    ";
}
// below, we close the table
echo "      </tbody>
        </table>
    </div>
</div>
";
?>