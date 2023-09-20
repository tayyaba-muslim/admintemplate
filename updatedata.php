<?php
include('includes/connection.php');

if(isset($_POST['update'])){
    $id = mysqli_real_escape_string($connection,$_POST['id']);
    $name = mysqli_real_escape_string($connection,$_POST['name']);
    $email = mysqli_real_escape_string($connection,$_POST['email']);
    $phone = mysqli_real_escape_string($connection,$_POST['phone']);



$update = "UPDATE `admin` set name = '$name', email = '$email', phone = '$phone'
 where id = '$id'";
$res = mysqli_query($connection, $update);
if(!$res){
    die("query failed");
}
header('location:registeredusers.php');

}
?>