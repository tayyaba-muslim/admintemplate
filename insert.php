<?php
include('includes/connection.php');

extract($_POST);
$insert = "INSERT INTO `ajax users` (`name`, `email`, `phone`) VALUES ('$name', '$email', '$phone')";
$result = mysqli_query($connection, $insert);
if($result){
    echo 1;
}else{
    echo 0;
}

?>