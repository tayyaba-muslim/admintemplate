<?php
include('includes/connection.php');
$id = $_GET['id'];

$delete = "UPDATE `admin` SET status = '0' where id ='$id' ";

$result1 = mysqli_query($connection, $delete);

if(!$result1){
    die("query failed");
}
header('location:registeredusers.php');


?>