<?php session_start(); ?>
<?php include('head.php') ?>
<?php include('navbar.php') ?>
<?php include('connect.php'); ?>

<body>
  <div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <!-- <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">
              Home
          </div> -->
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
          <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <link rel="stylesheet" href="style.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <script src="ajax.js"></script>
          
          
  <div class="text-green"><strong> 
    
    <?php if(isset($_SESSION['success'])){
        echo $_SESSION['success'];
        unset($_SESSION['success']);
        } ?></strong> </div>
  
         
          

          
      
       
      
      

            <p id="success"></p>
            <div class="table-wrapper">
              <div class="table-title">
                <div class="row">
                  <div class="col-sm-6">
                    <h2><b>LIST OF EMPLOYEES</b></h2>
                  </div>
                  <div class="col-sm-6">
                  
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"> <span>Add
                        Employee</span></a>
                        <a href="#addAdminModal" class="btn btn-info" data-toggle="modal"> <span>Add
                        New Admin</span></a>
                    
                  </div>
                </div>
              </div>
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    
                    <th>SL NO</th>
                    <th>NAME</th>
                    <th>TITLE</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>CITY</th>
                    <th>BASIC SALARY</th>
                    
                    <th>ACTION</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $result = mysqli_query($conn, "SELECT * FROM employee_details");
                  $i = 1;
                  while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr id="<?php echo $row["id"]; ?>">
                      
                      <td>
                        <?php echo $i; ?>
                      </td>
                      <td>
                        <?php echo $row["name"]; ?>
                      </td>
                      <td>
                        <?php echo $row["title"]; ?>
                      </td>
                      <td>
                        <?php echo $row["email"]; ?>
                      </td>
                      <td>
                        <?php echo $row["phone"]; ?>
                      </td>
                      <td>
                        <?php echo $row["city"]; ?>
                      </td>
                      <td>
                        <?php echo $row["basic_salary"]; ?>
                      </td>
                      
                      <td>
                        <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                          <i class="material-icons update" data-toggle="tooltip" data-id="<?php echo $row["id"]; ?>"
                            data-name="<?php echo $row["name"]; ?>" data-title="<?php echo $row["title"]; ?>"
                            data-email="<?php echo $row["email"]; ?>" data-phone="<?php echo $row["phone"]; ?>"
                            data-city="<?php echo $row["city"]; ?>" data-salary="<?php echo $row["basic_salary"]; ?>"
                                                        
                            title="Edit"></i>
                        </a>
                        <a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>"
                          data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete"></i></a>
                      </td>
                    </tr>
                    <?php
                    $i++;
                  }
                  ?>
                </tbody>
              </table>

            </div>
          </div>
          <!-- Add Modal HTML -->
          <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form id="user_form">
                  <div class="modal-header">
                    <h4 class="modal-title">Add Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" id="title" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Mobile No.</label>
                      <input type="phone" id="phone" name="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>City</label>
                      <input type="city" id="city" name="city" class="form-control" required>
                      </div>
                      <div>
                    <label>Basic Salary</label>
                      <input type="salary" id="salary" name="salary" class="form-control" required>
                    </div>
                    
                    
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" value="1" name="type">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="button" class="btn btn-success" id="btn-add" name='add'>Add</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

                   <!-- Add Admin Model -->
          <div id="addAdminModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form action="add_admin.php" method="post">
                  <div class="modal-header">
                    <h4 class="modal-title">Create New Admin</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text"  name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="">Password</label>
                      <input type="password"  name="password" class="form-control" required>
                    </div>
                    
                    
                  </div>
                  <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="submit" class="btn btn-success" id="liveAlertBtn" name='add'>Add</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Edit Modal HTML -->
          <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form id="update_form">
                  <div class="modal-header">
                    <h4 class="modal-title">Edit Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  </div>
                  <div class="modal-body">
                    <input type="hidden" id="id_u" name="id" class="form-control" required>
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" id="name_u" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" id="title_u" name="title" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" id="email_u" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Phone</label>
                      <input type="phone" id="phone_u" name="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>City</label>
                      <input type="city" id="city_u" name="city" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Basic Salary</label>
                      <input type="salary" id="salary_u" name="salary" class="form-control" required>
                    </div>            
                    
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" value="2" name="type">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="button" class="btn btn-info" id="update">Update</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Delete Modal HTML -->
          <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form>
                  <div class="modal-header">
                    <h4 class="modal-title">Delete</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  </div>
                  <div class="modal-body">
                    <input type="hidden" id="id_d" name="id" class="form-control">
                    <p>Are you sure you want to delete these Records?</p>
                  <!--  <p class="text-warning"><small>write smr thing </small></p> -->
                  </div>
                  <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="button" class="btn btn-danger" id="delete">Delete</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page body -->
</body>

</html>
<?php include('footer.php') ?>