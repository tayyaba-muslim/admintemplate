<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('includes/connection.php');
$id = $_GET['id'];
// echo $user_id;
$fetch ="SELECT * from `admin` where id = '$id'";
$data = mysqli_query($connection, $fetch);
if(!$data){
    die("query failed");
}
if(mysqli_num_rows($data) > 0){

    while($row = mysqli_fetch_assoc($data)){
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
      

          

    </div>
  </div>
</div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Updates Details</h1>
          </div>
        
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

        <!-- Main content -->
       
                <div class="modal-body">
                    

        <form action="updatedata.php" class="form-group" method="POST">
              <div>
              <input type="hidden" name="id" class="form-control" value="<?php echo $row['id']?>">
                <label for="name"> Name </label>
                <input type="text" name="name" class="form-control"value="<?php echo $row['name']?>">
              </div>

              <div>
                <label for="email"> Email </label>
                <input type="email" name="email" class="form-control"value="<?php echo $row['email']?>">
              </div>
              

              <div>
                <label for="phone"> Phone </label>
                <input type="number" name= "phone" class="form-control"value="<?php echo $row['phone']?>">
              </div>
            </div>
            <div>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="update" value = "update" class="btn btn-primary">Update </button>
    </div>
        </form>
              </div>

        <?php
        }
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