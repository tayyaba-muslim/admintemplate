<?php
include('includes/connection.php');

if(isset($_POST['adduser'])){
    $name = mysqli_real_escape_string($connection,$_POST['name']);
    $email = mysqli_real_escape_string($connection,$_POST['email']);
    $pass = mysqli_real_escape_string($connection,$_POST['pass']);
    $cpass = mysqli_real_escape_string($connection,$_POST['cpass']);
    $phone = mysqli_real_escape_string($connection,$_POST['phone']);

    if($pass == $cpass){
        $encpass = password_hash($pass, PASSWORD_BCRYPT);
        $email_check = "SELECT * from admin where email = '$email'";
        $email_checkdb = mysqli_query($connection, $email_check);
        if(mysqli_num_rows($email_checkdb) > 0){
            ?>
<script>
    alert('email already exist');
</script>
            <?php
        }else{
            $insertquery = "INSERT INTO `admin` (`name`, `email`, `password`, `phone`) 
            VALUES ('$name', '$email', '$encpass', '$phone')";

            $result = mysqli_query($connection,$insertquery);
            if($result){
                header('location: registeredusers.php');
            }
        }
    }else{
        echo "pass and cpass must match";
    }
}

?>