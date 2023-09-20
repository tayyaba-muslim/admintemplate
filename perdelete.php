<?php

include('includes/connection.php');

$id = $_GET['id'];
$deldata ="DELETE  from `admin` where id = '$id'";
$conn = mysqli_query($connection , $deldata);
if($conn){
    "<script> alert('are you sure?'); </script>";
    header('location:registeredusers.php');
}

?>