<?php
include('includes/connection.php');

$fetch = "SELECT * FROM `ajax users`";
$conn = mysqli_query($connection, $fetch);
if($conn){
    if(mysqli_num_rows($conn) >0){
        while($row = mysqli_fetch_assoc($conn)){
            echo '  <tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['phone'].'</td>
          </tr>';
        }
    }
}
?>