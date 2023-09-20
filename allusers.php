<?php

include('includes/connection.php');

if(isset($_POST['adduser'])){
$sqlquery = "SELECT * from `admin` where status ='1'";
$fetch = mysqli_query($connection, $sqlquery);
if(mysqli_num_rows($fetch) > 0){
    header('location: registeredusers.php');
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
 
    <title>Form handling </title>
</head>
<body>

<table class="table table-bordered text-center">
    <thead class="table table-dark">
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Phone</th>
    <th>Status</th>
    <th>Update</th>
    <th>Trash</th>
    </tr>
    </thead>
    <tbody>
<?php
while($row = mysqli_fetch_assoc($fetch)){
?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['password'];?></td>
            <td><?php echo $row['phone'];?></td>
            <td><?php echo $row['status'];?></td>
            <td><a href="update.php?id=<?php echo $row['id']?>" class="btn btn-warning"> UPDATE </a></td>
            <td><a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-success"> TRASH </a></td>
            
            
        </tr>
        <?php
        }
    }
        ?>
    </tbody>
</table>
</body>
</html>