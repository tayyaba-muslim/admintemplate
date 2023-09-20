<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('includes/connection.php');

$fetch = "SELECT * from `admin` where status ='0'";
$data = mysqli_query($connection, $fetch);
if(mysqli_num_rows($data) > 0){
}
?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Modal -->
<div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">User Registration Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="trashdata.php" class="form-group" method="POST">
              <div>
              <input type="hidden" name="id" class="form-control">
                <label for="name"> Name </label>
                <input type="text" name="name" class="form-control">
              </div>

              <div>
                <label for="email"> Email </label>
                <input type="email" name="email" class="form-control">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label for="pass"> Password </label>
                  <input type="password" name="pass" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="cpass"> Confirm Password </label>
                  <input type="password" name="cpass" class="form-control">
                </div>
              </div>

              <div>
                <label for="phone"> Phone </label>
                <input type="number" name= "phone" class="form-control">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="adduser" value = "adduser" class="btn btn-primary">Add User</button>
            </div>
        </form>

          

    </div>
  </div>
</div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Trash</h1>
          </div>
 
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="card">
       

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                  <?php
while($row = mysqli_fetch_assoc($data)){
?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['phone'];?></td>
            <td><a href="perdelete.php?id=<?php echo $row['id']?>" class="btn btn-danger"> DELETE</a></td>
            <td><a href="restore.php?id=<?php echo $row['id']?>" class="btn btn-primary"> RESTORE</a></td>
            
            
        </tr>
        <?php
}

?>
                  </tbody>
                </table>
              </div>
        </div>
 </div>

<?php
include('includes/footer.php');
?>