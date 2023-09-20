<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('includes/connection.php');
$fetch = "SELECT * FROM `products` where status = '1'";

$data = mysqli_query($connection, $fetch);

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Modal -->
  
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">View Products</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">View Product</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">View Product</h3>
      <a href="" class="btn btn-primary float-right btn-sm" data-bs-toggle="modal" data-bs-target="#AddUserModal"> Add
        Product</a>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th> Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Price</th>
            <th>image</th>

          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = mysqli_fetch_assoc($data)) {

            ?>
            <tr>
              <td>
                <?php echo $row['pname'] ?>
              </td>
              <td>
                <?php echo $row['pcategory'] ?>
              </td>
              <td>
                <?php echo $row['pdescription'] ?>
              </td>
              <td>
                <?php echo $row['price'] ?>
              </td>
              
              <td><img src="<?php echo 'images/' .$row['image']?>" alt="" height="100px" width="100px"></td>
              

              <td><a href="updateproduct.php?id=<?php echo $row['id']?>" class="btn btn-warning"> UPDATE </a></td>
            <td><a href="deleteproduct.php?id=<?php echo $row['id']?>" class="btn btn-success"> TRASH </a></td>
          
            </tr>
            <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>




