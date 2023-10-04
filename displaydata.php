<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('includes/connection.php');


?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Modal -->
<div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">User Form</h1>
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
            <h1 class="m-0">Display Users</h1>
          </div>
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="modal-body">
    <form id= "form"class="form-group" method="POST" >
              <div>
                <label for="name"> Name </label>
                <input type="text" name="name" id="name"  class="form-control" required>
              </div>

              <div>
                <label for="email"> Email </label>
                <input type="email" name="email" id="email" class="form-control" required>
              </div>

              <div>
                <label for="phone"> Phone </label>
                <input type="number" name= "phone" id= "phone" class="form-control"required>
              </div>
            </div>
            <div class="modal-footer">
            <input type="submit" name="submit" id="submit" class="btn btn-primary">
            </div>
        </form>
                <h1>user data</h1>
         <!-- <button id="btn" class="btn btn-success">GET DATA</button> -->

<table class="table table-striped-columns">
  <thead class="table table-dark">
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
    </tr>
  </thead>
  <tbody id ="tab">
 
  </tbody>
</table>
              
                
</div>
</div>
 </div>
 <script src="js/jquery-3.7.1.min.js"></script>
  <script>
 $(document).ready(function(){
     function loaddata(){
            $.ajax({
                url :'loaddata.php',
                method:'POST',
                // data :obj ,array
                success: function(data){
                    console.log(data);
                    $('#tab').html(data);
                }
            })
        } loaddata()
      })
      
        $('#submit').click(function(){
        $.ajax({
        url : 'insert.php',
        method: 'POST',
        data : $('#form input').serialize(),
        success: function(data){
          console.log(data)
          if(data == 1){
            loaddata()
          }else{
            alert('not inserted')
          }
        } 

        })

        })
   


  </script>  
<?php
include('includes/footer.php');
?>