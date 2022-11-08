<?php
$staff = $_SESSION['staff_id'];
$query = "SELECT * from products ORDER BY cost ASC";
$query = mysqli_query($connection, $query);

if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_array($query)) {
        echo "
        <tr>
            <td>
            <form action='http://localhost/madebycan.com/includes/config/controllers/staff.php' method='post'>
                <input type='number' name='request_id' value='".$row['product_id']."' readonly hidden />
                <button class='actionBtn' type='submit' name='request_idButton'> View </button>
            </form>
            </td>
            <td>".$row['product_id']."</td>
            <td>".$row['showcase']."</td>
            <td>".$row['name']."</td>
            <td>".$row['cost']."</td>
            <td>".($row['discountPercentage']*100)."%</td>
            <td>".$row['quantity']."</td>
            <td>".$row['type']."</td>";

            if ($row['quantity'] == 0 || $row['quantity'] > $row['reorderAtQuantity']) {
                echo "<td>Please Order</td>";
            } else {
                echo "<td>Not Indicated</td>";
            }
            echo "
            <td>".$row['purchased']."</td>  
            <td>".$row['restockDate']."</td>  
        </tr>
        ";
    }
} else {
    echo "
        <tr>
            <td colspan='10'>Please add a product...</td>  
        </tr>
    ";
}


echo "
            </tbody>
        </table>
    </div>
</div>
";
?>