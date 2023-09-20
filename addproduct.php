<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('includes/connection.php');

if(isset($_POST['addpro'])){
    $pname = $_POST['pname'];
    $pcat = $_POST['pcat'];
    $pdesc = $_POST['pdesc'];
    $price = $_POST['price'];
    $pimage = $_FILES['pimage']['name'];
    $pimage_tmp = $_FILES['pimage']['tmp_name'];
    $pimage_size = $_FILES['pimage']['size'];

    $check_product = "SELECT * from products where pname = '$pname'";
    $result = mysqli_query($connection, $check_product);
    if (mysqli_num_rows($result) > 0) {
        echo "<script> alert('Product already exist'); </script>";
    } else {
        $insert_pro = "INSERT INTO `products` (`pname`, `pcategory`, `pdescription`, `price`, `image`) VALUES ('$pname', '$pcat', '$pdesc', '$price', '$pimage')
        ";
        $connection_insert = mysqli_query($connection, $insert_pro);
        move_uploaded_file($pimage_tmp, 'images/' . $pimage);
        if($connection_insert){
            echo "<script> alert('Product added successfully'); </script>";

        }
        // header('location:addcat.php');
    }


}

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Modal -->
  <div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Products Page</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" class="form-group">
           

           <div>
              <div class="col-md-6">
                <label for="pname"> Product Name </label>
                <input type="text" name="pname" class="form-control">
              </div>
              <div class="col-md-12">
                 <br>
                <?php
                $product = "SELECT * from category";
                $result1 = mysqli_query($connection, $product);
                if(mysqli_num_rows($result1) > 0) {

                
                ?>
                <select class="form-select" name="pcat" aria-label="Default select example">
                    <option selected>Select Category</option>
                    <?php
                    while($row = mysqli_fetch_assoc($result1)){
                    ?>
                    <option value="<?php echo $row['cid']?>"><?php echo  $row['cname']?></option>
                    <?php
                    }  
                    }                
                    ?>
                </select>
                </div>

              <label for="floatingTextarea">Description</label>
              <div class="form-floating">
                <textarea name="pdesc" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            </div>
            


                <label for="image"> Image </label>
                <input type="file" name="pimage" class="form-control">
              <!-- <div class="col-md-6">
                <label for="pimage"> Choose Image </label>
                <input type="file" name="pimage" class="form-control">
              </div>
            </div> -->
            </div>
            <div>
                <label for="price"> Price </label>
                <input type="number" name="price" class="form-control">
              </div>
                                
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="addpro" class="btn btn-primary">Add Product</button>
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
          <h1 class="m-0">Product Page</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Product Page </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Products Table</h3>
      <a href="" class="btn btn-primary float-right btn-sm" data-bs-toggle="modal" data-bs-target="#AddUserModal"> Add Product </a>
    </div>

    <!-- /.card-header -->
    <?php
    $fetching_pro = "SELECT * from products as p INNER JOIN category as c on p.pcategory = c.cid";
    $pro_result = mysqli_query($connection, $fetching_pro);
    if (mysqli_num_rows($pro_result) > 0) {
       
    
    
    
    ?>

    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
           
            <th>Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($pro_data = mysqli_fetch_assoc($pro_result)) {

            ?>
            <tr>
              <td>
                <?php echo $pro_data['pname'] ?>
              </td>
              <td>
                <?php echo $pro_data['cname'] ?>
              </td>
              <td>
                <?php echo $pro_data['pdescription'] ?>
              </td>
              <td>
                <?php echo $pro_data['price'] ?>
              </td>
              <td>
                <img src="<?php echo 'images/' . $pro_data['image'] ?>" alt="" height="50px" width="50px">
                
              </td>

              
            </tr>
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