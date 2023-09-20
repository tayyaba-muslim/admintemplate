<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('includes/connection.php');

// Check if a category ID is provided in the URL.
$id = $_GET['id'];
$fetch = "SELECT * FROM `category` WHERE cid = '$id'";
$data = mysqli_query($connection, $fetch);
if (!$data) {
    die("Query failed");
}
if (mysqli_num_rows($data) > 0) {
    // Fetch category data here (if needed).
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Modal for adding products -->
    <div class="modal fade" id="AddProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <!-- Modal content goes here -->
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
                        <li class="breadcrumb-item active">Product Page</li>
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
            <a href="#" class="btn btn-primary float-right btn-sm" data-bs-toggle="modal" data-bs-target="#AddProductModal"> Add Product </a>
        </div>

        <!-- /.card-header -->
        <?php
        // Fetch products and display them in a table (if needed).
        $fetching_pro = "SELECT * FROM products AS p INNER JOIN category AS c ON p.pcategory = c.cid";
        $pro_result = mysqli_query($connection, $fetching_pro);
        // Process the $pro_result data and display in a table.
        ?>

    </div>
</div>

<?php
include('includes/footer.php');
?>
