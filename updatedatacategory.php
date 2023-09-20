<?php
include('includes/connection.php');

if(isset($_POST['update'])){
    $id = mysqli_real_escape_string($connection,$_POST['catid']);
    $name = mysqli_real_escape_string($connection,$_POST['catname']);
    $type = mysqli_real_escape_string($connection,$_POST['cattype']);
    $desc = mysqli_real_escape_string($connection,$_POST['catdes']);






$update = "UPDATE `category` set cname = '$name', ctype = '$type', description = '$desc'
 where cid = '$id'";
$res = mysqli_query($connection, $update);
if(!$res){
    die("query failed");
}
header('location:fetchcat.php');

}
?>